<?php

namespace App\Http\Controllers;

use App\Models\Hielog;
use App\Models\UnhlsTest;
use App\Models\UnhlsAnalyteResult;
use App\Models\Measure;
use App\Models\UnhlsTestResult;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;

class InterfaceController extends Controller {

    public function storeGenexpertResult(Request $request) {
        $specimenID = "";
        $testid = null;
        $machine = $request['level0']['header']['SenderNameOrID']['SystemName'];

        if (isset($request['level2']['TestOrder']['SpecimenID'])) {
            $specimenID = $this->getSpecimenID($request['level2']['TestOrder']['SpecimenID']);

            if (isset($specimenID)) {
                $test = UnhlsTest::where('id', $specimenID)->first();

                if ($test === null) {
                    $response = [
                        "status" => "500 Unknown Specimen ID",
                        "lastModified" => Carbon::now()->toDateTimeString()
                    ];
                    $this->logRequest($request, "failed", "500", $response, null);
                    return response()->json($response, "500");
                }
                $testid = $test->id;
                foreach ($request['level3']['MainResult'] as $result) {

                    $measure = Measure::where('name', $result['UniversalTestID']['SystemTestID'])->first();
                    $testResult = UnhlsTestResult::where('test_id', $test->id)->where('measure_id', $measure->id)->first();
                    if ($testResult === null && $measure !== null) {
                        $testResult = new UnhlsTestResult();

                        if (isset($result['DataOrMeasurementValue']['QualitativeValue'])) {
                            $testResult->result = $result['DataOrMeasurementValue']['QualitativeValue'];
                        } elseif (isset($result['DataOrMeasurementValue']['QuantitativeValue'])) {
                            $testResult->result = $result['DataOrMeasurementValue']['QuantitativeValue'];
                        }
                        $testResult->sample_id = $specimenID;
                        $testResult->measure_id = $measure->id;
                        $testResult->test_id = $test->id;

                        try {
                            $testResult->save();
                            $test->test_status_id = 4;
                            $test->time_completed = Carbon::now();
                            $test->method_used = $machine;
                            $test->save();
                        } catch (Exception $e) {
                            Log::error($e->getMessage());
                            $response = [
                                "status" => "500" . $e->getMessage(),
                                "lastModified" => Carbon::now()->toDateTimeString()
                            ];
                            $this->logRequest($request, "failed", "500", $response, null);
                            return response()->json($response, "500");
                        }

                        foreach ($result['AnalyteResults'] as $analyte) {

                            $analyteResult = new UnhlsAnalyteResult();
                            $analyteResult->analyte_name = $analyte['UniversalTestID']['AnalyteName'];
                            if (isset($analyte['DataOrMeasurementValue']['QualitativeValue'])) {
                                $analyteResult->analyte_result = $analyte['DataOrMeasurementValue']['QualitativeValue'];
                            } else if (isset($analyte['DataOrMeasurementValue']['QuantitativeValue'])) {
                                $analyteResult->analyte_result = $analyte['DataOrMeasurementValue']['QuantitativeValue'];
                            }
                            $analyteResult->test_id = $test->id;

                            foreach ($analyte['ComplimentaryResults'] as $complimentary) {

                                if (isset($complimentary['UniversalTestID']['ComplementaryResultName']) && strcmp($complimentary['UniversalTestID']['ComplementaryResultName'], "Ct") == 0) {

                                    if (isset($complimentary['DataOrMeasurementValue']['QualitativeValue'])) {
                                        $analyteResult->ct = $complimentary['DataOrMeasurementValue']['QualitativeValue'];
                                    } else if (isset($complimentary['DataOrMeasurementValue']['QuantitativeValue'])) {
                                        $analyteResult->ct = $complimentary['DataOrMeasurementValue']['QuantitativeValue'];
                                    }
                                }
                                if (isset($complimentary['UniversalTestID']['ComplementaryResultName']) && strcmp($complimentary['UniversalTestID']['ComplementaryResultName'], "EndPt") == 0) {
                                    if (isset($complimentary['DataOrMeasurementValue']['QualitativeValue'])) {
                                        $analyteResult->endpt = $complimentary['DataOrMeasurementValue']['QualitativeValue'];
                                    } else if (isset($complimentary['DataOrMeasurementValue']['QuantitativeValue'])) {
                                        $analyteResult->endpt = $complimentary['DataOrMeasurementValue']['QuantitativeValue'];
                                    }
                                }
                            }

                            try {
                                $analyteResult->save();
                            } catch (Exception $e) {
                                Log::error($e->getMessage());

                                $response = [
                                    "status" => "500" . $e->getMessage(),
                                    "lastModified" => Carbon::now()->toDateTimeString()
                                ];
                                $this->logRequest($request, "failed", "500", $response, null);
                                return response()->json($response, "500");
                            }
                        }
                    } else {
//                        $response = [
//                            "status" => "409 Duplicate Entry",
//                            "lastModified" => Carbon::now()->toDateTimeString()
//                        ];
//                        return response()->json($response, 409);
                    }
                }
            }
            $response = [
                "status" => "200 OK",
                "lastModified" => Carbon::now()->toDateTimeString()
            ];
            $this->logRequest($request, "successful", "200", $response, $testid);
            return response()->json($response, 200);
        }
    }

