<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



use App\Models\User;
use App\Models\UnhlsVisit;
use App\Models\UnhlsTest;
use App\Models\UnhlsSpecimen;
use App\Models\TestType;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;
use App\Models\Bbincidence;

class NewDashBoardController extends Controller
{
    /**
     * Display dashboard.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {


        // $dateFrom = date('Y-m-01');
        $dateFrom = date('Y-m-d', strtotime('-1 month'));
        $dateTo = date('Y-m-d');
        $hubId = '';

        $from = $request->date_from;
        $to = $request->date_to;
        $hubid = $request->hubid;
        // count(App\Models\Bbincidence::countbbincidents_all())
        // count(App\Models\Bbincidence::countbbincidents_major())
        // count(App\Models\Bbincidence::countbbincidents_all())


        if (isset($from)) {
            $dateFrom = $from;
        } else {
            $from = $dateFrom;
        }
        if (isset($to)) {
            $dateTo = $to;
        } else {
            $to = $dateTo;
        }
        if ($hubid != null) {
            $hubId = $hubid;
        } else {
            $hubid = $hubId;
        }

        // $from = $request->get('start');
        // $to = $request->get('end');
        // $today = date('Y-m-d');
        // $year = date('Y');
        $testTypeID = $request->get('test_type');

        //	Apply filters if any
        if ($request->has('filter')) {
            if (!$to) $to = $today;
            if (strtotime($from) > strtotime($to) || strtotime($from) > strtotime($today) || strtotime($to) > strtotime($today)) {
                Session::flash('message', trans('messages.check-date-range'));
            }
            $months = json_decode(self::getMonths($from, $to));
            // $data = TestType::getPrevalenceCounts_TB($from, $to, $testTypeID);
            $chart = self::getPrevalenceRatesChart($request, $testTypeID);
        } else {
            // Get all tests for the current year
            $test = UnhlsTest::where('time_created', 'LIKE', date('Y') . '%');
            $periodStart = $test->min('time_created'); //Get the minimum date
            $periodEnd = $test->max('time_created'); //Get the maximum date
            // $data = TestType::getPrevalenceCounts_TB($periodStart, $periodEnd);
            $chart = self::getPrevalenceRatesChart($request);
        }
        // return view('reports.prevalence.index')
        //     ->with('data', $data)
        //     ->with('chart', $chart)
        //     ->withInput($request->all());


        $hubs = array_merge_maintain_keys(array('' => 'Hub'), getAllHubs());
        if ($hubId == '') {
            $patients = UnhlsVisit::whereBetween('unhls_visits.created_at', [$from, $to])->leftjoin('unhls_patients', 'unhls_patients.id', '=', 'unhls_visits.patient_id');
            $tests = UnhlsTest::whereBetween('time_created', [$from, $to]);
            $tests_pending = UnhlsTest::whereBetween('time_created', [$from, $to]);
            $query = "SELECT sp.id, sp.time_collected, sp.specimen_status_id FROM specimens sp 
                    RIGHT JOIN 
                    (SELECT DISTINCT specimen_id, visit_id FROM unhls_tests) ut ON ut.specimen_id = sp.id 
                    LEFT JOIN unhls_visits uvs on uvs.id = ut.visit_id
                    LEFT JOIN unhls_patients up ON up.id = uvs.patient_id WHERE sp.time_collected BETWEEN '" . $from . "' AND '" . $to . "'";
            $samples = DB::select($query);
            $queryRejected = "SELECT sp.id, sp.time_collected, sp.specimen_status_id FROM specimens sp 
            RIGHT JOIN 
            (SELECT DISTINCT specimen_id, visit_id FROM unhls_tests) ut ON ut.specimen_id = sp.id 
            LEFT JOIN unhls_visits uvs on uvs.id = ut.visit_id
            LEFT JOIN unhls_patients up ON up.id = uvs.patient_id WHERE sp.specimen_status_id = '3' AND sp.time_collected BETWEEN '" . $from . "' AND '" . $to . "'";
            $samples_Rejected = DB::select($queryRejected);
            $data = TestType::getPrevalenceCounts_TB($from, $to, $testTypeID);
            // $samples = UnhlsSpecimen::whereBetween('specimens.time_collected', [$from, $to]);
            $stracker_samples = UnhlsTest::where('unhls_tests.sample_tracker_barcode', '!=', '')->distinct('unhls_tests.sample_tracker_barcode')->count();
            $tests_rejected = UnhlsTest::whereBetween('time_created', [$from, $to])->whereIn('unhls_tests.test_status_id', [6])->count();

            $getPrevalenceCounts_TB =  TestType::getPrevalenceCounts_TB($from, $to, $testTypeID = 0, $ageRange = null);
            $tb = $hiv = $malaria = 0.00;

            foreach ($getPrevalenceCounts_TB as $prevalence) {
                if ($prevalence['test'] == 'Malaria RDT') {
                    $malaria = $prevalence['rate'];
                } elseif ($prevalence['test'] == 'TB GeneXpert') {
                    $tb = $prevalence['rate'];
                } elseif ($prevalence['test'] == 'Viral Load' || $prevalence['test'] == 'HIV EID') {
                    $hiv = $prevalence['rate'];
                }
            }

            $countbbincidents_all = count(Bbincidence::countbbincidents_all_dated($from, $to));
            $countbbincidents_minor_dated = count(Bbincidence::countbbincidents_minor_dated($from, $to));
            $countbbincidents_major_dated = count(Bbincidence::countbbincidents_major_dated($from, $to));
        } else {
            $patients = UnhlsVisit::whereBetween('unhls_visits.created_at', [$from, $to])->leftjoin('unhls_patients', 'unhls_patients.id', '=', 'unhls_visits.patient_id')->where('unhls_patients.hubid', $hubId);
            $tests = UnhlsTest::whereBetween('unhls_tests.time_created', [$from, $to])->leftjoin('unhls_visits', 'unhls_tests.visit_id', '=', 'unhls_visits.id')->leftjoin('unhls_patients', 'unhls_patients.id', '=', 'unhls_visits.patient_id')->where('unhls_patients.hubid', $hubId);
            $tests_pending = UnhlsTest::whereBetween('unhls_tests.time_created', [$from, $to])->leftjoin('unhls_visits', 'unhls_tests.visit_id', '=', 'unhls_visits.id')->leftjoin('unhls_patients', 'unhls_patients.id', '=', 'unhls_visits.patient_id')->where('unhls_patients.hubid', $hubId);
            $query = "SELECT sp.id, sp.time_collected, sp.specimen_status_id FROM specimens sp 
                    RIGHT JOIN 
                    (SELECT DISTINCT specimen_id, visit_id FROM unhls_tests) ut ON ut.specimen_id = sp.id 
                    LEFT JOIN unhls_visits uvs on uvs.id = ut.visit_id
                    LEFT JOIN unhls_patients up ON up.id = uvs.patient_id
                    LEFT JOIN unhls_facilities uf ON uf.id = up.hubid WHERE sp.time_collected BETWEEN '" . $from . "' AND '" . $to . "' AND uf.id = " . $hubId;
            $samples = DB::select($query);
            $data = TestType::getPrevalenceCounts_TB_HUB($from, $to, $testTypeID, $ageRange = null, $hubId);
            $queryRejected = "SELECT sp.id, sp.time_collected, sp.specimen_status_id FROM specimens sp 
                    RIGHT JOIN 
                    (SELECT DISTINCT specimen_id, visit_id FROM unhls_tests) ut ON ut.specimen_id = sp.id 
                    LEFT JOIN unhls_visits uvs on uvs.id = ut.visit_id
                    LEFT JOIN unhls_patients up ON up.id = uvs.patient_id
                    LEFT JOIN unhls_facilities uf ON uf.id = up.hubid WHERE sp.specimen_status_id = '3' AND sp.time_collected BETWEEN '" . $from . "' AND '" . $to . "' AND uf.id = " . $hubId;
            $samples_Rejected = DB::select($queryRejected);
            // $samples = UnhlsSpecimen::whereBetween('specimens.time_collected', [$from, $to]);
            $stracker_samples = UnhlsTest::where('unhls_tests.sample_tracker_barcode', '!=', '')->leftjoin('unhls_visits', 'unhls_tests.visit_id', '=', 'unhls_visits.id')->leftjoin('unhls_patients', 'unhls_patients.id', '=', 'unhls_visits.patient_id')->distinct('unhls_tests.sample_tracker_barcode')->where('unhls_patients.hubid', $hubId)->count();
            $tests_rejected = UnhlsTest::whereBetween('unhls_tests.time_created', [$from, $to])->leftjoin('unhls_visits', 'unhls_tests.visit_id', '=', 'unhls_visits.id')->leftjoin('unhls_patients', 'unhls_patients.id', '=', 'unhls_visits.patient_id')->where('unhls_patients.hubid', $hubId)->whereIn('unhls_tests.test_status_id', [6])->count();

            $getPrevalenceCounts_TB =  TestType::getPrevalenceCounts_TB_HUB($from, $to, $testTypeID = 0, $ageRange = null, $hubId);
            $tb = $hiv = $malaria = 0.00;

            foreach ($getPrevalenceCounts_TB as $prevalence) {
                if ($prevalence['test'] == 'Malaria RDT') {
                    $malaria = $prevalence['rate'];
                } elseif ($prevalence['test'] == 'TB GeneXpert') {
                    $tb = $prevalence['rate'];
                } elseif ($prevalence['test'] == 'Viral Load' || $prevalence['test'] == 'HIV EID') {
                    $hiv = $prevalence['rate'];
                }
            }
            $countbbincidents_all = count(Bbincidence::countbbincidents_all_dated_hub($from, $to, $hubId));
            $countbbincidents_minor_dated = count(Bbincidence::countbbincidents_minor_dated_hub($from, $to, $hubId));
            $countbbincidents_major_dated = count(Bbincidence::countbbincidents_major_dated_hub($from, $to, $hubId));
        }

        $patientCounts = $patients->count();
        // if ($patientCounts > 0) {
        //     $outPatients = round($patients->whereVisitType('Out-Patient')->count() * 100 / $patientCounts, 0);
        // } else {
        //     $outPatients = 0.00;
        // }

        $testCounts = $tests->whereIn('unhls_tests.test_status_id', [4, 5, 7])->count();
        $testCounts_pending = $tests_pending->whereIn('unhls_tests.test_status_id', [2])->count();
        $testsReffered = $tests->whereTestStatusId('8')->count();


        $sampleCounts = count($samples);
        // dd($sampleCounts);
        // if ($sampleCounts > 0) {
        //     $samplesAccepted = round($samples->whereSpecimenStatusId('2')->count() * 100 / $sampleCounts, 2);
        // } else {
        //     $samplesAccepted = 0.00;
        // }
        $samplesRejected = count($samples_Rejected);
        //$samples->whereSpecimenStatusId('3')->count();

        $staffCount = User::count();

        $getPrevalenceCounts =  TestType::getPrevalenceCounts($from, $to, $testTypeID = 0, $ageRange = null);


        //        $testAnalytics = array('patientCnts' => $patientCounts , 'opd' => $outPatients, 'testCnts' => $testCounts, 'testsReffered' => $testsReffered,
        //            'sampleCnts' => $sampleCounts, 'samplesAccepted' => $samplesAccepted, 'samplesRejected' => $samplesRejected, 'malaria' => $malaria,
        //            'tb' => $tb, 'hiv' => $hiv);

        return view("newdashboard.index")
            ->with('dateFrom', $dateFrom)
            ->with('dateTo', $dateTo)
            ->with('malaria', $malaria)
            ->with('tb', $tb)
            ->with('hiv', $hiv)
            ->with('patientCount', $patientCounts)
            // ->with('outPatients', $outPatients)
            ->with('testCounts', $testCounts)
            ->with('testCounts_pending', $testCounts_pending)
            ->with('sampleCounts', $sampleCounts)
            // ->with('samplesAccepted', $samplesAccepted)
            ->with('samplesRejected', $samplesRejected)
            ->with('data', $data)
            ->with('chart', $chart)
            ->with('hubs', $hubs)
            ->with('stracker_samples', $stracker_samples)
            ->with('tests_rejected', $tests_rejected)
            ->with('countbbincidents_all', $countbbincidents_all)
            ->with('countbbincidents_minor_dated', $countbbincidents_minor_dated)
            ->with('countbbincidents_major_dated', $countbbincidents_major_dated)
            // ->with('stockout', $stockout)
            // ->with('expiredItems', $expiredItems)
            ->with('staff', $staffCount);
    }

    /**
     * Show the form for creating a new resource.
     * GET /dashboard/create
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Display prevalence rates chart
     *
     * @param Request $request
     * @param int $testTypeID
     * @return Response
     */
    public static function getPrevalenceRatesChart(Request $request, $testTypeID = 0)
    {
        $from = $request->get('start');
        $to = $request->get('end');
        $months = json_decode(self::getMonths($from, $to));
        $testTypes = new Collection();

        if ($testTypeID == 0) {
            $testTypes = TestType::supportPrevalenceCounts();
            // dd($testTypes);
        } else {
            $testTypes->add(TestType::find($testTypeID));
        }

        $options = '{
			"chart": {
				"type": "column"
			},
			"title": {
				"text":"' . trans('messages.positivity-rates') . '"
			},
			"subtitle": {
				"text":';
        if ($from == $to)
            $options .= '"' . trans('messages.for-the-year') . ' ' . date('Y') . '"';
        else
            $options .= '"' . trans('messages.from') . ' ' . $from . ' ' . trans('messages.to') . ' ' . $to . '"';
        $options .= '},
			"credits": {
				"enabled": false
			},
			"navigation": {
				"buttonOptions": {
					"align": "right"
				}
			},
			"series": [';
        $counts = count($testTypes);

        foreach ($testTypes as $testType) {
            $options .= '{
							"name": "' . $testType->name . '","data": [';
            $counter = count($months);
            foreach ($months as $month) {
                $data = $testType->getPrevalenceCount($month->annum, $month->months);
                if ($data->isEmpty()) {
                    $options .= '0.00';
                    if ($counter == 1)
                        $options .= '';
                    else
                        $options .= ',';
                } else {
                    foreach ($data as $datum) {
                        $options .= $datum->rate;

                        if ($counter == 1)
                            $options .= '';
                        else
                            $options .= ',';
                    }
                }
                $counter--;
            }
            $options .= ']';
            if ($counts == 1)
                $options .= '}';
            else
                $options .= '},';
            $counts--;
        }
        $options .= '],
			"xAxis": {
				"categories": [';
        $count = count($months);
        foreach ($months as $month) {
            $options .= '"' . $month->label . " " . $month->annum;
            if ($count == 1)
                $options .= '" ';
            else
                $options .= '" ,';
            $count--;
        }
        $options .= ']
			},
			"yAxis": {
				"title": {
					"text": "' . trans('messages.prevalence-rates-label') . '"
				},
				"min": "0",
				"max": "100"
			},
			"exporting": {
				"buttons":{
					"contextButtons": {
						"symbol": "url(../../../i/button_download.png)",
						"symbolStrokeWidth": "1",
						"symbolFill": "#a4edba",
						"symbolStroke": "#330033"


					}
				}

			}
		}';
        return $options;
    }

    /**
     * Get months: return months for time_created column when filter dates are set
     */
    public static function getMonths($from, $to)
    {
        $today = "'" . date("Y-m-d") . "'";
        $year = date('Y');
        $tests = UnhlsTest::select('time_created')->distinct();

        if (strtotime($from) === strtotime($today)) {
            $tests = $tests->where('time_created', 'LIKE', $year . '%');
        } else {
            $toPlusOne = date_add(new DateTime($to), date_interval_create_from_date_string('1 day'));
            $tests = $tests->whereBetween('time_created', array($from, $toPlusOne));
        }

        $allDates = $tests->pluck('time_created')->toArray();
        asort($allDates);
        $yearMonth = function ($value) {
            return strtotime(substr($value, 0, 7));
        };
        $allDates = array_map($yearMonth, $allDates);
        $allMonths = array_unique($allDates);
        $dates = array();

        foreach ($allMonths as $date) {
            $dateInfo = getdate($date);
            $dates[] = array(
                'months' => $dateInfo['mon'], 'label' => substr($dateInfo['month'], 0, 3),
                'annum' => $dateInfo['year']
            );
        }

        return json_encode($dates);
    }

    /**
     * Store a newly created resource in storage.
     * POST /dashboard
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     * GET /dashboard/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * GET /dashboard/{id}/edit
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * PUT /dashboard/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /dashboard/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
