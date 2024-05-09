<?php

namespace App\Http\Controllers;

use App\Models\Commodity;
use App\Models\Issue;
use App\Models\Receipt;
use App\Models\TestCategory;
use App\Models\TopupRequest;
use App\Models\User;
use App\Models\UnhlsPatient;
use App\Models\UnhlsVisit;
use App\Models\UnhlsTestResult;
use App\Models\UnhlsTest;
use App\Models\TestType;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class InterfacerController extends Controller
{

    public function receiveLabRequest()
    {
        //authenticate() connection

        $labRequest = Request::getContent();
        $labRequest = str_replace(['labRequest', '='], ['', ''], $labRequest);

        //Validate::ifValid()
        Log::innfo($labRequest);
        dd($labRequest);

        //Fire event with the received data
        Event::fire('api.receivedLabRequest', json_decode($labRequest));
    }


    /**
     * Authenticate API calls using Secret keys set on the UI
     * @param authkey Key to check if valid
     * @return boolean True if key is valid
     */
    public function authenticate($authKey)
    {
        if ($authKey == '123456') //default key for the time being 123456
        {
            return true;
        }
        return false;
    }

    public function connect()
    {
    }
    public function disconnect()
    {
    }
    public function searchPatients()
    {
    }
    public function searchResults()
    {
    }

    /**
     * Save results of a particular test
     * @param key For authentication
     * @param testId Id of test
     * @param measureid measure of result to be saved
     * @param result result to be saved
     * @return json with success or failure
     **/
    public function saveTestResults()
    {
        //Auth
        $authKey = Input::get('key');
        if (!$this->authenticate($authKey)) {
            return json_encode(array('error' => 'Authentication failed'));
        }
        //save results
        // $result = Input::get('result');
        $results = Input::get('results');
        $resultsArray = explode(", ", $results);
        foreach ($resultsArray as $key => $result) {
            $ms = explode(":", $result);
            $rs = explode("=", $ms[1]);
            $testId  = str_replace("{", "", $ms[0]);
            $measureId = $rs[0];
            $res = str_replace("}", "", $rs[1]);

            try {
                $test = UnhlsTest::find($testId);
                if ($test->test_status_id == UnhlsTest::PENDING || $test->test_status_id == UnhlsTest::STARTED) {
                    $testResult = TestResult::firstOrCreate(array('test_id' => $testId, 'measure_id' => $measureId));
                    //Validate results
                    $testResult->result = $res;
                    //TODO: Try catch to handle failure
                    $testResult->save();
                    $test = UnhlsTest::find($testId);
                    $test->test_status_id = UnhlsTest::COMPLETED;
                    $test->tested_by = 1;
                    if ($test->test_status_id == UnhlsTest::PENDING) {
                        $test->time_started = date('Y-m-d H:i:s');
                    }
                    $test->time_completed = date('Y-m-d H:i:s');
                    $test->save();
                } else {
                    return Response::json(array('Ignored'));
                }
            } catch (\QueryException $qe) {
                return Response::json(array('Failed'));
            }
        }
        return Response::json(array('Success'));
    }

    public function fetchRequests(Request $request)
    {
        //todo: add proper authentication of some kind, perhaps in the routes
        $username = $request->query('username');
        $password = $request->query('password');

        $testTypeId = $request->query('test_type_id');

        // $datefrom = date('Y-m-d');
        $datefrom = date('2017-07-14');
        $dateto = date('Y-m-d');
        // get all pending/started CBC requests today
        // provides specimen id which is used as patient id on the other side
        $tests = UnhlsTest::with('visit', 'visit.patient')
            ->where('test_type_id', $testTypeId)
            ->where('time_created', 'like', '%' . $datefrom . '%')
            ->whereIn('test_status_id', [UnhlsTest::PENDING, UnhlsTest::STARTED]);
        return $tests->get()->toJson();
    }

    // sysmex xn-550 using this
    public function updateTestResultsFromInstrument(Request $request)
    {
        $test_id = $request->query('test_id');
        $WP_Message = [];
        $RBCIP_Message = [];
        $PLTIP_Message = [];

        $testresults = DB::table('unhls_test_results as unhtst')
            ->where('unhtst.test_id', '=', $test_id)
            ->leftJoin('measures AS ms', function ($join) {
                $join->on('ms.id', '=', 'unhtst.measure_id');
            })->select('unhtst.test_id', 'unhtst.measure_id', 'ms.name', 'unhtst.result')->get();
        foreach ($testresults as $testresult) {
            // WBC Abnormal Flags
            if ($testresult->name == "NEUT#" && $testresult->result < 1.00) {
                array_push($WP_Message, "Neutropenia");
            } elseif ($testresult->name == "NEUT#" && $testresult->result > 11.00) {
                array_push($WP_Message, "Neutrophilia");
            } elseif ($testresult->name == "LYMPH#" && $testresult->result < 0.80) {
                array_push($WP_Message, "Lymphopenia");
            } elseif ($testresult->name == "LYMPH#" && $testresult->result > 4.00) {
                array_push($WP_Message, "Lymphopenia");
            } elseif ($testresult->name == "MONO#" && $testresult->result > 1.00) {
                array_push($WP_Message, "Monocytosis");
            } elseif ($testresult->name == "EO#" && $testresult->result > 0.70) {
                array_push($WP_Message, "Eosinophila");
            } elseif ($testresult->name == "BASO#" && $testresult->result > 0.20) {
                array_push($WP_Message, "Basophila");
            } elseif ($testresult->name == "WBC" && $testresult->result < 2.50) {
                array_push($WP_Message, "Leukocytopenia");
            } elseif ($testresult->name == "WBC" && $testresult->result < 18.0) {
                array_push($WP_Message, "Leukocytosis");
            }
            // RBC Abnormal Flags
            elseif ($testresult->name == "RDW-SD" && $testresult->result > 65.0) {
                array_push($RBCIP_Message, "Anisocytosis");
            } elseif ($testresult->name == "MCV" && $testresult->result < 70.0) {
                array_push($RBCIP_Message, "Microcytosis");
            } elseif ($testresult->name == "MCV" && $testresult->result > 110.0) {
                array_push($RBCIP_Message, "Macrocytosis");
            } elseif ($testresult->name == "MCHC" && $testresult->result < 29.0) {
                array_push($RBCIP_Message, "Macrocytosis");
            } elseif ($testresult->name == "HGB" && $testresult->result < 10.0) {
                array_push($RBCIP_Message, "Anemia");
            } elseif ($testresult->name == "RBC" && $testresult->result > 6.50) {
                array_push($RBCIP_Message, "Erythrocytosis");
            }

            // PLT Abnormal Flags
            elseif ($testresult->name == "PLT" && $testresult->result < 60) {
                array_push($PLTIP_Message, "Thrombocytopenia");
            } elseif ($testresult->name == "PLT" && $testresult->result > 600) {
                array_push($PLTIP_Message, "Thrombocytosis");
            }
        }
        $newarray = [];
        array_push($newarray, $WP_Message);
        array_push($newarray, $RBCIP_Message);
        array_push($newarray, $PLTIP_Message);
        dd($newarray);
        return Response::json("If you cannot speak Acholi, you won't gerrit", 406);
    }

    // sysmex xn-550 using this
    public function saveTestResultsFromInstrument(Request $request)
    {
        Log::info($request);
        //todo: add proper authentication of some kind, perhaps in the routes
        $username = $request->query('username');
        $password = $request->query('password');

        $ulin = $request->query('patient_id');
        $testTypeId = $request->query('test_type_id');
        $measureId = $request->query('measure_id');
        $result = $request->query('result');
        $instrument = $request->query('instrument');

        $facility_code = config('constants.FACILITY_CODE') . '-';
        $trimmed_patientID = str_replace($facility_code, "", $ulin);
        \Log::info($request);
//dd("asdasdasd");
        // http://192.168.0.120:5152/api/saveresults?username=administrator&password=password&patient_id=23016460&test_type_id=16&measure_id=60&instrument=sysmexXS-1000i&result=3.1

        $patient = UnhlsPatient::where('ulin', 'like', '%' . $trimmed_patientID . '%')->orderBy('id', 'DESC')->first();
        // dd($testTypeId);
        //Log::info($patient);

        if (!is_null($patient)) {
            $patientId = $patient->id;
            $test = UnhlsTest::with('visit', 'visit.patient')
                ->where('test_type_id', $testTypeId)
                ->where(function ($q) use ($patientId) {
                    $q->whereHas('visit', function ($q) use ($patientId) {
                        $q->whereHas('patient', function ($q)  use ($patientId) {
                            $q->where(function ($q) use ($patientId) {
                                $q->where('id', $patientId);
                            });
                        });
                    });
                })->orderBy('id', 'DESC')->first();
            // test should exist and person doing it shuld have clicked start
            if (!is_null($test) && ($test->test_status_id == UnhlsTest::STARTED || $test->test_status_id == UnhlsTest::COMPLETED)) {
                $testResult = UnhlsTestResult::firstOrNew(['test_id' => $test->id, 'measure_id' => $measureId]);
                $testResult->result = $result;
                $testResult->save();
                // for only started so that the person doing the job is captured
                if ($test->test_status_id == UnhlsTest::STARTED || $test->test_status_id == UnhlsTest::VERIFIED || $test->test_status_id == UnhlsTest::COMPLETED) {
                    $test = UnhlsTest::find($test->id);
                    $test->test_status_id = UnhlsTest::COMPLETED;
                    $test->instrument = $instrument;
                    if ($test->test_status_id == UnhlsTest::PENDING) {
                        $test->time_started = date('Y-m-d H:i:s');
                    }
                    $test->time_completed = date('Y-m-d H:i:s');
                    $test->save();
		return Response::json('Succesfully Saved Result', 200);
                }
                 else {
                }
            } else {
                // you should have made sure a test exists on BLIS, not ma problem
                Log::info('Not saved, test not registered in BLIS');
                return Response::json('you should have made sure a test exists on BLIS, not ma problem', 406);
            }
        } else {
            // you should have made sure this patient is on BLIS, not ma problem
            Log::info('Not saved, patient not registered in BLIS');
            return Response::json('you should have made sure this patient is on BLIS, not ma problem', 406);
        }

        return Response::json("If you cannot speak Acholi, you won't gerrit", 406);
    }

    /**
     * Get test, specimen, measure info related to a test
     * @param key For authentication
     * @param Filters to get specific info
     * @return json of the test info
     */
    public function getTests()
    {
        //Auth
        $authKey = Input::get('key');
        if (!$this->authenticate($authKey)) {
            return Response::json(array('error' => 'Authentication failed'), '403');
        }
        //Validate params
        $testType = Input::get('testtype');
        $dateFrom = Input::get('datefrom');
        $dateTo = Input::get('dateto');

        if (empty($testType)) {
            return Response::json(array('error' => 'No test provided'), '404');
        }
        //Search by name / Date
        $testType = TestType::where('name', $testType)->first();

        if (!empty($testType)) {
            $tests = UnhlsTest::with('visit.patient', 'testType.measures')
                ->where(function ($query) {
                    $query->where('test_status_id', UnhlsTest::PENDING)
                        ->orWhere('test_status_id', UnhlsTest::STARTED);
                })
                ->where('test_type_id', $testType->id)
                ->where('time_created', '>', $dateFrom)
                ->where('time_created', '<', $dateTo)
                ->get();
        }
        //Search by ID
        //$tests = Specimen::where('visit_id', $testFilter);
        return Response::json($tests, '200');
    }

    // astm baised // sysmex 1000i wont use this for now
    public function getTestRequestsForInstrument()
    {
        //Auth

        /*$authKey = Input::get('key');
        if(!$this->authenticate($authKey)){
            return Response::json(array('error' => 'Authentication failed'), '403');
        }*/

        //Validate params
        $username = Request::query('username');
        $password = Request::query('password');

        $testTypeId = Request::query('test_type_id');
        $dateFrom = Request::query('date_from');
        $dateTo = Request::query('date_to');





        // put default option edit this incase the sent is empty
        // pick the last pending or started
        $dateFrom = date('2017-07-14');
        $dateTo = date('Y-m-d');


        $genderSymbol = [0 => 'M', 1 => 'F', 2 => 'U'];
        $visitTypeSymbol = ['Out-patient' => 'opd', 'In-patient' => 'ipd'];
        $testArray = [];

        if (empty($testTypeId)) {
            return Response::json(array('error' => 'No Test Type provided'), '404');
        }
        //Search by name / Date
        $testType = TestType::find($testTypeId);

        if (!empty($testType)) {
            $tests = UnhlsTest::with(
                'visit.patient',
                'testType',
                'specimen',
                'specimen.specimenType'
            )->where(function ($query) {
                $query->where('test_status_id', UnhlsTest::PENDING)
                    ->orWhere('test_status_id', UnhlsTest::STARTED);
            })->where('test_type_id', $testType->id)
                ->where('time_created', '>', $dateFrom)
                ->where('time_created', '<', $dateTo)
                ->get();

            $i = 0;
            foreach ($tests as $test) {
                $testArray[$i]['specimen_id'] = $test->specimen_id;
                $testArray[$i]['specimen_type_name'] = $test->specimen->specimenType->name;
                $testArray[$i]['specimen_type_id'] = $test->specimen->specimen_type_id;
                $testArray[$i]['time_collected'] = preg_replace(['/-/', '/ /', '/:/'], ['', '', ''], $test->specimen->time_collected);
                $testArray[$i]['time_accepted'] = preg_replace(['/-/', '/ /', '/:/'], ['', '', ''], $test->specimen->time_accepted);
                $testArray[$i]['patient_id'] = $test->visit->patient_id;
                $testArray[$i]['patient_name'] = $test->visit->patient->name;
                // prepare astm dob from here... just proposing, perhaps when the machine is identified with the request
                $testArray[$i]['dob'] = $test->visit->patient->dob;
                // todo: make gender m or f
                $testArray[$i]['gender'] = $genderSymbol[$test->visit->patient->gender];
                $testArray[$i]['test_type_id'] = $test->test_type_id;
                $testArray[$i]['test_type_name'] = $test->testType->name;
                $testArray[$i]['doctor'] = $test->requested_by;
                // todo: make admission_status ipd or opd
                $testArray[$i]['admission_status'] = $visitTypeSymbol[$test->visit->visit_type];
                $i++;
            }
        }
        Log::info(json_encode($testArray));
        // return Response::json($testArray, '200');
        return Response::json($testArray, 200);
    }

    /*
    * Get measure info related to a test
    * @param key For authentication
    * @param testId testID to get the measure info for
    * @return json of the test info
    */
    public function getTestInfo()
    {
        $key = Input::get('key');
        $testId = Input::get('testId');
        //Auth
        $authKey = $key;
        if (!$this->authenticate($authKey)) {
            return json_encode(array('error' => 'Authentication failed'));
        }
        //return test info
        $test = UnhlsTest::with('testType', 'testType.measures', 'specimen.specimenType')->where('visit_id', $testId);
        return Response::json($test);
    }
}
