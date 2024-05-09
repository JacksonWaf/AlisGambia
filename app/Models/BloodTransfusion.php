<?php

namespace  App\Models;
use DateTime;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Lang;

class BloodTransfusion extends Model
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'patient_transfused';

	/**
	 * Visit relationship
	 */
	public function visit()
    {
        return $this->hasMany('App\Models\UnhlsVisit', 'visit_id');
    }

    /**
	 * Patient relationship
	 */
	public function patient()
	{
		return $this->belongsTo('App\Models\UnhlsPatient', 'patient_id');
	}

	/**
	 * blood bank relationship
	 */
	public function bloodBank()
    {
        return $this->belongsTo('App\Models\BloodBank', 'blood_bank_id');
    }

}