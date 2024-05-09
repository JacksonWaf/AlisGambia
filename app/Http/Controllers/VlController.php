<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facility;
use App\Models\LookUp;
use App\Models\TestCategory;
use App\Models\UnhlsPatient;
use App\Models\UnhlsVisit;
use App\Models\ViralLoad;
use App\Models\SpecimenType;
use App\Models\LookUpTypeValue;
use App\Models\Clinician;
use App\Models\Therapy;
use App\Models\UnhlsSpecimen;
use App\Models\UnhlsTest;
use App\Models\UuidGenerator;

use Illuminate\Support\Facades\Log;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use Psr\Http\Message\RequestInterface;
use Illuminate\Http\Response;
use DateTime;


class VlController extends Controller
{
    public function index()
    {
        // $records = ViralLoad::all();
        $sql = "select vld.*, p.name, p.patient_number, p.ulin, (case when (p.gender=1) then 'F' else 'M' end) as gender, p.dob, t.time_created as sample_collection_date, utr.result, f.dhis2_uid, u.name as tested_by from viral_load_details vld left join facilities f on vld.site_id=f.id left join unhls_patients p on vld.patient_id=p.id left join unhls_visits v on v.patient_id=p.id left join unhls_tests t on t.visit_id=v.id left join unhls_test_results utr on t.id=utr.test_id left join users u on t.tested_by=u.id";
        $records = DB::select($sql);
        $regimens = config('vlpoc.Regimen');
        $treatment_line = config('vlpoc.Treatment');
        $care_approach = ['1' => 'FBIM', '2' => 'FBG', '3' => 'FTDR', '4' => 'CDDP', '5' => 'CCLAD'];
        $arv_adherence = config('vlpoc.Adherence');

        return view('vl.index')->with('records', $records)->with('regimens', $regimens)->with('treatment_line', $treatment_line)->with('care_approach', $care_approach)->with('arv_adherence', $arv_adherence);
    }

