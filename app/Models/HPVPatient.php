<?php

namespace App\Models;
use DateTime;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Lang;

class HPVPatient extends Model
{
    protected $table = 'hpv_patient';
    protected $fillable = ['genotype_16', 'genotype_18','genotype_hr'];
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

}
