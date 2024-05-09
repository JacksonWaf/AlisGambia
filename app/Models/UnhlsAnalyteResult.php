<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\UnhlsTestResult;

class UnhlsAnalyteResult extends Model
{
    //
    protected $table = 'unhls_analyte_result';
    
     public function UnhlsTestResult() {
        return $this->belongsTo(UnhlsTestResult::class, 'test_id');
    }
}
