<?php

namespace  App\Models;

use DateTime;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ViralLoad extends Model
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'viral_load_details';

	public $timestamps = false;

	public function VlPatient()
	{
	  return $this->belongsTo('App\Models\UnhlsPatient','patient_id');
	}
}
