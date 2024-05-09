<?php

namespace App\Http\Controllers;

use App\Models\AnalyticSpecimenRejection;
use App\Models\AnalyticSpecimenRejectionReason;
use App\Models\Barcode;
use App\Models\Clinician;
use App\Models\Facility;
use App\Models\Instrument;
use App\Models\Measure;
use App\Models\Referral;
use App\Models\ReferralReason;
use App\Models\RejectionReason;
use App\Models\RejectionReportPdf;
use App\Models\SpecimenType;
use App\Models\TestCategory;
use App\Models\TestStatus;
use App\Models\Therapy;
use App\Models\UnhlsPatient;
use App\Models\UnhlsSpecimen;
use App\Models\UnhlsTest;
use App\Models\UnhlsTestResult;
use App\Models\UnhlsVisit;
use App\Models\Ward;
use App\Models\TBPatient;
use App\Models\BloodBank;
use App\Models\BloodTransfusion;
use App\Models\HPVPatient;
use App\Http\Controllers\PocController;
use App\Http\Controllers\VlController;
use App\Models\UuidGenerator;
use DateTime;
use PDF;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use LaravelQRCode\Facades\QRCode;
use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use Redirect;

/**
 * Contains test resources
 *
 */
class UnhlsTestController extends Controller
{

    /**
     * Display a listing of Tests. Factors in filter parameters
     * The search string may match: patient_number, patient name, test type name, specimen ID or visit ID
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        $fromRedirect = Session::pull('fromRedirect');
        if ($fromRedirect) {
            $input = Session::get('TESTS_FILTER_INPUT');
        } else {

            $input = $request->except('_token');
        }

        $searchString = isset($input['search']) ? $input['search'] : '';
        $testStatusId = isset($input['test_status']) ? $input['test_status'] : '';
        $testCategoryId = isset($input['test_category']) ? $input['test_category'] : '';
        // $facililtyid = Auth::user()->facility->id;
        // dd($facililtyid);

        if (isset($request->date_from)) {
            $dateFrom = $request->date_from;
        } else {
            $dateFrom = date('Y-m-d');
            $request->date_from = date('Y-m-d');
        }
        $dateTo = $request->date_to;
        // Search Conditions
        if ($searchString != '') {
            $tests = UnhlsTest::with('visit', 'visit.patient', 'testType', 'testType.testCategory', 'specimen', 'testStatus', 'testStatus.testPhase')
                ->where(function ($q) use ($searchString) {
                    $q->whereHas('visit.patient', function ($q) use ($searchString) {
                        $q->where('external_patient_number', '=', $searchString)
                            ->orWhere('patient_number', '=', $searchString)
                            ->orWhere('name', 'like', '%' . $searchString . '%')
                            ->orWhere('ulin', 'like', '%' . $searchString . '%');
                    })
                        ->orWhereHas('testType', function ($q) use ($searchString) {
                            $q->where('name', 'like', '%' . $searchString . '%'); //Search by test type
                        })
                        ->orWhereHas('specimen', function ($q) use ($searchString) {
                            $q->where('id', '=', $searchString); //Search by specimen number
                        })->orWhereHas('visit',  function ($q) use ($searchString) {
                            $q->where(function ($q) use ($searchString) {
                                $q->where('visit_number', '=', $searchString) //Search by visit number
                                    ->orWhere('id', '=', $searchString);
                            });
                        });
                })->leftjoin('unhls_visits', 'unhls_visits.id', '=', 'unhls_tests.visit_id')->leftjoin('unhls_patients', 'unhls_patients.id', '=', 'unhls_visits.patient_id')->where('unhls_patients.hubid', Auth::user()->facility->id)->orderBy('unhls_tests.time_created', 'DESC')->paginate(25)->appends($input);

            if (sizeof($tests) == 0) {
                Session::flash('message', trans('messages.empty-search'));
            }
        } elseif ($testStatusId > 0) {
            $tests = UnhlsTest::where(function ($q) use ($testStatusId) {
                $q->whereHas('testStatus', function ($q) use ($testStatusId) {
                    $q->where('id', '=', $testStatusId); //Filter by test status
                });
            })->leftjoin('unhls_visits', 'unhls_visits.id', '=', 'unhls_tests.visit_id')->leftjoin('unhls_patients', 'unhls_patients.id', '=', 'unhls_visits.patient_id')->where('unhls_patients.hubid', Auth::user()->facility->id)->orderBy('unhls_tests.time_created', 'DESC')->paginate(25)->appends($input);
        } elseif ($testCategoryId > 0) {
            // $condition = $condition." AND tt.test_category_id = ".$testCategoryId;
            $tests = UnhlsTest::where(function ($q) use ($testCategoryId) {
                $q->whereHas('testType.testCategory', function ($q) use ($testCategoryId) {
                    $q->where('id', '=', $testCategoryId); //Filter by test status
                });
            })->leftjoin('unhls_visits', 'unhls_visits.id', '=', 'unhls_tests.visit_id')->leftjoin('unhls_patients', 'unhls_patients.id', '=', 'unhls_visits.patient_id')->where('unhls_patients.hubid', Auth::user()->facility->id)->orderBy('unhls_tests.time_created', 'DESC')->paginate(25)->appends($input);
        } elseif ($dateFrom || $dateTo) {
            $tests = UnhlsTest::where(function ($q) use ($dateFrom, $dateTo) {
                if ($dateFrom) {
                    $q->where('time_created', '>=', $dateFrom);
                }
                if ($dateTo) {
                    $dateTo = $dateTo . ' 23:59:59';
                    $q->where('time_created', '<=', $dateTo);
                }
            })->leftjoin('unhls_visits', 'unhls_visits.id', '=', 'unhls_tests.visit_id')->leftjoin('unhls_patients', 'unhls_patients.id', '=', 'unhls_visits.patient_id')->where('unhls_patients.hubid', Auth::user()->facility->id)->orderBy('time_created', 'DESC')->paginate(25)->appends($input);

            if (sizeof($tests) == 0) {
                Session::flash('message', trans('messages.empty-search'));
            }
        } else {
            $tests = UnhlsTest::where('time_created', '>=', $dateFrom)->leftjoin('unhls_visits', 'unhls_visits.id', '=', 'unhls_tests.visit_id')->leftjoin('unhls_patients', 'unhls_patients.id', '=', 'unhls_visits.patient_id')->where('unhls_patients.hubid', Auth::user()->facility->id)->orderBy('time_created', 'DESC')->paginate(25)->appends($input);
        }

        // Create Test Statuses array. Include a first entry for ALL
        $statuses = array('all') + TestStatus::all()->pluck('name', 'id')->toArray();

        foreach ($statuses as $key => $value) {
            $statuses[$key] = trans("messages.$value");
        }

        $test_categories = array('All') + TestCategory::all()->pluck('name', 'id')->toArray();
        foreach ($test_categories as $key => $value) {
            $test_categories[$key] = $value;
        }

        // Pagination
        // $tests = $tests->paginate(config('kblis.page-items'))->appends($input);

        // dd($testcount);
        $hpvresult = UnhlsTest::machinesaveHpvresults();

        //  Barcode
        $barcode = Barcode::first();

        // QRcode
        // $qrcode = QRCode::size(500)
        //           ->format('png');
        //           ->generate('ItSolutionStuff.com');

        // Load the view and pass it the tests
        return view('unhls_test.index')
            ->with('testSet', $tests)
            ->with('testStatus', $statuses)
            ->with('barcode', $barcode)
            ->with('testCategories', $test_categories)
            ->with('selectedTestCategoryId', $testCategoryId)
            ->with('dateFrom', $dateFrom)
            ->with('dateTo', $dateTo)
            ->with('hpvresult', $hpvresult)
            ->withInput($input);
    }

    //  public function qr_code()
    // {
    //    $qrCode = QRCode::text('Laravel QR Code Generator!')->png();
    // }
    /**
     * Listing of Completed tests
     *@param
     * @return Response
     */
    public function completed(Request $request)
    {
        $fromRedirect = Session::pull('fromRedirect');

        if ($fromRedirect) {

            $input = Session::get('TESTS_FILTER_INPUT');
        } else {

            $input = $request->except('_token');
        }

        $searchString = isset($input['search']) ? $input['search'] : '';
        $testCategoryId = isset($input['test_category']) ? $input['test_category'] : '';
        $testStatusId = '4';
        if (isset($input['date_from'])) {
            $dateFrom = $input['date_from'];
        } else {
            $dateFrom = date('Y-m-d');
            $input['date_from'] = date('Y-m-d');
        }
        $dateTo = isset($input['date_to']) ? $input['date_to'] : '';
        $tests = UnhlsTest::searchStatus($testStatusId)->leftjoin('unhls_visits', 'unhls_visits.id', '=', 'unhls_tests.visit_id')->leftjoin('unhls_patients', 'unhls_patients.id', '=', 'unhls_visits.patient_id')->where('unhls_patients.hubid', Auth::user()->facility->id)
            ->select('unhls_tests.id', 'unhls_tests.visit_id', 'unhls_tests.urgency_id', 'unhls_tests.test_type_id', 'unhls_tests.specimen_id', 'unhls_tests.interpretation', 'unhls_tests.test_status_id', 'unhls_tests.created_by', 'unhls_tests.tested_by', 'unhls_tests.verified_by', 'unhls_tests.requested_by', 'unhls_tests.clinician_id', 'unhls_tests.purpose', 'unhls_tests.time_created', 'unhls_tests.time_started', 'unhls_tests.time_completed', 'unhls_tests.time_verified', 'unhls_tests.time_sent', 'unhls_tests.external_id', 'unhls_tests.instrument', 'unhls_tests.instrument_id', 'unhls_tests.approved_by', 'unhls_tests.time_approved', 'unhls_tests.revised_by', 'unhls_tests.time_revised', 'unhls_tests.method_used', 'unhls_tests.sample_tracker_barcode');

        // Create Test Statuses array. Include a first entry for ALL
        $statuses = array('all') + TestStatus::all()->pluck('name', 'id')->toArray();

        foreach ($statuses as $key => $value) {
            $statuses[$key] = trans("messages.$value");
        }

        $test_categories = array('All') + TestCategory::all()->pluck('name', 'id')->toArray();
        foreach ($test_categories as $key => $value) {
            $test_categories[$key] = $value;
        }


        // Pagination
        $tests = $tests->paginate(config('kblis.page-items'))->appends($input);

        $hpvresult = UnhlsTest::machinesaveHpvresults();


        //  Barcode
        $barcode = Barcode::first();

        return view('unhls_test.index')
            ->with('testSet', $tests)
            ->with('testStatus', $statuses)
            ->with('dateFrom', $dateFrom)
            ->with('dateTo', $dateTo)
            ->with('testCategories', $test_categories)
            ->with('selectedTestCategoryId', $testCategoryId)
            ->with('barcode', $barcode)
            ->with('hpvresult', $hpvresult)
            ->withInput($input);
    }


