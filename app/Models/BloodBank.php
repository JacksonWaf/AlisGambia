<?php

namespace  App\Models;
use DateTime;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Lang;

class BloodBank extends Model
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'blood_bank';

	/**
	 * statuses
	 */
	const AVAILABLE = 0;
	const USED = 1;
	const TRANSFERED = 2;

	/**
	 * blood Tranfusion relationship
	 */
	public function bloodTransfused()
    {
        return $this->hasOne('App\Models\BloodTransfusion','blood_bank_id');
    }

}