    public function store(Request $request)
    {
        $request->validate([
            'patient_ART' => 'required',
            'form_number' => 'required',
            'initiation_date' => 'required',
            'arv_adherence' => 'required',
            'care_approach' => 'required',
            'indication' => 'required',
            'test_date' => 'required'

        ]);

        $patient = new UnhlsPatient;
        $patient->patient_number = $request->get('other_id');
        $patient->nin = $request->get('nin');
        $patient->name = $request->get('patient_ART');
        $patient->gender = $request->get('gender');
        $patient->dob = $request->get('dob');
        $patient->phone_number = $request->get('phone_number');
        $patient->created_by = Auth::user()->id;

        try {
            $patient->save();
            if ($request->get('ulin') != '') {
                $patient->ulin = $request->get('ulin');
            } else {
                $patient->ulin = $patient->getUlin();
            }
            $patient->save();
            $uuid = new UuidGenerator;
            $uuid->counter = 0;     // TODO Get default value as 0 from migration
            $uuid->save();
        } catch (QueryException $e) {
            Log::error($e);
            echo $e->getMessage();
        }
        $vl_details = new ViralLoad;
        $vl_details->patient_id = $patient->id;
        $vl_details->form_number = $request->get('form_number');
        $vl_details->referral_reason = $request->get('referral_reason');
        $vl_details->initiation_date = $request->get('initiation_date');
        $vl_details->duration_on_current_regimen = $request->get('duration_on_current_regimen');
        $vl_details->who_stage = $request->get('who_stage');
        $vl_details->mother_pregnant = $request->get('mother_pregnant');
        $vl_details->mother_breastfeeding = $request->get('mother_breastfeeding');
        $vl_details->active_tb = $request->get('active_tb');
        $vl_details->tb_phase = $request->get('tb_phase');
        $vl_details->arv_adherence = $request->get('arv_adherence');
        $vl_details->care_approach = $request->get('care_approach');
        $vl_details->indication = $request->get('indication');
        $vl_details->regiment = $request->get('regiment');
        $vl_details->treatment_line = $request->get('treatment_line');
        $vl_details->test_date = $request->get('test_date');
        $vl_details->poc_device = $request->get('poc_device');

        if (!empty($request->get('facility_id'))) {
            $vl_details->facility_id = $request->get('facility_id');
        } else {
            $vl_details->facility_id = Auth::user()->facility->id;
        }
        $vl_details->site_id  = Auth::user()->facility->id;
        $vl_details->save();

        $visitType = ['Out-patient', 'In-patient', 'Referral'];
        $activeTest = array();

        $visit = new UnhlsVisit;
        $visit->patient_id = $patient->id;
        $visit->visit_type = 'Out-patient';

        $visit->save();

        $therapy = new Therapy;
        $therapy->patient_id = $patient->id;
        $therapy->visit_id = $visit->id;
        $therapy->previous_therapy = $request->get('previous_therapy');
        $therapy->current_therapy = $request->get('current_therapy');
        $therapy->clinical_notes = $request->get('clinical_notes');
        $therapy->clinician_id = $request->get('clinician');
        $therapy->save();

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
                    $test->visit_id = $visit->id;
                    $test->urgency_id = $visit->urgency;
                    $test->test_type_id = $testTypeID;
                    $test->specimen_id = $specimen->id;
                    $test->test_status_id = UnhlsTest::PENDING;
                    $test->created_by = Auth::user()->id;
                    $test->clinician_id = $request->get('clinician');
                    $test->requested_by = $request->get('clinician');
                    $test->purpose = $request->get('hiv_purpose');
                    $test->save();

                    $activeTest[] = $test->id;
                }
            }
        }
        $url = Session::get('SOURCE_URL');

        return redirect()->to($url)->with('message', 'messages.success-creating-test')
            ->with('activeTest', $activeTest);
    }

    public function create()
    {
        $active_tb = ['82' => 'Initiation Phase', '83' => 'Continuation Phase'];
        $referral_reasons = array('0' => 'Select---', 'Stock Out' => 'Stock Out', 'Equipment breakdown' => 'Equipment breakdown', 'Service not avalable at facility' => 'Service not avalable at facility');
        $facilities = ['Select facility'] + Facility::where('active', '=', 0)->pluck('name', 'id')->toArray();
        $duration_current_regimen = ['1' => '6 months - < 1yr', '2' => '1 - 2yrs', '3' => '2 - < 5yrs', '4' => '5yrs and above', '5' => 'Left Blank'];
        $care_approach = ['1' => 'FBIM', '2' => 'FBG', '3' => 'FTDR', '4' => 'CDDP', '5' => 'CCLAD'];
        $arv_adherence = config('vlpoc.Adherence');
        $who_stage = ['1' => 'I', '2' => 'II', '3' => 'III', '4' => 'IV'];
        $mother_pregnant = ['Y' => 'Yes', 'N' => 'No', 'L' => 'Left Blank'];
        $mother_breastfeeding = ['Y' => 'Yes', 'N' => 'No', 'L' => 'Left Blank'];
        $clinicians = ['Select clinician'] + Clinician::where('active', '=', 0)->pluck('name', 'id')->toArray();

        $now = new DateTime();
        $collectionDate = $now->format('Y-m-d H:i');
        $receptionDate = $now->format('Y-m-d H:i');

        $specimenTypes = ['select Specimen Type'] + SpecimenType::pluck('name', 'id')->toArray();
        $categories = ['Select Lab Section'] + TestCategory::pluck('name', 'id')->toArray();

        $regimens = config('vlpoc.Regimen');

        $treatment_line = config('vlpoc.Treatment');


        return view('vl.create', compact(
            'facilities',
            'referral_reasons',
            'active_tb',
            'duration_current_regimen',
            'mother_pregnant',
            'who_stage',
            'mother_breastfeeding',
            'arv_adherence',
            'care_approach',
            'regimens',
            'treatment_line',
            'specimenTypes',
            'collectionDate',
            'receptionDate',
            'categories',
            'clinicians'
        ));
    }

    public function show()
    {
    }

    private static function vl_data()
    {

        $sql = "select vld.*, p.name, p.patient_number, p.ulin, (case when (p.gender=1) then 'F' else 'M' end) as gender, p.dob, t.time_created as sample_collection_date, utr.result, f.dhis2_uid, u.name as tested_by from viral_load_details vld left join facilities f on vld.site_id=f.id left join unhls_patients p on vld.patient_id=p.id left join unhls_visits v on v.patient_id=p.id left join unhls_tests t on t.visit_id=v.id join unhls_test_results utr on t.id=utr.test_id left join users u on t.tested_by=u.id where vld.uploaded=0";
        return $sql;
    }

    private static function hpv_upload()
    {

        $sql = "select hp.id as result_id, patient_number, p.name as patient_name, dob, gender, tt.name as test_type, hp.updated_at as test_date, genotype_16, genotype_18,genotype_hr from hpv_patient hp
        left join unhls_test_results r on hp.test_id=r.test_id
        left join unhls_tests t on hp.test_id=t.id
        left join test_types tt on t.test_type_id=tt.id
        left join unhls_visits v on t.visit_id=v.id
        left join unhls_patients p on v.patient_id=p.id where tt.name = 'HPV' && hp.uploaded=0
        GROUP BY hp.id, result_id,patient_number,patient_name,dob,gender,test_type,test_date";
        return $sql;
    }

    private static function poc_data_upload_view()
    {

        $sql = "select facility_id, infant_name, exp_no, gender, age, caretaker_number, admission_date, breastfeeding_status, entry_point, mother_name, provisional_diagnosis, infant_pmtctarv, mother_hiv_status, collection_date, pcr_level, pmtct_antenatal, pmtct_delivery, pmtct_postnatal, sample_id, results, test_date from poc_tables pt
        left join poc_results pr on pr.patient_id=pt.id
        where pr.uploaded=0";

        return $sql;
    }

    public function vl_data_view(Request $request)
    {

        $sql = $this->vl_data();
        $hpvsql = $this->hpv_upload();
        $eidsql = $this->poc_data_upload_view();
        $vl_records = DB::select($sql);
        $hpv_records = DB::select($hpvsql);
        $eid_records = DB::select($eidsql);
        return view('vl.data_upload')->with('vl_records', $vl_records)->with('hpv_records', $hpv_records)->with('eid_records', $eid_records);
    }

    public static function poc_vl_upload()
    {

        $sql = self::vl_data();

        $balance = ViralLoad::where('uploaded', '=', 0)->count();
        $response = 'No internet connection';
        // dd(\DB::select($sql));
        if (!$sock = @fsockopen('www.google.com', 80)) {
            return $balance . '-' . 'No internet connection';
        } else {
            try {
                $data = DB::select($sql);
                $url = config('constants.VL_CONNECT');
                $client = new \GuzzleHttp\Client(['base_uri' => $url, 'verify' => false]);
                $res = $client->post('/poc_viral_load_data', [
                    'json' => [
                        $data
                    ]
                ]);
                // $records = DB::select($sql);
                foreach ($data as $key => $r) {
                    $update_sql = "update viral_load_details set uploaded=1 where id=$r->id";
                    DB::update($update_sql);
                }
            } catch (QueryException $e) {
                Log::error($e);
                echo 'Failed';
            }
        }
        $balance = ViralLoad::where('uploaded', '=', 0)->count();
        return $balance;
    }

    public function edit($id)
    {
        $patient = ViralLoad::find($id);
        $active_tb = ['82' => 'Initiation Phase', '83' => 'Continuation Phase'];
        $referral_reasons = array('0' => 'Select---', 'Stock Out' => 'Stock Out', 'Equipment breakdown' => 'Equipment breakdown', 'Service not avalable at facility' => 'Service not avalable at facility');
        $facilities = ['Select facility'] + Facility::where('active', '=', 0)->pluck('name', 'id')->toArray();
        $duration_current_regimen = ['1' => '6 months - < 1yr', '2' => '1 - 2yrs', '3' => '2 - < 5yrs', '4' => '5yrs and above', '5' => 'Left Blank'];
        $care_approach = ['1' => 'FBIM', '2' => 'FBG', '3' => 'FTDR', '4' => 'CDDP', '5' => 'CCLAD'];
        $arv_adherence = config('vlpoc.Adherence');
        $who_stage = ['1' => 'I', '2' => 'II', '3' => 'III', '4' => 'IV'];
        $mother_pregnant = ['Y' => 'Yes', 'N' => 'No', 'L' => 'Left Blank'];
        $mother_breastfeeding = ['Y' => 'Yes', 'N' => 'No', 'L' => 'Left Blank'];
        $clinicians = ['Select clinician'] + Clinician::where('active', '=', 0)->pluck('name', 'id')->toArray();

        $now = new DateTime();
        $collectionDate = $now->format('Y-m-d H:i');
        $receptionDate = $now->format('Y-m-d H:i');

        $specimenTypes = ['select Specimen Type'] + SpecimenType::pluck('name', 'id')->toArray();
        $categories = ['Select Lab Section'] + TestCategory::pluck('name', 'id')->toArray();

        $regimens = config('vlpoc.Regimen');

        $treatment_line = config('vlpoc.Treatment');


        return view('vl.edit', compact(
            'facilities',
            'referral_reasons',
            'active_tb',
            'duration_current_regimen',
            'mother_pregnant',
            'who_stage',
            'mother_breastfeeding',
            'arv_adherence',
            'care_approach',
            'regimens',
            'treatment_line',
            'specimenTypes',
            'collectionDate',
            'receptionDate',
            'categories',
            'clinicians',
            'patient'
        ));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'initiation_date' => 'required',
            'duration_on_current_regimen'       => 'required',
            'who_stage'       => 'required',
            'arv_adherence'       => 'required',
            'care_approach'       => 'required',
            'indication'       => 'required',
            'regiment'       => 'required',
            'treatment_line' => 'required'

        ], [
            'initiation_date.required' => 'Initiation date required',
            'duration_on_current_regimen.required' => 'Duration on current regimen required',
            'who_stage.required' => 'Who stage required',
            'arv_adherence.required' => 'Adherence required',
            'care_approach.required' => 'Care Approach required',
            'indication.required' => 'Indication required',
            'regiment.required' => 'Regimen required',
            'treatment_line.required' => 'Treatment line required'
        ]);

        // Update
        $patient = ViralLoad::find($id);

        $patient->initiation_date   = $request->get('initiation_date');
        $patient->duration_on_current_regimen = $request->get('duration_on_current_regimen');
        $patient->who_stage   = $request->get('who_stage');
        $patient->arv_adherence    = $request->get('arv_adherence');
        $patient->care_approach  = $request->get('care_approach');
        $patient->indication    = $request->get('indication');
        $patient->regiment  = $request->get('regiment');
        $patient->treatment_line   = $request->get('treatment_line');
        $patient->poc_device   = $request->get('poc_device');
        $patient->uploaded   = 0;
        $patient->created_by = Auth::user()->name;
        $patient->save();

        // $update_sql = "update poc_results set uploaded=0 where patient_id=$patient->id";
        // DB::update($update_sql);
        // redirect
        return redirect()->route('viral.index')
            ->with('message', 'The patient details were successfully updated!')->with('activepatient', $patient->id);
    }

    public function reupload(Request $request)
    {
        $update_sql = "update viral_load_details set uploaded=2";
        DB::update($update_sql);
        $url = Session::get('SOURCE_URL');
        return redirect()->route('viral.index')->with('message', 'Success!');
    }
}