    /**
     * Listing of pending tests
     *@param
     * @return Response
     */
    public function pending(Request $request)
    {
        $fromRedirect = Session::pull('fromRedirect');

        if ($fromRedirect) {

            $input = Session::get('TESTS_FILTER_INPUT');
        } else {

            $input = $request->except('_token');
        }

        $searchString = isset($input['search']) ? $input['search'] : '';
        $testCategoryId = isset($input['test_category']) ? $input['test_category'] : '';
        $testStatusId = '2';
        if (isset($input['date_from'])) {
            $dateFrom = $input['date_from'];
        } else {
            $dateFrom = date('Y-m-d');
            $input['date_from'] = date('Y-m-d');
        }
        $dateTo = isset($input['date_to']) ? $input['date_to'] : '';

        // Search Conditions
        // $tests = UnhlsTest::searchStatus($testStatusId);
        // $tests = UnhlsTest::searchStatus($testStatusId)->get();
        $tests = UnhlsTest::searchStatus($testStatusId)
            ->leftjoin('unhls_visits', 'unhls_visits.id', '=', 'unhls_tests.visit_id')->leftjoin('unhls_patients', 'unhls_patients.id', '=', 'unhls_visits.patient_id')->where('unhls_patients.hubid', Auth::user()->facility->id)
            ->select('unhls_tests.id', 'unhls_tests.visit_id', 'unhls_tests.urgency_id', 'unhls_tests.test_type_id', 'unhls_tests.specimen_id', 'unhls_tests.interpretation', 'unhls_tests.test_status_id', 'unhls_tests.created_by', 'unhls_tests.tested_by', 'unhls_tests.verified_by', 'unhls_tests.requested_by', 'unhls_tests.clinician_id', 'unhls_tests.purpose', 'unhls_tests.time_created', 'unhls_tests.time_started', 'unhls_tests.time_completed', 'unhls_tests.time_verified', 'unhls_tests.time_sent', 'unhls_tests.external_id', 'unhls_tests.instrument', 'unhls_tests.instrument_id', 'unhls_tests.approved_by', 'unhls_tests.time_approved', 'unhls_tests.revised_by', 'unhls_tests.time_revised', 'unhls_tests.method_used', 'unhls_tests.sample_tracker_barcode');
        // dd($tests);
        // Create Test Statuses array. Include a first entry for ALL
        $statuses = array('all') + TestStatus::all()->pluck('name', 'id')->toArray();

        foreach ($statuses as $key => $value) {
            $statuses[$key] = trans("messages.$value");
        }

        $test_categories = array('All') + TestCategory::all()->pluck('name', 'id')->toArray();
        foreach ($test_categories as $key => $value) {
            $test_categories[$key] = $value;
        }

        // Pagination
        $tests = $tests->paginate(config('kblis.page-items'))->appends($input);

        $hpvresult = UnhlsTest::machinesaveHpvresults();


        //  Barcode
        $barcode = Barcode::first();

        return view('unhls_test.index')
            ->with('testSet', $tests)
            ->with('testStatus', $statuses)
            ->with('dateFrom', $dateFrom)
            ->with('dateTo', $dateTo)
            ->with('testCategories', $test_categories)
            ->with('selectedTestCategoryId', $testCategoryId)
            ->with('barcode', $barcode)
            ->with('hpvresult', $hpvresult)
            ->withInput($input);
    }


    /**
     * Listing of started tests
     *@param
     * @return Response
     */
    public function started(Request $request)
    {
        $fromRedirect = Session::pull('fromRedirect');

        if ($fromRedirect) {

            $input = Session::get('TESTS_FILTER_INPUT');
        } else {

            $input = $request->except('_token');
        }

        $searchString = isset($input['search']) ? $input['search'] : '';
        $testCategoryId = isset($input['test_category']) ? $input['test_category'] : '';
        $testStatusId = '3';
        if (isset($input['date_from'])) {
            $dateFrom = $input['date_from'];
        } else {
            $dateFrom = date('Y-m-d');
            $input['date_from'] = date('Y-m-d');
        }
        $dateTo = isset($input['date_to']) ? $input['date_to'] : '';

        // Search Conditions

        // $tests = UnhlsTest::searchStatus($testStatusId);
        $tests = UnhlsTest::searchStatus($testStatusId)->leftjoin('unhls_visits', 'unhls_visits.id', '=', 'unhls_tests.visit_id')->leftjoin('unhls_patients', 'unhls_patients.id', '=', 'unhls_visits.patient_id')->where('unhls_patients.hubid', Auth::user()->facility->id)
            ->select('unhls_tests.id', 'unhls_tests.visit_id', 'unhls_tests.urgency_id', 'unhls_tests.test_type_id', 'unhls_tests.specimen_id', 'unhls_tests.interpretation', 'unhls_tests.test_status_id', 'unhls_tests.created_by', 'unhls_tests.tested_by', 'unhls_tests.verified_by', 'unhls_tests.requested_by', 'unhls_tests.clinician_id', 'unhls_tests.purpose', 'unhls_tests.time_created', 'unhls_tests.time_started', 'unhls_tests.time_completed', 'unhls_tests.time_verified', 'unhls_tests.time_sent', 'unhls_tests.external_id', 'unhls_tests.instrument', 'unhls_tests.instrument_id', 'unhls_tests.approved_by', 'unhls_tests.time_approved', 'unhls_tests.revised_by', 'unhls_tests.time_revised', 'unhls_tests.method_used', 'unhls_tests.sample_tracker_barcode');

        // Create Test Statuses array. Include a first entry for ALL
        $statuses = array('all') + TestStatus::all()->pluck('name', 'id')->toArray();

        foreach ($statuses as $key => $value) {
            $statuses[$key] = trans("messages.$value");
        }

        $test_categories = array('All') + TestCategory::all()->pluck('name', 'id')->toArray();
        foreach ($test_categories as $key => $value) {
            $test_categories[$key] = $value;
        }

        // Pagination
        $tests = $tests->paginate(config('kblis.page-items'))->appends($input);

        $hpvresult = UnhlsTest::machinesaveHpvresults();


        //  Barcode
        $barcode = Barcode::first();

        return view('unhls_test.index')
            ->with('testSet', $tests)
            ->with('testStatus', $statuses)
            ->with('dateFrom', $dateFrom)
            ->with('dateTo', $dateTo)
            ->with('testCategories', $test_categories)
            ->with('selectedTestCategoryId', $testCategoryId)
            ->with('barcode', $barcode)
            ->with('hpvresult', $hpvresult)
            ->withInput($input);
    }


