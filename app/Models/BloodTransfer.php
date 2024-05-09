<?php

namespace  App\Models;
use DateTime;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Lang;

class BloodTransfer extends Model
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'blood_transfer';

	/**
	 * blood bank relationship
	 */
	public function bloodBank()
    {
        return $this->belongsTo('App\Models\BloodBank', 'blood_bank_id');
    }

    /**
	 * user relationship
	 */
	public function recordedBy()
	{
		return $this->belongsTo('App\Models\User', 'created_by')->withTrashed();
	}


}