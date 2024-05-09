<?php

namespace  App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class POC extends Model
{
    const MALE = 0;
    const FEMALE = 1;
    const BOTH = 2;
    const UNKNOWN = 3;
    /**
     * Enabling soft deletes for patient details.
     *App\Models\
     */
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'poc_tables';


    public function poc_result()
    {
        return $this->hasOne('App\Models\POCResult', 'patient_id');
    }

    /**
     * Visits relationship
     */


    public function visits()
    {
        return $this->hasMany('App\Models\UnhlsVisit');
    }

    /**
     * Patient Age
     *
     * @param optional String - format [Y|YY|YYMM]
     * @param optional Timestamp - age as at this date
     * @return String x years y months
     */
    public function getAge($format = "YYMM", $at = NULL)
    {
        if (!$at) $at = new DateTime('now');

        $dateOfBirth = new DateTime($this->dob);
        $interval = $dateOfBirth->diff($at);

        $age = "";

        switch ($format) {
            case 'Y':
                $age = $interval->y;
                break;
            case 'YY':
                $age = $interval->y . " years ";
                break;
            default:
                if ($interval->y == 0) {
                    $age = $interval->format('%a days');
                } elseif ($interval->y > 0 && $interval->y <= 2) {
                    $age = $interval->format('%m') + 12 * $interval->format('%y') . " months";
                } else {
                    $age = $interval->y . " years ";
                }

                break;
        }

        return $age;
    }

    /**
     * Get patient's gender
     *
     * @param optional boolean $shortForm - return abbreviation (M/F). Default true
     * @return String gender
     */
    public function getGender($shortForm = true)
    {
        if ($this->gender == UnhlsPatient::MALE) {
            return $shortForm ? "M" : trans("messages.male");
        } else if ($this->gender == UnhlsPatient::FEMALE) {
            return $shortForm ? "F" : trans("messages.female");
        }
    }

    /**
     * Search for patients meeting given criteria
     *
     * @param String $searchText
     * @return Collection
     */
    public static function search($searchText)
    {
        return UnhlsPatient::where('patient_number', '=', $searchText)
            ->orWhere('name', 'LIKE', '%' . $searchText . '%')
            ->orWhere('external_patient_number', '=', $searchText);
    }
    /**
     * Get patients facility Id Number
     *
     */
    public function getFacilityCode()
    {
        $facilityCode = Auth::user()->facility->code;
        return $facilityCode;
    }

    /**
     * Get patients Unique Identification Number (ULIN)
     *
     * @return string
     */
    public function getUlin()
    {

        $registrationDate = new DateTime();
        $year = $registrationDate->format('y');
        $Month = $registrationDate->format('m');
        $Day = $registrationDate->format('d');
        $autoNum = DB::table('uuids')->max('id') + 1;
        $name = preg_split("/\s+/", trim($this->infant_name));
        $initials = null;

        foreach ($name as $n) {
            $initials .= $n[0];
        }
        return $autoNum . '/' . $Month . '/' . $year . '/' . $initials;
    }

    public static function poc_upload()
    {

        $sql = "select facility_id, referral_reason, testing_facility, pr.id as infant_id, infant_name, exp_no, gender, age, caretaker_number, admission_date, breastfeeding_status, entry_point, mother_name, provisional_diagnosis, infant_pmtctarv, mother_hiv_status, collection_date, pcr_level, pmtct_antenatal, pmtct_delivery, pmtct_postnatal, sample_id, results, test_date, created_by from poc_tables pt
        inner join poc_results pr on pr.patient_id=pt.id
        where pr.uploaded=0 LIMIT 30";
        $balance = POCResult::where('uploaded', '=', 0)->count();
        $response = 'No internet connection';

        // dd(\DB::select($sql));
        if (!$sock = @fsockopen('www.google.com', 80)) {
            return $balance . '-' . 'No internet connection';
        } else {
            $url = config('constants.EID_CONNECT');
            $file_headers = @get_headers($url);
            // dd($file_headers);
            if (!$file_headers || $file_headers[0] == 'HTTP/1.1 404 Not Found') {
                return $balance . '-' . 'Failed connection';
            } else {
                try {
                    $data = DB::select($sql);

                    $client = new \GuzzleHttp\Client(['base_uri' => $url, 'verify' => false]);

                    $res = $client->post('/poc_data_pull', [
                        'json' => [
                            $data
                        ]
                    ]);
                    // $records = DB::select($sql);
                    foreach ($data as $key => $r) {
                        $update_sql = "update poc_results set uploaded=1 where id=$r->infant_id";
                        DB::update($update_sql);
                    }
                } catch (QueryException $e) {
                    Log::error($e);
                    echo 'Failed';
                }
                $balance = POCResult::where('uploaded', '=', 0)->count();
                return $balance;
            }
        }
    }
}