    /**
     * Listing of samples not yet recieved
     *@param
     * @return Response
     */
    public function notRecieved(Request $request)
    {
        $fromRedirect = Session::pull('fromRedirect');

        if ($fromRedirect) {

            $input = Session::get('TESTS_FILTER_INPUT');
        } else {

            $input = $request->except('_token');
        }

        $searchString = isset($input['search']) ? $input['search'] : '';
        $testCategoryId = isset($input['test_category']) ? $input['test_category'] : '';
        $testStatusId = '1';
        if (isset($input['date_from'])) {
            $dateFrom = $input['date_from'];
        } else {
            $dateFrom = date('Y-m-d');
            $input['date_from'] = date('Y-m-d');
        }
        $dateTo = isset($input['date_to']) ? $input['date_to'] : '';

        // Search Conditions

        // $tests = UnhlsTest::searchStatus($testStatusId);
        $tests = UnhlsTest::searchStatus($testStatusId)->leftjoin('unhls_visits', 'unhls_visits.id', '=', 'unhls_tests.visit_id')->leftjoin('unhls_patients', 'unhls_patients.id', '=', 'unhls_visits.patient_id')->where('unhls_patients.hubid', Auth::user()->facility->id);


        // Create Test Statuses array. Include a first entry for ALL
        $statuses = array('all') + TestStatus::all()->pluck('name', 'id')->toArray();

        foreach ($statuses as $key => $value) {
            $statuses[$key] = trans("messages.$value");
        }

        $test_categories = array('All') + TestCategory::all()->pluck('name', 'id')->toArray();
        foreach ($test_categories as $key => $value) {
            $test_categories[$key] = $value;
        }

        // Pagination
        $tests = $tests->paginate(config('kblis.page-items'))->appends($input);

        $hpvresult = UnhlsTest::machinesaveHpvresults();


        //  Barcode
        $barcode = Barcode::first();

        return view('unhls_test.index')
            ->with('testSet', $tests)
            ->with('testStatus', $statuses)
            ->with('dateFrom', $dateFrom)
            ->with('dateTo', $dateTo)
            ->with('testCategories', $test_categories)
            ->with('selectedTestCategoryId', $testCategoryId)
            ->with('barcode', $barcode)
            ->with('hpvresult', $hpvresult)
            ->withInput($input);
    }



    /**
     * Listing of verified tests
     *@param
     * @return Response
     */
    public function verified(Request $request)
    {
        $fromRedirect = Session::pull('fromRedirect');

        if ($fromRedirect) {

            $input = Session::get('TESTS_FILTER_INPUT');
        } else {

            $input = $request->except('_token');
        }

        $searchString = isset($input['search']) ? $input['search'] : '';
        $testCategoryId = isset($input['test_category']) ? $input['test_category'] : '';
        $testStatusId = '5';
        if (isset($input['date_from'])) {
            $dateFrom = $input['date_from'];
        } else {
            $dateFrom = date('Y-m-d');
            $input['date_from'] = date('Y-m-d');
        }
        $dateTo = isset($input['date_to']) ? $input['date_to'] : '';

        // Search Conditions

        $tests = UnhlsTest::searchStatus($testStatusId)->leftjoin('unhls_visits', 'unhls_visits.id', '=', 'unhls_tests.visit_id')->leftjoin('unhls_patients', 'unhls_patients.id', '=', 'unhls_visits.patient_id')->where('unhls_patients.hubid', Auth::user()->facility->id)
            ->select('unhls_tests.id', 'unhls_tests.visit_id', 'unhls_tests.urgency_id', 'unhls_tests.test_type_id', 'unhls_tests.specimen_id', 'unhls_tests.interpretation', 'unhls_tests.test_status_id', 'unhls_tests.created_by', 'unhls_tests.tested_by', 'unhls_tests.verified_by', 'unhls_tests.requested_by', 'unhls_tests.clinician_id', 'unhls_tests.purpose', 'unhls_tests.time_created', 'unhls_tests.time_started', 'unhls_tests.time_completed', 'unhls_tests.time_verified', 'unhls_tests.time_sent', 'unhls_tests.external_id', 'unhls_tests.instrument', 'unhls_tests.instrument_id', 'unhls_tests.approved_by', 'unhls_tests.time_approved', 'unhls_tests.revised_by', 'unhls_tests.time_revised', 'unhls_tests.method_used', 'unhls_tests.sample_tracker_barcode');
        // $tests = UnhlsTest::searchStatus($testStatusId)->leftjoin('unhls_visits', 'unhls_visits.id', '=', 'unhls_tests.visit_id')->leftjoin('unhls_patients', 'unhls_patients.id', '=', 'unhls_visits.patient_id')->where('unhls_patients.hubid', Auth::user()->facility->id);


        // Create Test Statuses array. Include a first entry for ALL
        $statuses = array('all') + TestStatus::all()->pluck('name', 'id')->toArray();

        foreach ($statuses as $key => $value) {
            $statuses[$key] = trans("messages.$value");
        }

        $test_categories = array('All') + TestCategory::all()->pluck('name', 'id')->toArray();
        foreach ($test_categories as $key => $value) {
            $test_categories[$key] = $value;
        }

        // Pagination
        $tests = $tests->paginate(config('kblis.page-items'))->appends($input);

        $hpvresult = UnhlsTest::machinesaveHpvresults();


        //  Barcode
        $barcode = Barcode::first();

        return view('unhls_test.index')
            ->with('testSet', $tests)
            ->with('testStatus', $statuses)
            ->with('barcode', $barcode)
            ->with('dateFrom', $dateFrom)
            ->with('testCategories', $test_categories)
            ->with('selectedTestCategoryId', $testCategoryId)
            ->with('dateTo', $dateTo)
            ->with('hpvresult', $hpvresult)
            ->withInput($input);
    }

    /**
     * Listing of verified tests
     *@param
     * @return Response
     */
    public function approved(Request $request)
    {
        $fromRedirect = Session::pull('fromRedirect');

        if ($fromRedirect) {

            $input = Session::get('TESTS_FILTER_INPUT');
        } else {

            $input = $request->except('_token');
        }

        $searchString = isset($input['search']) ? $input['search'] : '';
        $testCategoryId = isset($input['test_category']) ? $input['test_category'] : '';
        $testStatusId = '7';
        if (isset($input['date_from'])) {
            $dateFrom = $input['date_from'];
        } else {
            $dateFrom = date('Y-m-d');
            $input['date_from'] = date('Y-m-d');
        }
        $dateTo = isset($input['date_to']) ? $input['date_to'] : '';

        // Search Conditions

        $tests = UnhlsTest::searchStatus($testStatusId)->leftjoin('unhls_visits', 'unhls_visits.id', '=', 'unhls_tests.visit_id')->leftjoin('unhls_patients', 'unhls_patients.id', '=', 'unhls_visits.patient_id')->where('unhls_patients.hubid', Auth::user()->facility->id)
            ->select('unhls_tests.id', 'unhls_tests.visit_id', 'unhls_tests.urgency_id', 'unhls_tests.test_type_id', 'unhls_tests.specimen_id', 'unhls_tests.interpretation', 'unhls_tests.test_status_id', 'unhls_tests.created_by', 'unhls_tests.tested_by', 'unhls_tests.verified_by', 'unhls_tests.requested_by', 'unhls_tests.clinician_id', 'unhls_tests.purpose', 'unhls_tests.time_created', 'unhls_tests.time_started', 'unhls_tests.time_completed', 'unhls_tests.time_verified', 'unhls_tests.time_sent', 'unhls_tests.external_id', 'unhls_tests.instrument', 'unhls_tests.instrument_id', 'unhls_tests.approved_by', 'unhls_tests.time_approved', 'unhls_tests.revised_by', 'unhls_tests.time_revised', 'unhls_tests.method_used', 'unhls_tests.sample_tracker_barcode');
        // $tests = UnhlsTest::searchStatus($testStatusId)->leftjoin('unhls_visits', 'unhls_visits.id', '=', 'unhls_tests.visit_id')->leftjoin('unhls_patients', 'unhls_patients.id', '=', 'unhls_visits.patient_id')->where('unhls_patients.hubid', Auth::user()->facility->id);


        // Create Test Statuses array. Include a first entry for ALL
        $statuses = array('all') + TestStatus::all()->pluck('name', 'id')->toArray();

        foreach ($statuses as $key => $value) {
            $statuses[$key] = trans("messages.$value");
        }

        $test_categories = array('All') + TestCategory::all()->pluck('name', 'id')->toArray();
        foreach ($test_categories as $key => $value) {
            $test_categories[$key] = $value;
        }

        // Pagination
        $tests = $tests->paginate(config('kblis.page-items'))->appends($input);

        $hpvresult = UnhlsTest::machinesaveHpvresults();


        //  Barcode
        $barcode = Barcode::first();

        return view('unhls_test.index')
            ->with('testSet', $tests)
            ->with('testStatus', $statuses)
            ->with('barcode', $barcode)
            ->with('dateFrom', $dateFrom)
            ->with('testCategories', $test_categories)
            ->with('selectedTestCategoryId', $testCategoryId)
            ->with('dateTo', $dateTo)
            ->with('hpvresult', $hpvresult)
            ->withInput($input);
    }