    public function getSpecimenID($ID) {
        //dd($ID);
        if (is_numeric($ID)) {
            return $ID;
        }

        if (Str::contains($ID, '-')) {
            $ids = explode("-", $ID);
            if (is_numeric($ids[1])) {
                return $ids[1];
            }
        }
        return "";
    }

    public function storeMindrayResult(Request $request) {
        $specimenID = "";
        $testid = null;
      // dd($request);

        if (isset($request['testOrder']['specimenID'])) {
            $specimenID = $this->getSpecimenID($request['testOrder']['specimenID']);
//            dd($specimenID);
            if (isset($specimenID)) {
//                $test = UnhlsTest::where('specimen_id', $specimenID)->first();
$test = UnhlsTest::where('id', $specimenID)->first();

//                     dd($test);
                if ($test === null) {
                    $response = [
                        "status" => "500 Unknown Specimen ID",
                        "lastModified" => Carbon::now()->toDateTimeString()
                    ];
                    $this->logRequest($request, "failed", "500", $response, null);
                    return response()->json($response, "500");
                }
                $testid = $test->id;
                foreach ($request['result']['parameterData'] as $result) {

                    switch ($result['universalTestID']['universalTestIDName']) {
                         case "WBC":
                            $measure = Measure::where('name', "WBC")->first();
                            if ($measure === null) {
                                $measure = Measure::where('name', $result['universalTestID']['universalTestIDName'])->first();
                            }
                            break;
                        case "NEU#":
                            $measure = Measure::where('name', "NEUT#")->first();
                            if ($measure === null) {
                                $measure = Measure::where('name', $result['universalTestID']['universalTestIDName'])->first();
                            }
//                            dd(Measure::where('name', "NEUT#")->first());
                            break;
                        case "LYM#":
                            $measure = Measure::where('name', "LYMPH#")->first();
                            if ($measure === null) {
                                $measure = Measure::where('name', $result['universalTestID']['universalTestIDName'])->first();
                            }
                            break;
                        case "MON#":
                            $measure = Measure::where('name', "MONO#")->first();
                            if ($measure === null) {
                                $measure = Measure::where('name', $result['universalTestID']['universalTestIDName'])->first();
                            }
                            break;
                        case "EOS#":
                            $measure = Measure::where('name', "EO#")->first();
                            if ($measure === null) {
                                $measure = Measure::where('name', $result['universalTestID']['universalTestIDName'])->first();
                            }
                            break;
                        case "BAS#":
                            $measure = Measure::where('name', "BASO#")->first();
                            if ($measure === null) {
                                $measure = Measure::where('name', $result['universalTestID']['universalTestIDName'])->first();
                            }
                            break;
                        case "NEU%":
                            $measure = Measure::where('name', "NEUT%")->first();
                            if ($measure === null) {
                                $measure = Measure::where('name', $result['universalTestID']['universalTestIDName'])->first();
                            }
                            break;
                        case "LYM%":
                            $measure = Measure::where('name', "LYMPH%")->first();
                            if ($measure === null) {
                                $measure = Measure::where('name', $result['universalTestID']['universalTestIDName'])->first();
                            }
                            break;
                        case "MON%":
                            $measure = Measure::where('name', "MONO%")->first();
                            if ($measure === null) {
                                $measure = Measure::where('name', $result['universalTestID']['universalTestIDName'])->first();
                            }
                            break;
                        case "EOS%":
                            $measure = Measure::where('name', "EO%")->first();
                            if ($measure === null) {
                                $measure = Measure::where('name', $result['universalTestID']['universalTestIDName'])->first();
                            }
                            break;
                        case "BAS%":
                            $measure = Measure::where('name', "BASO%")->first();
                            if ($measure === null) {
                                $measure = Measure::where('name', $result['universalTestID']['universalTestIDName'])->first();
                            }
                            break;
                        case "PLCR":
                            $measure = Measure::where('name', "P-LCR")->first();
                            if ($measure === null) {
                                $measure = Measure::where('name', $result['universalTestID']['universalTestIDName'])->first();
                            }
                            break;
                        case "IMG#":
                            $measure = Measure::where('name', "IMG#")->first();
                            if ($measure === null) {
                                $measure = Measure::where('name', $result['universalTestID']['universalTestIDName'])->first();
                            }
                            break;
                        case "IMG%":
                            $measure = Measure::where('name', "IMG%")->first();
                            if ($measure === null) {
                                $measure = Measure::where('name', $result['universalTestID']['universalTestIDName'])->first();
                            }
                            break;
                        case "NRBC#":
                            $measure = Measure::where('name', "NRBC#")->first();
                            if ($measure === null) {
                                $measure = Measure::where('name', $result['universalTestID']['universalTestIDName'])->first();
                            }
                            break;
                        case "NRBC%":
                            $measure = Measure::where('name', "NRBC%")->first();
                            if ($measure === null) {
                                $measure = Measure::where('name', $result['universalTestID']['universalTestIDName'])->first();
                            }
                            break;
                        case "RBC":
                            $measure = Measure::where('name', "RBC")->first();
                            if ($measure === null) {
                                $measure = Measure::where('name', $result['universalTestID']['universalTestIDName'])->first();
                            }
                            break;
                        case "HGB":
                            $measure = Measure::where('name', "HGB")->first();
                            if ($measure === null) {
                                $measure = Measure::where('name', $result['universalTestID']['universalTestIDName'])->first();
                            }
                            break;
                        case "HCT":
                            $measure = Measure::where('name', "HCT")->first();
                            if ($measure === null) {
                                $measure = Measure::where('name', $result['universalTestID']['universalTestIDName'])->first();
                            }
                            break;
                        case "MCV":
                            $measure = Measure::where('name', "MCV")->first();
                            if ($measure === null) {
                                $measure = Measure::where('name', $result['universalTestID']['universalTestIDName'])->first();
                            }
                            break;
                        case "MCH":
                            $measure = Measure::where('name', "MCH")->first();
                            if ($measure === null) {
                                $measure = Measure::where('name', $result['universalTestID']['universalTestIDName'])->first();
                            }
                            break;
                        case "MCHC":
                            $measure = Measure::where('name', "MCHC")->first();
                            if ($measure === null) {
                                $measure = Measure::where('name', $result['universalTestID']['universalTestIDName'])->first();
                            }
                            break;
                        case "RDW-CV":
                            $measure = Measure::where('name', "RDW-CV")->first();
                            if ($measure === null) {
                                $measure = Measure::where('name', $result['universalTestID']['universalTestIDName'])->first();
                            }
                            break;
                        case "RDW-SD":
                            $measure = Measure::where('name', "RDW-SD")->first();
                            if ($measure === null) {
                                $measure = Measure::where('name', $result['universalTestID']['universalTestIDName'])->first();
                            }
                            break;
                        case "PLT":
                            $measure = Measure::where('name', "PLT")->first();
                            if ($measure === null) {
                                $measure = Measure::where('name', $result['universalTestID']['universalTestIDName'])->first();
                            }
                            break;
                        case "MPV":
                            $measure = Measure::where('name', "MPV")->first();
                            if ($measure === null) {
                                $measure = Measure::where('name', $result['universalTestID']['universalTestIDName'])->first();
                            }
                            break;
                        case "PDW":
                            $measure = Measure::where('name', "PDW")->first();
                            if ($measure === null) {
                                $measure = Measure::where('name', $result['universalTestID']['universalTestIDName'])->first();
                            }
                            break;
                        case "PCT":
                            $measure = Measure::where('name', "PCT")->first();
                            if ($measure === null) {
                                $measure = Measure::where('name', $result['universalTestID']['universalTestIDName'])->first();
                            }
                            break;
                        case "P-LCC":
                            $measure = Measure::where('name', "P-LCC")->first();
                            if ($measure === null) {
                                $measure = Measure::where('name', $result['universalTestID']['universalTestIDName'])->first();
                            }
                            break;
                        default:
                            $measure = Measure::where('name', $result['universalTestID']['universalTestIDName'])->first();
                            break;
                    }
                    if ($measure !== null) {
                        $testResult = UnhlsTestResult::where('test_id', $test->id)->where('measure_id', $measure->id)->first();

                        if ($testResult === null) {
                            $testResult = new UnhlsTestResult();

                            if (isset($result['dataOrMeasureValue'])) {
                                $testResult->result = $result['dataOrMeasureValue'];
                            }
//                            $testResult->sample_id = $specimenID;
                $testResult->sample_id = $test->specimen_id;

                            $testResult->measure_id = $measure->id;
                            $testResult->test_id = $test->id;

                            // dd($testResult);
                            try {
                                $testResult->save();
                                $test->test_status_id = 4;
                                $test->tested_by = 7;
                                $test->save();
                            } catch (Exception $e) {
                                Log::error($e->getMessage());
                                $response = [
                                    "status" => "500" . $e->getMessage(),
                                    "lastModified" => Carbon::now()->toDateTimeString()
                                ];
                                $this->logRequest($request, "failed", "500", $response, null);
                                return response()->json($response, "500");

                                // dd($e->getMessage());
                            }
                        } else {
//                            dd($testResult);
//                            $response = [
//                                "status" => "409 Duplicate Entry",
//                                "lastModified" => Carbon::now()->toDateTimeString()
//                            ];
//                            
//                            $this->logRequest($request,"failed", "409", $response,$test->id); 
//                         
//                            return response()->json($response, 409);
                        }
                    }
                }
            }

            $response = [
                "status" => "200 OK",
                "lastModified" => Carbon::now()->toDateTimeString()
            ];
            $this->logRequest($request, "successful", "200", $response, $testid);

            return response()->json($response, 200);
        }
    }

    public function logRequest($request, $status, $statuscode, $response, $testid) {

        $hielog = new Hielog;
        $hielog->requesttime = Carbon::now();
        $hielog->client = 'Mindray BC-6200';
        $hielog->httpmethod = 'POST';
        $hielog->requestbody = $request->getContent();
        $hielog->path = '/interfacing/mindray';
        $hielog->status = $status;
        $hielog->statuscode = $statuscode;
        $hielog->responsebody = json_encode($response);
        $hielog->responsetime = Carbon::now();
        $hielog->visitid = $testid;
        try {
            $hielog->save();
        } catch (QueryException $e) {
            Log::error($e);
        }
    }

}
