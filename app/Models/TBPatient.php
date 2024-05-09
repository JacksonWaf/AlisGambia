<?php

namespace  App\Models;
use DateTime;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Lang;

class TBPatient extends Model
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'tb_patient';

	/**
	 * Visit relationship
	 */
	public function visit()
    {
        return $this->hasMany('UnhlsVisit', 'visit_id');
    }

    /**
	 * Patient relationship
	 */
	public function patient()
	{
		return $this->belongsTo('UnhlsPatient', 'patient_id');
	}

	/**
	 * Test relationship
	 */
	// public function TBtests()
 //    {
 //        return $this->hasMany('UnhlsTest', 'visit_id','visit_id');
 //    }

}