    /**
     * Recieve a Test from an external system
     *
     * @param
     * @return Response
     */
    public function receive($id)
    {
        $test = UnhlsTest::find($id);
        $test->test_status_id = UnhlsTest::PENDING;
        $test->time_created = date('Y-m-d H:i:s');
        $test->created_by = Auth::user()->id;
        $test->save();

        return $id;
    }

    /**
     * Recieve a Test from an external system
     *
     * @param
     * @return Response
     */
    public function getpatientdetails($barcode)
    {
        $barcode_1 = DB::table('unhls_tests')->leftjoin('unhls_visits', 'unhls_tests.visit_id', '=', 'unhls_visits.id')->leftjoin('unhls_patients', 'unhls_visits.patient_id', '=', 'unhls_patients.id')->where('unhls_tests.sample_tracker_barcode', $barcode)->select('unhls_tests.visit_id', 'unhls_patients.id as patient_id', 'unhls_tests.test_status_id')->get();
        $barcode_details = $barcode_1[0];
        // dd($barcode_details);
        // dd($barcode_details->visit_id);
        // dd($barcode_details->patient_id);
        // return redirect()->route('reports.patientinterimreportstracker', [id->13]);
        return redirect()->to('api/patient_interim_report_stracker/' . $barcode_details->patient_id . '/' . $barcode_details->visit_id);
        // \App\Http\Controllers\ReportController\viewInterimPatientReport(patient_id, 2);

        // $ret_arr = ['test' => $barcode_details];
        // $ret_arr['status'] = 200;
        // $ret_arr['status_desc'] = 'Packages fetched successfully';
        // return response()->json($ret_arr);
        // $test->test_status_id = UnhlsTest::PENDING;
        // $test->time_created = date('Y-m-d H:i:s');
        // $test->created_by = Auth::user()->id;
        // $test->save();

        // return $id;
    }

    /**
     *Select all tests under a selected test Category - Test Menu
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function testList(Request $request)
    {
        $testCategoryId = $request->get('test_category_id');
        $specimenTypeId = $request->get('specimen_type_id');
        $specimenType = SpecimenType::find($specimenTypeId);
        // dd($specimenType);
        $testTypes = $specimenType->testTypes;

        return view('unhls_test.testTypeList')
            ->with('testCategoryId', $testCategoryId)
            ->with('testTypes', $testTypes);
    }

    /**
     * Display a form for creating a new Test.
     *
     * @param Request $request
     * @param int $patientID
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(Request $request, $patientID = 0)
    {
        if ($patientID == 0) {
            $patientID = $request->get('patient_id');
        }

        //Create a Lab categories Array
        $hub = Auth::user()->facility->id;
        $categories = ['Select Lab Section'] + TestCategory::pluck('name', 'id')->toArray();
        $wards = ['Select Sample Origin'] + Ward::orderBy('name', 'ASC')->pluck('name', 'id')->toArray();
        $clinicians = ['Select clinician'] + Clinician::where('active', '=', 0)->where('hubid', '=', $hub)->orderBy('name', 'ASC')->pluck('name', 'id')->toArray();
        if ($hub == 54) {
            $facilities = ['Select facility'] + Facility::where('active', '=', 0)->pluck('name', 'id')->toArray();
        } else {
            $facilities = ['Select facility'] + Facility::where('active', '=', 0)->where('hubid', '=', $hub)->pluck('name', 'id')->toArray();
        }

        // sample collection default details
        $now = new DateTime();
        $collectionDate = $now->format('Y-m-d H:i');
        $receptionDate = $now->format('Y-m-d H:i');

        $fromRedirect = Session::pull('TEST_CATEGORY');

        if ($fromRedirect) {
            $input = Session::get('TEST_CATEGORY');
        } else {
            $input = $request->except('_token');
        }

        $specimenTypes = ['select Specimen Type'] + SpecimenType::pluck('name', 'id')->toArray();

        $patient = UnhlsPatient::find($patientID);
        // dd($patient);

        //Load Test Create View
        return view('unhls_test.create')
            ->with('collectionDate', $collectionDate)
            ->with('receptionDate', $receptionDate)
            ->with('specimenType', $specimenTypes)
            ->with('patient', $patient)
            ->with('testCategory', $categories)
            ->with('ward', $wards)
            ->with('facilities', $facilities)
            ->with('clinicians', $clinicians);
    }

    /**
     * Upload a new Test.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function stracker_vl_upload(Request $request)
    {
        $response = 'No internet connection';
        if (!$sock = @fsockopen('www.google.com', 80)) {
            return 'No internet connection';
        } else {
            try {

                $client = new \GuzzleHttp\Client([
                    // Base URI is used with relative requests
                    'base_uri' => config('constants.STRACKER_CONNECT'),
                ]);

                $response = $client->request('POST', '/api/reception/receivesamplebybarcode', [
                    'json' => [
                        "barcode" => $request->barcode,
                        "user_id" => $request->user_id,
                        "receipt_date" => $request->receipt_date . ':00',
                        "numberofsamples" => $request->numberofsamples,
                        "is_to_be_transfered" => $request->is_to_be_transfered,
                        "is_tracked_from_facility" => $request->is_tracked_from_facility,
                        "patient_id" => $request->patient_id,
                        "visit_id" => $request->visit_id,
                        "patient_name" => $request->patient_name,
                        "facility_id" => $request->facility_id
                    ]
                ]);
                // dd($response);

                //get status code using $response->getStatusCode();

                // $body = $response->getBody();
                // dd($body);
                // $arr_body = json_decode($body);
                // print_r($arr_body);
            } catch (QueryException $e) {
                Log::error($e);
                echo 'Failed';
            }
        }
        // $balance = ViralLoad::where('uploaded', '=', 0)->count();
        // return $balance;
    }

    /**
     * Save a new Test.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function saveNewTest(Request $request)
    {
        //Create New Test
        $request->validate([
            'visit_type' => 'required',
            'testtypes' => 'required',
            'urgency' => 'required'

        ], [
            'visit_type.required' => 'Visit Type is required',
            'urgency.required' => 'Type of request is required',
            'testtypes.required' => 'Select test type to be displayed within this pane'
        ]);

        $visitType = ['Out-patient', 'In-patient', 'Referral'];

        $activeTest = array();

        /*
             * - Create a visit
             * - Fields required: visit_type, patient_id
             */
        $visit = new UnhlsVisit;
        $visit->patient_id = $request->get('patient_id');
        $visit->visit_type = $visitType[$request->get('visit_type')];
        $visit->ward_id = $request->get('ward_id');
        $visit->urgency = $request->get('urgency');
        $visit->bed_no = $request->get('bed_no');
        $visit->facility_id = $request->get('facility');
        $visit->facility_lab_number = $request->get('facility_lab_number');
        $visit->hospitalized = $request->get('hospitalized');
        $visit->on_antibiotics = $request->get('on_antibiotics');
        $visit->save();
        $new_visit_id = $visit->id;

        $patient_id = $request->get('patient_id');
        $patient = UnhlsPatient::find($patient_id);
        $ulin = $patient->getUlin();
        $uuid = new UuidGenerator;
        $uuid->counter = 0;     // TODO Get default value as 0 from migration
        $uuid->save();
        if ($patient->ulin == '') {
            \DB::statement("UPDATE unhls_patients SET ulin = '" . $ulin . "' WHERE id = " . $patient_id);
        } else {
            // $new_patient = $patient->replicate();
            // $new_patient->ulin = $ulin;
            // $new_patient->save();
        }

