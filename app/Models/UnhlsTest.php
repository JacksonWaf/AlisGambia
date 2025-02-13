<?php

namespace  App\Models;

use DateTime;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Auth;

class UnhlsTest extends Model
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'unhls_tests';

	public $timestamps = false;

	/**
	 * Test status constants, same in the test_statuses table
	 */
	const SPECIMEN_NOT_RECEIVED = 1;
	const PENDING = 2;
	const COLLECTED = 10; //Marks the sample is successfully picked
	const STARTED = 3;
	const COMPLETED = 4;
	const VERIFIED = 5;
	// when a specimen is at the analytic stage, it's rejected only for that particular test
	const REJECTED = 6;
	// todo: consider how to consider it's pending, completed and verified statuses without confusion

	const APPROVED = 7; //The final phase of a test. This means that all tests for this patient's visit are ready to be officially handed over

	const REFERRED_IN = 8; //Changed the flags.
	const REFERRED_OUT = 9; //Changed the flags.


	/**
	 * Other constants
	 */
	const POSITIVE = '+';

	/**
	 * Visit relationship
	 */
	public function visit()
	{
		return $this->belongsTo('App\Models\UnhlsVisit', 'visit_id');
	}

	/**
	 *
	 *
	 */
	public function therapy()
	{
		return $this->belongsTo('App\Models\Therapy', 'visit_id');
	}



	/**
	 *
	 *
	 */
	public function clinician()
	{
		return $this->belongsTo('App\Models\Clinician', 'requested_by', 'id');
	}

	public function clinicians()
	{
		return $this->belongsTo('App\Models\Clinician', 'clinician_id', 'id');
	}

	public function getClinician()
	{
		return Clinician::find($this->clinician_id);
	}

	public static function getRequester($requester_identifier)
	{
		$requester_id = 0;
		$tester  = array(
			'name' => 'Unknown',
			'phone' => 'Unknown',
			'email' => 'Unknown'
		);
		$json_default_requester = json_encode($tester);
		if (!empty($requester_identifier)) {

			try {

				if (is_numeric($requester_identifier)) {
					$requester_id = intval($requester_identifier);
					$requester = Clinician::find($requester_id);

					return $requester;
				} else {
					$dummy_requester = Clinician::find(1);




					$dummy_requester->name = $requester_identifier;
					$dummy_requester->phone = 'Unknown';
					$dummy_requester->email = 'Unknown';

					return $dummy_requester;
				}
			} catch (Exception $e) {
				return $json_default_requester;
			}
		}

		return $json_default_requester;
	}
	public static function getRequestingOfficer($requester_identifier)
	{
		$requester_id = 0;
		$tester  = array(
			'name' => 'Unknown',
			'phone' => 'Unknown',
			'email' => 'Unknown'
		);
		$json_default_requester = json_encode($tester);
		if (!empty($requester_identifier)) {

			try {
				$requester_id = intval($requester_identifier);
				$requester = Clinician::find($requester_id);
				return $requester->name;
			} catch (Exception $e) {
				return $json_default_requester;
			}
		}

		return $json_default_requester;
	}
	/**
	 * Test Type relationship
	 */
	public function testType()
	{
		return $this->belongsTo('App\Models\TestType');
	}

	public function equipment()
	{
		return $this->belongsTo('App\Models\Instrument', 'instrument_id');
	}

	/**
	 * Specimen relationship
	 */
	public function specimen()
	{
		return $this->belongsTo('App\Models\UnhlsSpecimen');
	}

	/**
	 * Rejected specimen relationship
	 */
	public function analyticSpecimenRejections()
	{
		return $this->hasOne('App\Models\AnalyticSpecimenRejection', 'test_id');
	}

	/**
	 * Test Status relationship
	 */
	public function testStatus()
	{
		return $this->belongsTo('App\Models\TestStatus');
	}

	/**
	 * User (created) relationship
	 */
	public function createdBy()
	{
		return $this->belongsTo('App\Models\User', 'created_by', 'id')->withTrashed();
	}

	/**
	 * User (tested) relationship
	 */
	public function testedBy()
	{
		return $this->belongsTo('App\Models\User', 'tested_by', 'id')->withTrashed();
	}

	/**
	 * User (verified) relationship
	 */
	public function verifiedBy()
	{
		return $this->belongsTo('App\Models\User', 'verified_by', 'id')->withTrashed();
	}

	/**
	 * User (verified) relationship
	 */
	public function approvedBy()
	{
		return $this->belongsTo('App\Models\User', 'approved_by', 'id')->withTrashed();
	}


	public function instrumentUsed()
	{
		return $this->belongsTo('App\Models\Instrument', 'instrument_id', 'id');
	}
	/**
	 * Test Results relationship
	 */
	public function testResults()
	{
		return $this->hasMany('App\Models\UnhlsTestResult', 'test_id');
	}
	//Culture Observation relationship

	public function commentCulture()
	{
		return $this->hasMany('App\Models\CultureObservation', 'test_id');
	}

	/**
	 * Drug susceptibility relationship
	 */
	public function susceptibility()
	{
		return $this->hasMany('App\Models\DrugSusceptibility');
	}
	/***
	 * Requesting staff relationship
	 */
	/*public function staffDetails()
	{
		return $this->belongsTo('StaffDetail');
	}*/

	/**
	 * Check to see if test is external or internal
	 *
	 * @return boolean
	 */
	public function isExternal()
	{
		if ($this->external_id == null) {
			return false;
		} else
			return true;
	}

	/**
	 * Helper function: check if the Test status is SPECIMEN_NOT_RECEIVED
	 *
	 * @return boolean
	 */
	public function isNotReceived()
	{
		if ($this->test_status_id == UnhlsTest::SPECIMEN_NOT_RECEIVED)
			return true;
		else
			return false;
	}

	/**
	 * Helper function: check if the Test status is PENDING
	 *
	 * @return boolean
	 */
	public function isPending()
	{
		if ($this->test_status_id == UnhlsTest::PENDING)
			return true;
		else
			return false;
	}

	public function isSampleCollected()
	{
		if ($this->test_status_id == UnhlsTest::COLLECTED)
			return true;
		else
			return false;
	}
	/**
	 * Helper function: check if the Test status is STARTED
	 *
	 * @return boolean
	 */
	public function isStarted()
	{
		if ($this->test_status_id == UnhlsTest::STARTED)
			return true;
		else
			return false;
	}

	/**
	 * Helper function: check if the Test status is COMPLETED
	 *
	 * @return boolean
	 */
	public function isCompleted()
	{
		if ($this->test_status_id == UnhlsTest::COMPLETED)
			return true;
		else
			return false;
	}

	public function isCompletedVerifiedorApproved()
	{
		if ($this->test_status_id == UnhlsTest::COMPLETED || $this->test_status_id == UnhlsTest::VERIFIED || $this->test_status_id == UnhlsTest::APPROVED)
			return true;
		else
			return false;
	}
	/**
	 * Helper function: check if the Test status is VERIFIED
	 *
	 * @return boolean
	 */
	public function isVerified()
	{
		if ($this->test_status_id == UnhlsTest::VERIFIED)
			return true;
		else
			return false;
	}

	/**
	 * Helper function: check if the Test status is VERIFIED
	 *
	 * @return boolean
	 */
	public function isApproved()
	{
		if ($this->test_status_id == UnhlsTest::APPROVED)
			return true;
		else
			return false;
	}

	/**
	 * Helper function
	 *
	 * @return boolean
	 */
	public function hasSpecimen()
	{
		if ($this->test_status_id != UnhlsTest::SPECIMEN_NOT_RECEIVED)
			return true;
		else
			return false;
	}

	/**
	 * Check if specimen is rejected
	 *
	 * @return boolean
	 */
	public function specimenIsRejected()
	{
		if ($this->test_status_id == UnhlsTest::REJECTED) {
			return true;
		} else {
			return false;
		}
	}

	/**
	 * Function to get formatted specimenID's e.g PAR-3333
	 *
	 * @return string
	 */
	public function getSpecimenId()
	{
		if ($this->test_status_id == UnhlsTest::SPECIMEN_NOT_RECEIVED) {
			return '';
		} else {
			$testCategoryName = $this->testType->testCategory->name;
			return substr($testCategoryName, 0, 3) . '-' . $this->specimen->id;
		}
	}

	/**
	 * Wait Time: Time difference from test reception to start
	 */
	public function getWaitTime()
	{
		$createTime = new DateTime($this->time_created);
		$startTime = new DateTime($this->time_started);
		$interval = $createTime->diff($startTime);

		$waitTime = ($interval->days * 24 * 3600) + ($interval->h * 3600) + ($interval->i * 60) + ($interval->s);
		return $waitTime;
	}



	/**
	 * Turnaround Time: Time difference from test start to end (in seconds)
	 */
	public function getTurnaroundTime()
	{
		// use time time the specimen was received
		$timeReceived = new DateTime($this->specimen->time_accepted);
		$endTime = new DateTime($this->time_completed);
		$interval = $timeReceived->diff($endTime);

		$turnaroundTime = ($interval->days * 24 * 3600) + ($interval->h * 3600) + ($interval->i * 60) + ($interval->s);
		return $turnaroundTime;
	}

	/**
	 * Check if patient has paid or not
	 */
	public function isPaid()
	{
		$externalDump = ExternalDump::where('lab_no', '=', $this->external_id)->get()->first();

		//Not from the external system
		if (is_null($externalDump)) {
			return true;
		} elseif (
			$this->visit->patient->getAge('Y') >= 6
			&& $externalDump->order_stage == "op"
			&& $externalDump->receipt_number == ""
			&& $externalDump->receipt_type == ""
		)
			return false;
		else
			return true;
	}
	/**
	 * Turnaround Time as a formated string (Years Weeks Days Hours Minutes Seconds)
	 */
	public function getFormattedTurnaroundTime()
	{
		$tat = $this->getTurnaroundTime();
		$ftat = "";
		$tat_y = intval($tat / (365 * 24 * 60 * 60));
		$tat_w = intval(($tat - ($tat_y * (365 * 24 * 60 * 60))) / (7 * 24 * 60 * 60));
		$tat_d = intval(($tat - ($tat_y * (365 * 24 * 60 * 60)) - ($tat_w * (7 * 24 * 60 * 60))) / (24 * 60 * 60));
		$tat_h = intval(($tat - ($tat_y * (365 * 24 * 60 * 60)) - ($tat_w * (7 * 24 * 60 * 60)) - ($tat_d * (24 * 60 * 60))) / (60 * 60));
		$tat_m = intval(($tat - ($tat_y * (365 * 24 * 60 * 60)) - ($tat_w * (7 * 24 * 60 * 60)) - ($tat_d * (24 * 60 * 60)) - ($tat_h * (60 * 60))) / (60));
		$tat_s = intval(($tat - ($tat_y * (365 * 24 * 60 * 60)) - ($tat_w * (7 * 24 * 60 * 60)) - ($tat_d * (24 * 60 * 60)) - ($tat_h * (60 * 60)) - ($tat_m * (60))));
		if ($tat_y > 0) $ftat = $tat_y . " " . Lang::choice('messages.year', $tat_y) . " ";
		if ($tat_w > 0) $ftat .= $tat_w . " " . Lang::choice('messages.week', $tat_w) . " ";
		if ($tat_d > 0) $ftat .= $tat_d . " " . Lang::choice('messages.day', $tat_d) . " ";
		if ($tat_h > 0) $ftat .= $tat_h . " " . Lang::choice('messages.hour', $tat_h) . " ";
		if ($tat_m > 0) $ftat .= $tat_m . " " . Lang::choice('messages.minute', $tat_m) . " ";
		if ($tat_s > 0) $ftat .= $tat_s . " " . Lang::choice('messages.second', $tat_s);

		return $ftat;
	}

	/**
	 * Get results by page
	 *
	 * @param int $page
	 * @param int $limit
	 * @return StdClass
	 */
	public function getByPage($page = 1, $limit = 10)
	{
		$results = StdClass;
		$results->page = $page;
		$results->limit = $limit;
		$results->totalItems = 0;
		$results->items = array();

		$users = $this->model->skip($limit * ($page - 1))->take($limit)->get();

		$results->totalItems = $this->model->count();
		$results->items = $users->all();

		return $results;
	}

	/**
	 * Get tests infection data for infection report
	 * Shows counts for complete tests by measure, result, gender and age ranges
	 *
	 * @param string $startTime
	 * @param string $endTime
	 * @return Array[][]
	 */
	public static function getInfectionData($startTime, $endTime, $testCategory = 0)
	{

		$lowAgeBound = 5;
		$midAgeBound = 14;
		$facility_id =  Auth::user()->facility->id;
		$testCategoryWhereClause = "";
		if ($testCategory != 0) $testCategoryWhereClause = " AND tt.test_category_id = $testCategory";

		$data = DB::select(
			"SELECT * FROM (
				SELECT
					tt.name AS test_name,
					m.name AS measure_name,
					mr.alphanumeric AS result,
					s.gender,
					count(DISTINCT
						IF((tr.result = mr.alphanumeric AND p.gender=s.id
							AND floor(datediff(t.time_created,p.dob)/365.25)<$lowAgeBound),t.id,NULL)) AS RC_U_5,
					count(DISTINCT
						IF((tr.result = mr.alphanumeric AND p.gender=s.id
							AND floor(datediff(t.time_created,p.dob)/365.25)>=$lowAgeBound
							AND floor(datediff(t.time_created,p.dob)/365.25)<$midAgeBound),t.id,NULL)) AS RC_5_15,
					count(DISTINCT
						IF((tr.result = mr.alphanumeric AND p.gender=s.id
							AND floor(datediff(t.time_created,p.dob)/365.25)>=$midAgeBound),t.id,NULL)) AS RC_A_15
				FROM test_types tt
					INNER JOIN testtype_measures tm ON tt.id = tm.test_type_id
					INNER JOIN measures m ON tm.measure_id = m.id
					CROSS JOIN (SELECT 0 AS id, 'Male' AS gender UNION SELECT 1, 'Female') AS s
					INNER JOIN measure_ranges mr ON tm.measure_id = mr.measure_id
					LEFT JOIN unhls_tests AS t ON t.test_type_id = tt.id
					INNER JOIN unhls_visits v ON t.visit_id = v.id
					INNER JOIN unhls_patients p ON v.patient_id = p.id
					INNER JOIN unhls_test_results tr ON t.id = tr.test_id AND m.id = tr.measure_id
				WHERE (t.test_status_id=4 OR t.test_status_id=5 OR t.test_status_id=7) AND m.measure_type_id = 2
					AND t.time_created BETWEEN ? AND ? $testCategoryWhereClause
				GROUP BY tt.name, tt.id, m.name, m.id, mr.alphanumeric, s.id, s.gender) AS alpha
				UNION
				(
				SELECT
					tt.name test_name,
					mmr.name measure_name,
					mmr.result_alias result,
					s.gender,
					count(DISTINCT
						IF((mmr.result_alias = 'High' AND p.gender = s.id
							AND floor(datediff(t.time_created,p.dob)/365.25) < $lowAgeBound AND tr.result > mmr.range_upper
							AND floor(datediff(t.time_created,p.dob)/365.25) >= mmr.age_min
							AND floor(datediff(t.time_created,p.dob)/365.25) < mmr.age_max
							AND (p.gender = mmr.gender OR mmr.gender = 2)),t.id,
						IF((mmr.result_alias = 'Normal' AND p.gender = s.id
							AND floor(datediff(t.time_created,p.dob)/365.25) < $lowAgeBound AND tr.result >= mmr.range_lower
							AND tr.result <= mmr.range_upper AND floor(datediff(t.time_created,p.dob)/365.25) >= mmr.age_min
							AND floor(datediff(t.time_created,p.dob)/365.25) < mmr.age_max
							AND (p.gender = mmr.gender OR mmr.gender = 2)),t.id,
						IF((mmr.result_alias = 'Low' AND p.gender = s.id
							AND floor(datediff(t.time_created,p.dob)/365.25) < $lowAgeBound AND tr.result < mmr.range_lower
							AND floor(datediff(t.time_created,p.dob)/365.25) >= mmr.age_min
							AND floor(datediff(t.time_created,p.dob)/365.25) < mmr.age_max
							AND (p.gender = mmr.gender OR mmr.gender = 2)),t.id,NULL)))) RC_U_5,
					count(DISTINCT
						IF((mmr.result_alias = 'High' AND p.gender = s.id
							AND floor(datediff(t.time_created,p.dob)/365.25) >= $lowAgeBound
							AND floor(datediff(t.time_created,p.dob)/365.25) < $midAgeBound
							AND tr.result > mmr.range_upper AND floor(datediff(t.time_created,p.dob)/365.25) >= mmr.age_min
							AND floor(datediff(t.time_created,p.dob)/365.25) < mmr.age_max
							AND (p.gender = mmr.gender OR mmr.gender = 2)),t.id,
						IF((mmr.result_alias = 'Normal' AND p.gender = s.id
							AND floor(datediff(t.time_created,p.dob)/365.25) >= $lowAgeBound
							AND floor(datediff(t.time_created,p.dob)/365.25) < $midAgeBound
							AND tr.result >= mmr.range_lower AND tr.result <= mmr.range_upper
							AND floor(datediff(t.time_created,p.dob)/365.25) >= mmr.age_min
							AND floor(datediff(t.time_created,p.dob)/365.25) < mmr.age_max
							AND (p.gender = mmr.gender OR mmr.gender = 2)),t.id,
						IF((mmr.result_alias = 'Low' AND p.gender = s.id
							AND floor(datediff(t.time_created,p.dob)/365.25) >= $lowAgeBound
							AND floor(datediff(t.time_created,p.dob)/365.25) < $midAgeBound
							AND tr.result < mmr.range_lower
							AND floor(datediff(t.time_created,p.dob)/365.25) >= mmr.age_min
							AND floor(datediff(t.time_created,p.dob)/365.25) < mmr.age_max
							AND (p.gender = mmr.gender OR mmr.gender = 2)),t.id,NULL)))) RC_5_15,
					count(DISTINCT
						IF((mmr.result_alias = 'High' AND p.gender = s.id
							AND floor(datediff(t.time_created,p.dob)/365.25) >= $midAgeBound
							AND tr.result > mmr.range_upper
							AND floor(datediff(t.time_created,p.dob)/365.25) >= mmr.age_min
							AND floor(datediff(t.time_created,p.dob)/365.25) < mmr.age_max
							AND (p.gender = mmr.gender OR mmr.gender = 2)),t.id,
						IF((mmr.result_alias = 'Normal' AND p.gender = s.id
							AND floor(datediff(t.time_created,p.dob)/365.25) >= $midAgeBound
							AND tr.result >= mmr.range_lower AND tr.result <= mmr.range_upper
							 AND floor(datediff(t.time_created,p.dob)/365.25) >= mmr.age_min
							 AND floor(datediff(t.time_created,p.dob)/365.25) < mmr.age_max
							 AND (p.gender = mmr.gender OR mmr.gender = 2)),t.id,
						IF((mmr.result_alias = 'Low' AND p.gender = s.id
							AND floor(datediff(t.time_created,p.dob)/365.25) >= $midAgeBound
							AND tr.result < mmr.range_lower
							AND floor(datediff(t.time_created,p.dob)/365.25) >= mmr.age_min
							AND floor(datediff(t.time_created,p.dob)/365.25) < mmr.age_max
							AND (p.gender = mmr.gender OR mmr.gender = 2)),t.id,NULL)))) RC_A_15
				FROM test_types tt
					INNER JOIN testtype_measures tm ON tt.id = tm.test_type_id
					CROSS JOIN (SELECT 0 AS id, 'Male' AS gender UNION SELECT 1, 'Female') AS s
					INNER JOIN (
						SELECT m.name, m.measure_type_id, mr.*, i.*
						FROM measures m INNER JOIN measure_ranges mr ON m.id = mr.measure_id
						CROSS JOIN (SELECT 'High' AS result_alias UNION SELECT 'Normal' UNION SELECT 'Low') AS i
						WHERE m.measure_type_id = 1) mmr ON tm.measure_id = mmr.measure_id
					LEFT JOIN unhls_tests AS t ON t.test_type_id = tt.id
					INNER JOIN unhls_visits v ON t.visit_id = v.id
					INNER JOIN unhls_patients p ON v.patient_id = p.id
					INNER JOIN unhls_test_results tr ON t.id = tr.test_id AND tm.measure_id = tr.measure_id
				WHERE (t.test_status_id=4 OR t.test_status_id=5 OR t.test_status_id=7) AND mmr.measure_type_id = 1
					AND t.time_created BETWEEN ? AND ? $testCategoryWhereClause
				GROUP BY tt.name, tt.id, tm.measure_id, mmr.result_alias, s.id, s.gender)
			ORDER BY test_name, measure_name, result, gender",
			array($startTime, $endTime, $startTime, $endTime)
		);

		return $data;
	}

	/**
	 * Search for tests meeting the given criteria
	 *
	 * @param String $searchString
	 * @param String $testStatusId
	 * @param String $dateFrom
	 * @param String $dateTo
	 * @return Collection
	 */
	public static function search($searchString = '', $testStatusId = 0, $testCategoryId = 0, $dateFrom = NULL, $dateTo = NULL)
	{

		$tests = UnhlsTest::with('visit', 'visit.patient', 'testType', 'testType.testCategory', 'specimen', 'testStatus', 'testStatus.testPhase')
			->where(function ($q) use ($searchString) {

				$q->whereHas('visit', function ($q) use ($searchString) {
					$q->whereHas('patient', function ($q)  use ($searchString) {
						$q->where(function ($q) use ($searchString) {
							$q->where('external_patient_number', '=', $searchString)
								->orWhere('patient_number', '=', $searchString)
								->orWhere('name', 'like', '%' . $searchString . '%')
								->orWhere('ulin', 'like', '%' . $searchString . '%');
						});
					});
				})
					->orWhereHas('testType', function ($q) use ($searchString) {
						$q->where('name', 'like', '%' . $searchString . '%'); //Search by test type
					})
					->orWhereHas('specimen', function ($q) use ($searchString) {
						$q->where('id', '=', $searchString); //Search by specimen number
					})
					->orWhereHas('visit',  function ($q) use ($searchString) {
						$q->where(function ($q) use ($searchString) {
							$q->where('visit_number', '=', $searchString) //Search by visit number
								->orWhere('id', '=', $searchString);
						});
					});
			});

		if ($testStatusId > 0) {
			$tests = $tests->where(function ($q) use ($testStatusId) {
				$q->whereHas('testStatus', function ($q) use ($testStatusId) {
					$q->where('id', '=', $testStatusId); //Filter by test status
				});
			});
		}

		if ($testCategoryId > 0) {
			// $condition = $condition." AND tt.test_category_id = ".$testCategoryId;
			$tests = $tests->where(function ($q) use ($testCategoryId) {
				$q->whereHas('testType.testCategory', function ($q) use ($testCategoryId) {
					$q->where('id', '=', $testCategoryId); //Filter by test status
				});
			});
		}

		if ($dateFrom || $dateTo) {
			$tests = $tests->where(function ($q) use ($dateFrom, $dateTo) {
				if ($dateFrom) $q->where('time_created', '>=', $dateFrom);

				if ($dateTo) {
					$dateTo = $dateTo . ' 23:59:59';
					$q->where('time_created', '<=', $dateTo);
				}
			});
		}

		$tests = $tests->orderBy('time_created', 'DESC');

		return $tests;
	}

	/**
	 * Search for tests meeting the given criteria
	 *
	 * @param String $id: visit ID
	 * @return Collection
	 */
	public static function searchByVisit($id = NULL)
	{

		$tests = UnhlsTest::with(
			'visit',
			'visit.patient',
			'testType',
			'specimen',
			'testStatus',
			'testStatus.testPhase'
		)
			->WhereHas('visit',  function ($q) use ($id) {
				$q->where(function ($q) use ($id) {
					$q->where('id', '=', $id);
				});
			});


		$tests = $tests->orderBy('time_created', 'DESC');

		return $tests;
	}



	/**
	 * Search for pending, started, completed and verified tests meeting the given criteria
	 *
	 * @param String $searchString
	 * @param String $testStatusId
	 * @param String $dateFrom
	 * @param String $dateTo
	 * @return \Illuminate\Database\Eloquent\Builder
	 */
	// todo: =this should include verified tests

	public static function searchStatus($testStatusId)
	{
		$tests = UnhlsTest::where('test_status_id', '=', $testStatusId);

		$tests = $tests->orderBy('time_created', 'DESC');

		return $tests;
	}


	/**
	 * Get the Surveillance Data
	 *
	 * @param $from
	 * @param $to
	 * @return db resultset
	 */
	public static function getSurveillanceData($from, $to)
	{
		$diseases = Disease::all();

		$surveillances = array();

		$testTypeIds = array();

		//Foreach disease create a query string for the different test types
		foreach (Disease::all() as $disease) {
			$count = 0;
			$testTypeQuery = '';
			//For a single disease creating a query string for it's different test types
			foreach ($disease->reportDiseases as $reportDisease) {
				if ($count == 0) {
					$testTypeQuery = 't.test_type_id=' . $reportDisease->test_type_id;
				} else {
					$testTypeQuery = $testTypeQuery . ' or t.test_type_id=' . $reportDisease->test_type_id;
				}
				$testTypeIds[] = $reportDisease->test_type_id;
				$count++;
			}

			//For a single disease holding the test types query string and disease id
			if (!empty($testTypeQuery)) {
				$surveillances[$disease->id]['test_type_id'] = $testTypeQuery;
				$surveillances[$disease->id]['disease_id'] = $disease->id;
			}
		}

		//Getting an array of measure ids from an array of test types
		$measureIds = UnhlsTest::getMeasureIdsByTestTypeIds($testTypeIds);

		//Getting an array of positive interpretations from an array of measure ids
		$positiveRanges = UnhlsTest::getPositiveRangesByMeasureIds($measureIds);

		$idCount = 0;
		$positiveRangesQuery = '';

		//Formating the positive ranges into part of the the query string
		foreach ($positiveRanges as $positiveRange) {
			if ($idCount == 0) {
				$positiveRangesQuery = "tr.result='" . $positiveRange . "'";
			} else {
				$positiveRangesQuery = $positiveRangesQuery . " or tr.result='" . $positiveRange . "'";
			}
			$idCount++;
		}

		// Query only if there are entries for surveillance
		if (!empty($surveillances) && !empty($positiveRangesQuery)) {
			//Select surveillance data for the defined diseases
			$query = "SELECT ";
			foreach ($surveillances as $surveillance) {
				$query = $query .
					"COUNT(DISTINCT if((" . $surveillance['test_type_id'] . "),t.id,NULL)) as " . $surveillance['disease_id'] . "_total," .
					"COUNT(DISTINCT if(((" . $surveillance['test_type_id'] .
					") and DATE_SUB(NOW(), INTERVAL 5 YEAR)<p.dob),t.id,NULL)) as " . $surveillance['disease_id'] . "_less_five_total, " .
					"COUNT(DISTINCT if(((" . $surveillance['test_type_id'] . ") and (" . $positiveRangesQuery .
					")),t.id,NULL)) as " . $surveillance['disease_id'] . "_positive," .
					"COUNT(DISTINCT if(((" . $surveillance['test_type_id'] . ") and (" . $positiveRangesQuery .
					") and DATE_SUB(NOW(), INTERVAL 5 YEAR)<p.dob),t.id,NULL)) as " . $surveillance['disease_id'] .
					"_less_five_positive";

				//Add no comma if it is the last variable in the array
				if ($surveillance == end($surveillances)) {
					$query = $query . " ";
				} else {
					$query = $query . ", ";
				}
			}

			$query = $query . " FROM unhls_tests t " .
				"INNER JOIN unhls_test_results tr ON t.id=tr.test_id " .
				"JOIN unhls_visits v ON v.id=t.visit_id " .
				"JOIN unhls_patients p ON v.patient_id=p.id ";
			if ($from) {
				$query = $query . "WHERE (time_created BETWEEN '" . $from . "' AND '" . $to . "')";
			}

			$data = DB::select($query);
			$data = json_decode(json_encode($data), true);
			return $data[0];
		} else {
			return null;
		}
	}

	/**
	 * @param  Measure IDs $measureIds array()
	 * @return Ranges whose interpretation is positive $positiveRanges array()
	 */
	public static function getPositiveRangesByMeasureIds($measureIds)
	{
		$positiveRanges = array();

		foreach ($measureIds as $measureId) {

			$measure = Measure::find($measureId);

			$measureRanges = $measure->measureRanges;

			foreach ($measureRanges as $measureRange) {

				if ($measureRange->interpretation == UnhlsTest::POSITIVE) {
					$positiveRanges[] = $measureRange->alphanumeric;
				}
			}
		}

		return $positiveRanges;
	}

	/**
	 * @param  Test Type IDs $testTypeIds array()
	 * @return Measure IDs $measureIds array()
	 */
	public static function getMeasureIdsByTestTypeIds($testTypeIds)
	{
		$measureIds = array();
		foreach ($testTypeIds as $testTypeId) {

			$testType = TestType::find($testTypeId);
			$measureIds = array_merge($measureIds, $testType->measures->pluck('id')->toArray());
		}
		return $measureIds;
	}
	/**
	 * External dump relationship
	 */
	public function external()
	{
		return ExternalDump::where('lab_no', '=', $this->external_id)->get()->first();
	}

	/**
	 * Isolated Organism relationship
	 */
	public function isolatedOrganisms()
	{
		return $this->hasMany('App\Models\IsolatedOrganism', 'test_id');
	}

	/**
	 * gram stain relationship
	 */
	public function gramStainResults()
	{
		return $this->hasMany('App\Models\GramStainResult', 'test_id', 'id');
	}

	/**
	 * Result Interpretation of HIV measures - Screening, Determine and Unigold
	 */
	//TODO, make this more robust/flexible...this is short term fix
	public function interpreteHIVResults()
	{
		$result = '';
		if ($this->testType->name == 'HIV') {
			$measures = array();
			$measuresResult = $this->testResults;
			foreach ($measuresResult as $measureResult) {
				$measures[] = $measureResult;
			}

			$determine = $measures['0']['result'];
			$statpak = $measures['1']['result'];
			$unigold = $measures['2']['result'];

			if ($determine == 'Non-Reactive' && $statpak == 'Non-Reactive') {
				$result = 'Negative';
			} elseif ($determine == 'Reactive' && $statpak == 'Reactive') {
				$result = 'Positive';
			} elseif ($statpak == 'Reactive' && $unigold == 'Reactive') {
				$result = 'Positive';
			} elseif ($statpak == 'Reactive' && $unigold == 'Non-Reactive') {
				$result = 'Negative';
			} elseif ($determine == 'Non-Reactive' && $unigold = 'Non-Reactive') {
				$result = 'Negative';
			} elseif ($statpak == 'Non-Reactive' && $unigold = 'Non-Reactive') {
				$result = 'Negative';
			}
		}
		return $result;
	}

	public function isHIV()
	{
		return ($this->testType->name == 'HIV') ? true : false;
	}

	public static function upload()
	{
		$sql = "select hp.facility_id, hp.id as result_id, dob, hiv_status, p.gender, art_number, clinic_id, screened_status, nok_name,nok_relationship, u.name as created_by, previous_diagnostic_method, other_method, previous_screening_result, specimen_type, previous_screening_date, sample_collection_date, date_received_by_hw, date_received_by_lab, hp.updated_at as test_date, genotype_16, genotype_18,genotype_hr from hpv_patient hp
        join unhls_patients p on hp.patient_id=p.id
        join users u on hp.created_by = u.id
         where hp.genotype_16 != '' && hp.uploaded=0 LIMIT 50";

		$balance = HPVPatient::where('uploaded', '=', 0)->count();
		$response = 'No internet connection';

		// dd(\DB::select($sql));
		if (!$sock = @fsockopen('www.google.com', 80)) {
			return $balance . '-' . 'No internet connection';
		} else {
			$data = DB::select($sql);

			$url = config('constants.HPV_CONNECT');
			$client = new \GuzzleHttp\Client(['base_uri' => $url, 'verify' => false]);

			$res = $client->post('/alis_api', [
				'json' => [
					$data
				]

			]);
			// $records = DB::select($sql);
			foreach ($data as $key => $r) {
				$update_sql = "update hpv_patient set uploaded=1 where id=$r->result_id";
				DB::update($update_sql);
			}

			$balance = HPVPatient::where('uploaded', '=', 0)->count();

			return $balance;
		}
	}

	public static function machinesaveHpvresults()
	{
		$ids = [];
		$sql = "SELECT utr.test_id, GROUP_CONCAT(utr.result ORDER BY utr.id ASC SEPARATOR ',') AS Results FROM unhls_test_results utr
            join hpv_patient hp on(utr.test_id = hp.test_id)
            join unhls_tests ut on(utr.test_id = ut.id)
            join test_types tt on(ut.test_type_id = tt.id)
            WHERE tt.name = 'HPV' AND hp.genotype_16 IS NULL GROUP BY utr.test_id";
		$genotypes = DB::select($sql);
		foreach ($genotypes as $key => $result) {
			$genotypes_result = $result->Results;
			$tab = ",";
			$exp = explode($tab, $genotypes_result);
			$genotype_16 = isset($exp[0]) ? $exp[0] : null;
			$genotype_18 = isset($exp[1]) ? $exp[1] : null;
			$genotype_hr = isset($exp[2]) ? $exp[2] : null;
			$ids['test_id'] = $result->test_id;
			$ids['genotype_16'] = $genotype_16;
			$ids['genotype_18'] = $genotype_18;
			$ids['genotype_hr'] = $genotype_hr;
			// dd($ids['genotype_hr']);
			$sample = HPVPatient::updateOrCreate(['test_id' => $result->test_id], $ids);
		}
	}

	public static function testcounts()
	{
		$totals = DB::table('unhls_tests')
			->selectRaw('count(*) as total')
			->selectRaw("count(case when test_status_id = '2' then 1 end) as pendingtest")
			->selectRaw("count(case when test_status_id = '3' then 1 end) as startedtest")
			->selectRaw("count(case when test_status_id = '4' then 1 end) as completedtest")
			->selectRaw("count(case when test_status_id = '5' then 1 end) as verifiedtest")
			->selectRaw("count(case when test_status_id = '7' then 1 end) as approvedtest")->leftjoin('unhls_visits', 'unhls_visits.id', '=', 'unhls_tests.visit_id')->leftjoin('unhls_patients', 'unhls_patients.id', '=', 'unhls_visits.patient_id')->where('unhls_patients.hubid', Auth::user()->facility->id)
			->first();

		return $totals;
	}

	public static function pendingtestcounts()
	{
		$totals = DB::table('unhls_tests')
			->selectRaw("count(case when test_status_id = '2' then 1 end) as pendingtest")->leftjoin('unhls_visits', 'unhls_visits.id', '=', 'unhls_tests.visit_id')->leftjoin('unhls_patients', 'unhls_patients.id', '=', 'unhls_visits.patient_id')->where('unhls_patients.hubid', Auth::user()->facility->id)
			->first();

		return $totals->pendingtest;
	}

	public static function startedtestcounts()
	{
		$totals = DB::table('unhls_tests')
			->selectRaw("count(case when test_status_id = '3' then 1 end) as startedtest")->leftjoin('unhls_visits', 'unhls_visits.id', '=', 'unhls_tests.visit_id')->leftjoin('unhls_patients', 'unhls_patients.id', '=', 'unhls_visits.patient_id')->where('unhls_patients.hubid', Auth::user()->facility->id)
			->first();

		return $totals->startedtest;
	}

	public static function completedtestcounts()
	{
		$totals = DB::table('unhls_tests')
			->selectRaw("count(case when test_status_id = '4' then 1 end) as completedtest")->leftjoin('unhls_visits', 'unhls_visits.id', '=', 'unhls_tests.visit_id')->leftjoin('unhls_patients', 'unhls_patients.id', '=', 'unhls_visits.patient_id')->where('unhls_patients.hubid', Auth::user()->facility->id)
			->first();

		return $totals->completedtest;
	}

	public static function verifiedtestcounts()
	{
		$totals = DB::table('unhls_tests')
			->selectRaw("count(case when test_status_id = '5' then 1 end) as verifiedtest")->leftjoin('unhls_visits', 'unhls_visits.id', '=', 'unhls_tests.visit_id')->leftjoin('unhls_patients', 'unhls_patients.id', '=', 'unhls_visits.patient_id')->where('unhls_patients.hubid', Auth::user()->facility->id)
			->first();

		return $totals->verifiedtest;
	}

	public static function approvedtestcounts()
	{
		$totals = DB::table('unhls_tests')
			->selectRaw("count(case when test_status_id = '7' then 1 end) as approvedtest")->leftjoin('unhls_visits', 'unhls_visits.id', '=', 'unhls_tests.visit_id')->leftjoin('unhls_patients', 'unhls_patients.id', '=', 'unhls_visits.patient_id')->where('unhls_patients.hubid', Auth::user()->facility->id)
			->first();

		return $totals->approvedtest;
	}
}
