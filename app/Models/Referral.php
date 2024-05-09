<?php

namespace  App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Referral extends Model
{

    protected $table = 'referrals';
    public $timestamps = true;

    const REFERRED_IN = 0;
    const REFERRED_OUT = 1;

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function facility()
    {
        return $this->belongsTo('App\Models\Facility');
    }

    public function getFacilityName(){
        $facilityName = DB::table('facilities')
                        ->where('id', '=', $this->facility_id)
                        ->get();
        $facilityName = json_decode(json_encode ($facilityName), true);

        return $facilityName[0]['name'];

    }



}