        $therapy = new Therapy;
        $therapy->patient_id = $request->get('patient_id');
        $therapy->visit_id = $visit->id;
        $therapy->previous_therapy = $request->get('previous_therapy');
        $therapy->current_therapy = $request->get('current_therapy');
        $therapy->clinical_notes = $request->get('clinical_notes');
        $therapy->clinician_id = $request->get('clinician');
        $therapy->save();

        $tbpatient = new TBPatient;
        $tbpatient->patient_id = $request->get('patient_id');
        $tbpatient->visit_id = $visit->id;
        $tbpatient->patient_type = $request->get('patient_type');
        $tbpatient->hiv_status = $request->get('tb_hiv_status');
        $tbpatient->tb_diagnosis = $request->get('tb_diagnosis');
        $tbpatient->follow_up = $request->get('follow_up');
        if (!empty($tbpatient->patient_type)) {
            $tbpatient->save();
        }

        $transfusionpatient = new BloodTransfusion;
        $transfusionpatient->patient_id = $request->get('patient_id');
        $transfusionpatient->visit_id = $visit->id;
        $transfusionpatient->reason = $request->get('reason');
        $transfusionpatient->other_reasons = $request->get('other_reasons');
        $transfusionpatient->transfusion_history = $request->get('transfusion_history');
        $transfusionpatient->date = $request->get('date');
        $transfusionpatient->pregnancies = $request->get('pregnancies');
        $transfusionpatient->still_birth = $request->get('still_birth');
        $transfusionpatient->jaundiced_babies = $request->get('jaundiced_babies');
        $transfusionpatient->type = $request->get('type');
        $transfusionpatient->units_requested = $request->get('units_requested');
        $transfusionpatient->created_by = $request->get('created_by');
        if (!empty($transfusionpatient->reason)) {
            $transfusionpatient->save();
        }

        /*
             * - Create tests requested
             * - Fields required: visit_id, test_type_id, specimen_id, test_status_id, created_by, requested_by
             */
        $testLists = $request->get('test_list');
        if (is_array($testLists)) {
            foreach ($testLists as $testList) {
                // Create Specimen - specimen_type_id, accepted_by, referred_from, referred_to
                $specimen = new UnhlsSpecimen;
                $specimen->specimen_type_id = $testList['specimen_type_id'];
                $specimen->accepted_by = Auth::user()->id;
                $specimen->time_collected = $request->get('collection_date');
                $specimen->time_accepted = $request->get('reception_date');
                $specimen->save();
                foreach ($testList['test_type_id'] as $id) {
                    $testTypeID = (int)$id;

                    $test = new UnhlsTest;
                    // dd($tes5tList);
                    $test->visit_id = $visit->id;
                    $test->urgency_id = $visit->urgency;
                    $test->test_type_id = $testTypeID;
                    $test->specimen_id = $specimen->id;
                    $test->test_status_id = UnhlsTest::PENDING;
                    $test->created_by = Auth::user()->id;
                    $test->clinician_id = $request->get('clinician');
                    $test->requested_by = $request->get('clinician');
                    $test->purpose = $request->get('hiv_purpose');
                    $test->sample_tracker_barcode = $request->get('sample_tracker_barcode');
                    $test->save();

                    $activeTest[] = $test->id;
                }
            }
        }

        $hpvpatient = new HPVPatient;
        $hpvpatient->patient_id = $request->get('patient_id');
        $hpvpatient->visit_id = $visit->id;
        $hpvpatient->test_id = $test->id;
        $hpvpatient->hiv_status = $request->get('hiv_status');
        $hpvpatient->art_number = $request->get('art_number');
        $hpvpatient->clinic_id = $request->get('clinic_id');
        $hpvpatient->nok_name = $request->get('nok_name');
        $hpvpatient->nok_relationship = $request->get('nok_relationship');
        $hpvpatient->nok_mobile = $request->get('nok_mobile');
        $hpvpatient->screened_status = $request->get('screened_status');
        $hpvpatient->previous_diagnostic_method = $request->get('previous_diagnostic_method');
        $hpvpatient->other_method = $request->get('other_method');
        $hpvpatient->previous_screening_result = $request->get('previous_screening_result');
        $hpvpatient->specimen_type = $request->get('hpv_specimen_type');
        $hpvpatient->previous_screening_date = $request->get('previous_screening_date');
        $hpvpatient->sample_collection_date = $request->get('sample_collection_date');
        $hpvpatient->date_received_by_hw = $request->get('date_received_by_hw');
        $hpvpatient->date_received_by_lab = $request->get('date_received_by_lab');
        $hpvpatient->created_by = Auth::user()->id;

        $hpvpatient->facility_id = Auth::user()->facility->id;
        if (!empty($hpvpatient->specimen_type)) {
            $hpvpatient->save();
        }


        $request_stracker = new Request();
        $request_stracker['barcode'] = $request->get('sample_tracker_barcode');
        $request_stracker['receipt_date'] = $request->get('reception_date');
        $request_stracker['user_id'] = Auth::user()->id;
        $request_stracker['numberofsamples'] = 1;
        $request_stracker['is_to_be_transfered'] = 0;
        $request_stracker['is_tracked_from_facility'] = 1;
        $request_stracker['visit_id'] = $new_visit_id;
        $request_stracker['patient_id'] = $patient_id;
        $request_stracker['patient_name'] = $patient->name;
        $request_stracker['facility_id'] = $request->get('facility');
        if ($request_stracker['barcode'] == '') {
        } else {
            $this->stracker_vl_upload($request_stracker);
        }

        $url = Session::get('SOURCE_URL');

        return redirect()->to($url)->with('message', 'messages.success-creating-test')
            ->with('activeTest', $activeTest);
    }

    private static function vl_data()
    {
        $sql = "select vld.*, p.name, p.patient_number, p.ulin, (case when (p.gender=1) then 'F' else 'M' end) as gender, p.dob, t.time_created as sample_collection_date, utr.result, f.dhis2_uid, u.name as tested_by from viral_load_details vld left join facilities f on vld.site_id=f.id left join unhls_patients p on vld.patient_id=p.id left join unhls_visits v on v.patient_id=p.id left join unhls_tests t on t.visit_id=v.id join unhls_test_results utr on t.id=utr.test_id left join users u on t.tested_by=u.id where vld.uploaded=0";
        return $sql;
    }



    public function getClinician($id)
    {
        $clinician = Clinician::find($id);
        return $clinician;
    }

    /**
     * Display Collect page
     *
     * @param
     * @return
     */
    public function collectSpecimen($specimenID)
    {
        $specimen = UnhlsSpecimen::find($specimenID);
        return view('unhls_test.collect')->with('specimen', $specimen);
    }

    public function collectSpecimenModal(Request $request)
    {
        $now = new DateTime();
        $collectionDate = $now->format('Y-m-d H:i');
        $receptionDate = $now->format('Y-m-d H:i');
        $specimen = UnhlsSpecimen::find($request->get('id'));
        $specimenTypes = SpecimenType::all();
        return view('unhls_test.collectSpecimen')
            ->with('collectionDate', $collectionDate)
            ->with('specimen', $specimen)
            ->with('specimenTypes', $specimenTypes);
    }

    public function collectSpecimenAction(Request $request)
    {
        $specimen = UnhlsSpecimen::find($request->get('specimen_id'));

        //$specimen = UnhlsSpecimen::find($specimen_id);
        $specimen->specimen_status_id = UnhlsSpecimen::ACCEPTED;
        $specimen->accepted_by = Auth::user()->id;
        $specimen->sample_obtainer = $request->get('sample_obtainer');
        $specimen->time_collected = $request->get('collection_date');
        $specimen->time_accepted = $request->get('reception_date');
        $specimen->save();

        return redirect()->route('unhls_test.index')
            ->with('message', 'You have successfully saved specimen collection details');
    }

    /**
     * Display accept specimen page
     *
     * @param
     * @return
     */
    public function acceptSpecimen(Request $request)
    {
        $specimen = UnhlsSpecimen::find($request->get('id'));
        $specimenTypes = SpecimenType::all();
        return view('unhls_test.acceptSpecimen')
            ->with('specimen', $specimen)
            ->with('specimenTypes', $specimenTypes);
    }

    /**
     * Display Rejection page
     *
     * @param
     * @return
     */
    public function reject($testID)
    {
        $test = UnhlsTest::find($testID);
        $rejectionReason = RejectionReason::all();
        return view('unhls_test.reject')->with('test', $test)
            ->with('rejectionReason', $rejectionReason);
    }

    /**
     * Display Referral page
     *
     * @param
     * @return
     */
    public function refer($specimenID)
    {
        $specimen = UnhlsSpecimen::find($specimenID);
        $referralReason = ReferralReason::all();
        $test = UnhlsTest::find($specimenID);
        return view('unhls_test.refer')->with('specimen', $specimen)->with('test', $test)
            ->with('referralReason', $referralReason);
    }

    /**
     * Executes Rejection
     *
     * @param
     * @return
     */
    // todo: create a functions for pre-analytic rejection
    public function rejectAction(Request $request)
    {
        //Reject justifying why.
        $rules = array(
            //            'rejectionReason' => 'required|non_zero_key',
            'rejectionReason' => 'required',
            'reject_explained_to' => 'required',
        );
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->route('unhls_test.reject', array($request->get('test_id')))
                ->withInput()
                ->withErrors($validator);
        } else {
            $test = UnhlsTest::find($request->get('test_id'));
            // this refers to analytic rejection of specimen
            $test->test_status_id = UnhlsTest::REJECTED;
            $test->save();
            // todo: create cascade deletion for it, incase rejection is reversed
            $rejection = new AnalyticSpecimenRejection;
            //$rejection->rejection_reason_id = $request->get('rejectionReason');
            $rejection->test_id = $request->get('test_id');
            $rejection->specimen_id = $request->get('specimen_id');
            $rejection->rejected_by = Auth::user()->id;
            $rejection->time_rejected = date('Y-m-d H:i:s');
            $rejection->reject_explained_to = $request->get('reject_explained_to');
            $rejection->save();

            /**
             * Create rejection reasons
             */
            $reasons = $request->get('rejectionReason');
            if (is_array($reasons)) {
                foreach ($reasons as $id => $value) {
                    $reason = new AnalyticSpecimenRejectionReason;

                    $reason->rejection_id = $rejection->id;
                    $reason->specimen_id = $request->get('specimen_id');
                    $reason->reason_id = $value;
                    $reason->save();
                }
            }
            $url = Session::get('SOURCE_URL');

            return redirect()->to($url)->with('message', 'messages.success-rejecting-specimen')
                ->with('activeTest', array($test->id));
        }
    }

    /**
     * Accept a Test's Specimen
     *
     * @param
     * @return
     */
    public function acceptSpecimenAction(Request $request)
    {
        $specimen = UnhlsSpecimen::find($request->get('specimen_id'));
        $specimen->specimen_status_id = UnhlsSpecimen::ACCEPTED;
        $specimen->specimen_type_id = $request->get('specimen_type_id');
        $specimen->accepted_by = Auth::user()->id;
        $specimen->time_accepted = date('Y-m-d H:i:s');
        $specimen->save();

        return redirect()->route('unhls_test.index')
            ->with('message', 'You have successfully captured specimen collection details');
    }


    /**
     * Display Change specimenType form fragment to be loaded in a modal via AJAX
     *
     * @param
     * @return
     */
    public function changeSpecimenType(Request $request)
    {
        $test = UnhlsTest::find($request->get('id'));
        return view('unhls_test.changeSpecimenType')->with('test', $test);
    }

    /**
     * Update a Test's SpecimenType
     *
     * @param
     * @return
     */
    public function updateSpecimenType(Request $request)
    {
        $specimen = UnhlsSpecimen::find($request->get('specimen_id'));
        $specimen->specimen_type_id = $request->get('specimen_type');
        $specimen->save();

        return redirect()->route('unhls_test.viewDetails', array($specimen->test->id));
    }

    /**
     * Starts Test
     *
     * @param
     * @return
     */
    public function start(Request $request)
    {
        $test = UnhlsTest::find($request->get('id'));
        $test->tested_by = Auth::user()->id;
        $test->test_status_id = UnhlsTest::STARTED;
        $test->time_started = date('Y-m-d H:i:s');
        $test->save();
        return $test->test_status_id;
    }

    /**
     * Display Result Entry page
     *
     * @param
     * @return
     */
    public function enterResults($testID)
    {
        $equipment_list = array('---Choose Instrument---') + Instrument::all()->pluck('name', 'id')->toArray();
        // dd($equipment_list);
        $test = UnhlsTest::find($testID);
        $blood_units = BloodBank::where('status', '0')->pluck('unit_no', 'id')->toArray();
        $transfusion = $test->testType->isBloodTransfusion();
        // if the test being carried out requires a culture worksheet
        if ($test->testType->isCulture()) {
            return redirect()->route('culture.edit', [$test->id]);
        } elseif ($test->testType->isGramStain()) {
            return redirect()->route('gramstain.edit', [$test->id]);
        } else {
            return view('unhls_test.enterResults')->with('equipment_list', $equipment_list)
                ->with('test', $test)
                ->with('transfusion', $transfusion)
                ->with('blood_units', $blood_units);
        }
    }

    /**
     * Returns test result intepretation
     * @param
     * @return
     */
    public function getResultInterpretation(Request $request)
    {
        $result = array();
        //save if it is available

        if ($request->get('age')) {
            $result['birthdate'] = $request->get('age');
            $result['gender'] = $request->get('gender');
        }
        $result['measureid'] = $request->get('measureid');
        $result['measurevalue'] = $request->get('measurevalue');

        $measure = new Measure;
        return $measure->getResultInterpretation($result);
    }

    /**
     * Saves Test Results
     *
     * @param $testID to save
     * @return \Illuminate\Http\RedirectResponse
     */
    public function saveResults(Request $request, $testID)
    {
        $test = UnhlsTest::find($testID);
        $test->test_status_id = UnhlsTest::COMPLETED;
        $test->tested_by = Auth::user()->id;
        $test->time_completed = date('Y-m-d H:i:s');
        $test->instrument_id = $request->get('equipment_id');
        $test->method_used = $request->get('method_used');

        if ($test->testType->name == 'Gram Staining') {
            $results = '';
            foreach ($test->gramStainResults as $gramStainResult) {
                $results = $results . $gramStainResult->gramStainRange->name . ',';
            }
        }

        foreach ($test->testType->measures as $measure) {
            $testResult = UnhlsTestResult::updateOrCreate(array('test_id' => $testID, 'measure_id' => $measure->id));
            if ($test->testType->name == 'Gram Staining') {

                $testResult->result = $results;
                $inputName = "m_" . $measure->id;
            } else {
                $testResult->result = $request->get('m_' . $measure->id);
                $inputName = "m_" . $measure->id;
            }
            $rules = array("$inputName" => 'max:255');

            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput($request->all());
            } else {
                $testResult->save();
            }
        }
        // dd($testResults);
        if ($test->isHIV()) {
            $test->interpretation = $test->interpreteHIVResults();
        } else {
            $test->interpretation = $request->get('interpretation');
        }
        $test->save();

        if ($test->testType->name == 'HPV') {
            $this->saveHpvresults($testID);
        }

        //saving blood to be transfused
        $blood_units = $request->get('visit_id');
        $blood_unit_id = $request->get('blood_bank_id');
        $blood_amount_given = $request->get('units_given');
        $blood_unit_status = 1;
        if (!empty($blood_unit_id)) {
            \DB::statement("UPDATE patient_transfused SET blood_bank_id = '" . $blood_unit_id . "', units_given = '" . $blood_amount_given . "' WHERE visit_id = " . $blood_units);
            \DB::statement("UPDATE blood_bank SET status = '" . $blood_unit_status . "' WHERE id = " . $blood_unit_id);
        }

        //Fire of entry saved/edited event
        Event::dispatch('test.saved', array($testID));

        $input = Session::get('TESTS_FILTER_INPUT');
        Session::put('fromRedirect', 'true');

        // Get page
        $url = Session::get('SOURCE_URL');
        $urlParts = explode('&', $url);
        if (isset($urlParts['page'])) {
            $pageParts = explode('=', $urlParts['page']);
            $input['page'] = $pageParts[1];
        }

        // redirect
        return redirect()->to($url)
            ->with('message', trans('messages.success-saving-results'))
            ->with('activeTest', array($test->id))
            ->withInput($input);
    }

    private function saveHpvresults($testID)
    {
        $test = UnhlsTest::Find($testID);

        $sql = "SELECT test_id, GROUP_CONCAT(result ORDER BY id ASC SEPARATOR ',') AS Results FROM unhls_test_results WHERE test_id = $testID GROUP BY test_id";
        $genotypes = DB::select($sql);
        // dd($genotypes);
        $genotypes_result = $genotypes[0]->Results;
        $tab = ",";
        $exp = explode($tab, $genotypes_result);
        $genotype_16 = isset($exp[0]) ? $exp[0] : null;
        $genotype_18 = isset($exp[1]) ? $exp[1] : null;
        $genotype_hr = isset($exp[2]) ? $exp[2] : null;

        \DB::statement("UPDATE hpv_patient SET genotype_16 = '" . $genotype_16 . "',genotype_18 = '" . $genotype_18 . "',genotype_hr = '" . $genotype_hr . "' WHERE test_id = " . $testID);
    }


    public function saveEditedResults(Request $request, $testID)
    {
        $test = UnhlsTest::find($testID);
        $test->test_status_id = UnhlsTest::COMPLETED;

        if ($test->testType->name == 'Gram Staining') {
            $results = '';
            foreach ($test->gramStainResults as $gramStainResult) {
                $results = $results . $gramStainResult->gramStainRange->name . ',';
            }
        }

        foreach ($test->testType->measures as $measure) {
            $testResult = UnhlsTestResult::updateOrCreate(array('test_id' => $testID, 'measure_id' => $measure->id));
            if ($test->testType->name == 'Gram Staining') {

                $testResult->result = $results;
                $inputName = "m_" . $measure->id;
            } else {
                $testResult->result = $request->get('m_' . $measure->id);
                $inputName = "m_" . $measure->id;
            }
            $rules = array("$inputName" => 'max:255');

            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput($request->all());
            } else {
                $testResult->save();
            }
        }
        if ($test->isHIV()) {
            $test->interpretation = $test->interpreteHIVResults();
        } else {
            $test->interpretation = $request->get('interpretation');
        }
        $test->save();

        //Fire of entry saved/edited event
        Event::dispatch('test.saved', array($testID));

        $input = Session::get('TESTS_FILTER_INPUT');
        Session::put('fromRedirect', 'true');

        // Get page
        $url = Session::get('SOURCE_URL');
        $urlParts = explode('&', $url);
        if (isset($urlParts['page'])) {
            $pageParts = explode('=', $urlParts['page']);
            $input['page'] = $pageParts[1];
        }

        // redirect
        return redirect()->to($url)
            ->with('message', trans('messages.success-saving-results'))
            ->with('activeTest', array($test->id))
            ->withInput($input);
    }

    //Save reviewed test result
    public function saveRevisedResults(Request $request, $testID)
    {
        $test = UnhlsTest::find($testID);
        $test->test_status_id = UnhlsTest::VERIFIED;
        $test->revised_by = Auth::user()->id;
        $test->time_revised = date('Y-m-d H:i:s');

        if ($test->testType->name == 'Gram Staining') {
            $results = '';
            foreach ($test->gramStainResults as $gramStainResult) {
                $results = $results . $gramStainResult->gramStainRange->name . ',';
            }
        }

        foreach ($test->testType->measures as $measure) {
            $testResult = UnhlsTestResult::updateOrCreate(array('test_id' => $testID, 'measure_id' => $measure->id));
            if ($test->testType->name == 'Gram Staining') {

                $testResult->result = $results;
                $inputName = "m_" . $measure->id;
            } else {
                $testResult->revised_result = $request->get('m_' . $measure->id);
                $inputName = "m_" . $measure->id;
            }
            $rules = array("$inputName" => 'max:255');

            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput($request->all());
            } else {
                $testResult->save();
            }
        }
        if ($test->isHIV()) {
            $test->interpretation = $test->interpreteHIVResults();
        } else {
            $test->interpretation = $request->get('interpretation');
        }
        $test->save();

        //Fire of entry saved/edited event
        Event::dispatch('test.saved', array($testID));

        $input = Session::get('TESTS_FILTER_INPUT');
        Session::put('fromRedirect', 'true');

        // Get page
        $url = Session::get('SOURCE_URL');
        $urlParts = explode('&', $url);
        if (isset($urlParts['page'])) {
            $pageParts = explode('=', $urlParts['page']);
            $input['page'] = $pageParts[1];
        }

        // redirect
        return redirect()->to($url)
            ->with('message', trans('messages.success-saving-results'))
            ->with('activeTest', array($test->id))
            ->withInput($input);
    }

    /**
     * Display Edit page
     *
     * @param
     * @return
     */
    // todo: move editing results to a different controller and here leave editing particular test request?
    public function edit($testID)
    {
        $test = UnhlsTest::find($testID);
        // if the test being carried out requires a culture worksheet
        if ($test->testType->name == 'Culture and Sensitivity') {
            return redirect()->route('culture.edit', [$test->id]);
        } elseif ($test->testType->name == 'Gram Staining') {
            return redirect()->route('gramstain.edit', [$test->id]);
        } else {
            return view('unhls_test.edit')->with('test', $test);
        }
    }

    /**
     * Display Test Details
     *
     * @param
     * @return
     */
    public function viewDetails($testID)
    {
        $rejectionReason = RejectionReason::all();
        $rejection = AnalyticSpecimenRejection::all();
        $reason = AnalyticSpecimenRejectionReason::all();
        $barcode = Barcode::first();

        return view('unhls_test.viewDetails')->with('test', UnhlsTest::find($testID))
            ->with('rejectionReason', $rejectionReason)
            ->with('rejection', $rejection)
            ->with('barcode', $barcode)
            ->with('reason', $reason);
    }

    /**
     * Verify Test
     *
     * @param
     * @return
     */
    public function verify($testID)
    {
        $test = UnhlsTest::find($testID);
        $test->test_status_id = UnhlsTest::VERIFIED;
        $test->time_verified = date('Y-m-d H:i:s');
        $test->verified_by = Auth::user()->id;
        $test->save();

        //Fire of entry verified event
        Event::dispatch('test.verified', array($testID));

        return view('unhls_test.viewDetails')->with('test', $test);
    }

    /**
     * Approve Test
     *
     * @param
     * @return
     */
    public function approve($testID)
    {
        $test = UnhlsTest::find($testID);
        $test->test_status_id = UnhlsTest::APPROVED;
        $test->time_approved = date('Y-m-d H:i:s');
        $test->approved_by = Auth::user()->id;
        $test->save();

        //Fire of entry approved event
        Event::dispatch('test.approved', array($testID));

        return view('unhls_test.viewDetails')->with('test', $test);
    }

    public function getTestVisit($id)
    {

        $tests = UnhlsTest::searchByVisit($id);

        if (count($tests->get()) == 0) {
            Session::flash('message', trans('messages.empty-search'));
        }

        // Pagination
        $tests = $tests->paginate(config('kblis.page-items'));
        $visit = UnhlsVisit::find($id);

        //	Barcode
        $barcode = Barcode::first();

        // Load the view and pass it the tests
        return view('unhls_test.list_tests_in_visit')
            ->with('testSet', $tests)
            ->with('visit', $visit)
            ->with('barcode', $barcode);
    }

    /**
     * Refer the test
     *
     * @param specimenId
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showRefer($testid)
    {
        $test = UnhlsTest::find($testid);

        $facilities = Facility::all();
        //Referral facilities
        $referralReason = ReferralReason::all();
        return view('unhls_test.refer')

            ->with('test', $test)
            ->with('facilities', $facilities)
            ->with('referralReason', $referralReason);
    }

    /**
     * Refer action
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function refer_action(Request $request)
    {

        $specimenId = $request->get('specimen_id');

        //Insert into referral table
        $referral = new Referral();
        $referral->test_id = $request->get('test_id');
        $referral->status = Referral::REFERRED_OUT;
        $referral->sample_obtainer = $request->get('sample-obtainer');
        $referral->cadre_obtainer = $request->get('cadre-obtainer');
        $referral->sample_date = $request->get('sample-date');
        $referral->sample_time = date('Y-m-d H:i:s', strtotime($request->get('sample-time')));
        $referral->time_dispatch = date('Y-m-d H:i:s', strtotime($request->get('time-dispatch')));
        $referral->storage_condition = $request->get('storage-condition');
        $referral->transport_type = $request->get('transport-type');
        $referral->referral_reason = $request->get('referral-reason');
        $referral->priority_specimen = $request->get('priority-specimen');
        $referral->facility_id = $request->get('facility_id');
        $referral->person = $request->get('person');
        $referral->contacts = $request->get('contacts');
        $referral->user_id = Auth::user()->id;

        //Update specimen referral status
        $specimen = UnhlsSpecimen::find($specimenId);

        DB::transaction(function () use ($referral, $specimen) {


            $referral->save();
            $specimen->referral_id = $referral->id;
            $specimen->save();
        });

        //Start test
        $request->merge(array('id' => $request->get('test_id'))); //Add the testID to the Input
        $this->start($request);

        //Return view
        $url = Session::get('SOURCE_URL');


        return redirect()->to($url)->with('message', trans('messages.specimen-successful-refer'))
            ->with('activeTest', array($request->get('test_id')));
    }

    /**
     *
     * @param
     * @return
     */
    public function delete($id)
    {
        // if no results saved, the permitted can delete - [clinician/technologist]
        $test = UnhlsTest::find($id);

        $testInUse = UnhlsTestResult::where('test_id', '=', $id)->first();
        if (empty($testInUse)) {
            // The test is not in use
            $test->delete();
        } else {
            // The test is in use
            return redirect()->route('visit.show', [$test->visit_id])
                ->with('message', 'Test can NOT be Deleted (has results)!');
        }
        // redirect
        return redirect()->route('visit.show', [$test->visit_id])
            ->with('message', 'Test Successfully Deleted!');
    }


    public function uploadResults(Request $request, $testID)
    {
        $test = UnhlsTest::find($testID);
        $test->test_status_id = UnhlsTest::COMPLETED;
        $test->tested_by = Auth::user()->id;
        $test->time_completed = date('Y-m-d H:i:s');
        $test->instrument_id =  empty($request->get('equipment_id')) ? Null : $request->get('equipment_id');
        $testid = $test->id;
        // Create measures in the results table where to insert the results
        foreach ($test->testType->measures as $measure) {
            $testResult = UnhlsTestResult::firstOrCreate(array('test_id' => $testID, 'measure_id' => $measure->id));
        }

        $file = $request->file('results');  // get file from blade
        $fileArr = fopen($file, "r");   // Open the File and Covert it into array
        $row = fgetcsv($fileArr);
        //dd($row);
        while (($row = fgetcsv($fileArr)) !== FALSE) {
            $labID = trim($row[6]);    //Read the columns and insert the values into the table of ur choice
            // Upload results to the right patient and right test merging with the lab id
            $query_to_check = "SELECT up.ulin from unhls_tests ut left join unhls_visits uv on ut.visit_id = uv.id
                                left join unhls_patients up on up.id = uv.patient_id
                                where ut.id like '" . $testid . "'";
            $result = DB::select($query_to_check);

            $res = [];
            foreach ($result as $key => $value) {
                $res = $value->ulin;
            }

            if ($res != $labID) {
                $url = Session::get('SOURCE_URL');
                return Redirect::to($url)->with('message', trans('Lab ID doesnot Match For Upload'));
            } else {
                $wbc = trim($row[92]);
                $neut_hash = trim($row[124]);
                $lymph_hash = trim($row[126]);
                $mono_hash = trim($row[128]);
                $eo_hash = trim($row[130]);
                $baso_hash = trim($row[132]);
                //$ig_hash = trim($row[144]); //No measure

                $neut_perc = trim($row[134]);
                $lymph_perc = trim($row[136]);
                $mono_perc = trim($row[138]);
                $eo_perc = trim($row[140]);
                $baso_perc = trim($row[142]);
                //$ig_hash = trim($row[144]); //No measure
                $ig_perc = trim($row[146]);
                $rbc = trim($row[94]);
                $hgb = trim($row[96]);
                $hct = trim($row[98]);
                $mcv = trim($row[100]);
                $mch = trim($row[102]);
                $mchc = trim($row[104]);
                $rdw_sd = trim($row[108]);
                $rdw_cv = trim($row[110]);
                $plt = trim($row[106]);
                $pdw = trim($row[112]);
                $mpv = trim($row[114]);
                $p_lcr = trim($row[116]);
                $pct = trim($row[118]);

                // More parameters
                $ret = trim($row[148]);
                $irf = trim($row[152]);
                $lfr = trim($row[154]);
                $mfr = trim($row[156]);
                $hfr = trim($row[158]);
                $ret_he = trim($row[160]);

                $querry1 = DB::update("UPDATE unhls_test_results set result = '" . $wbc . "' WHERE measure_id = 780 AND test_id = $testid ");
                $querry2 = DB::update("UPDATE unhls_test_results set result = '" . $rbc . "' where measure_id = 781 AND test_id = '$testid' ");
                $querry3 = DB::update("UPDATE unhls_test_results set result = '" . $hgb . "' where measure_id = 782 AND test_id = '$testid' ");
                $querry4 = DB::update("UPDATE unhls_test_results set result = '" . $hct . "' where measure_id = 784 AND test_id = '$testid' ");
                $querry5 = DB::update("UPDATE unhls_test_results set result = '" . $mcv . "' where measure_id = 784 AND test_id = '$testid' ");
                $querry6 = DB::update("UPDATE unhls_test_results set result = '" . $mch . "' where measure_id = 785 AND test_id = '$testid' ");
                $querry7 = DB::update("UPDATE unhls_test_results set result = '" . $mchc . "' where measure_id = 786 AND test_id = '$testid' ");
                $querry8 = DB::update("UPDATE unhls_test_results set result = '" . $plt . "' where measure_id = 787 AND test_id = '$testid' ");
                $querry9 = DB::update("UPDATE unhls_test_results set result = '" . $rdw_sd . "' where measure_id = 788 AND test_id = '$testid' ");
                $querry10 = DB::update("UPDATE unhls_test_results set result = '" . $rdw_cv . "' where measure_id = 789 AND test_id = '$testid' ");
                $querry11 = DB::update("UPDATE unhls_test_results set result = '" . $pdw . "' where measure_id = 790 AND test_id = '$testid' ");
                $querry12 = DB::update("UPDATE unhls_test_results set result = '" . $mpv . "' where measure_id = 791 AND test_id = '$testid' ");
                $querry13 = DB::update("UPDATE unhls_test_results set result = '" . $p_lcr . "' where measure_id = 792 AND test_id = '$testid' ");
                $querry14 = DB::update("UPDATE unhls_test_results set result = '" . $pct . "' where measure_id = 793 AND test_id = '$testid' ");
                $querry15 = DB::update("UPDATE unhls_test_results set result = '" . $neut_hash . "' where measure_id = 5794 AND test_id = '$testid' ");
                $querry16 = DB::update("UPDATE unhls_test_results set result = '" . $lymph_hash . "' where measure_id = 95 AND test_id = '$testid' ");
                $querry17 = DB::update("UPDATE unhls_test_results set result = '" . $mono_hash . "' where measure_id = 796 AND test_id = '$testid' ");
                $querry18 = DB::update("UPDATE unhls_test_results set result = '" . $eo_hash . "' where measure_id = 797 AND test_id = '$testid' ");
                $querry19 = DB::update("UPDATE unhls_test_results set result = '" . $baso_hash . "' where measure_id = 798 AND test_id = '$testid' ");
                $querry20 = DB::update("UPDATE unhls_test_results set result = '" . $neut_perc . "' where measure_id = 799 AND test_id = '$testid' ");
                $querry21 = DB::update("UPDATE unhls_test_results set result = '" . $lymph_perc . "' where measure_id = 800 AND test_id = '$testid' ");
                $querry22 = DB::update("UPDATE unhls_test_results set result = '" . $mono_perc . "' where measure_id = 801 AND test_id = '$testid' ");
                $querry23 = DB::update("UPDATE unhls_test_results set result = '" . $eo_perc . "' where measure_id = 802 AND test_id = '$testid' ");
                $querry24 = DB::update("UPDATE unhls_test_results set result = '" . $baso_perc . "' where measure_id = 803 AND test_id = '$testid' ");
            }
        }
        $test->save();
        Event::dispatch('test.saved', array($testID));

        $input = Session::get('TESTS_FILTER_INPUT');
        Session::put('fromRedirect', 'true');

        // Get page
        $url = Session::get('SOURCE_URL');
        $urlParts = explode('&', $url);
        if (isset($urlParts['page'])) {
            $pageParts = explode('=', $urlParts['page']);
            $input['page'] = $pageParts[1];
        }

        // redirect 0757435427 
        return Redirect::to($url)
            ->with('message', trans('messages.success-saving-results'))
            ->with('activeTest', array($test->id))
            ->withInput($input);
    }
}
