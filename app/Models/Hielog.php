<?php

namespace  App\Models;


use Illuminate\Database\Eloquent\Model;

class Hielog extends Model
{
    const CREATED_AT = 'requesttime';
    const UPDATED_AT = 'responsetime';
    const FAIL = 500;
    const SUCCESS = 200;

    /**
     * Helper function: check if the order status is Successful
     *
     * @return boolean
     */
    public function isSuccessful() {
        if ($this->statuscode == Hielog::SUCCESS)
            return true;
        else
            return false;
    }
    
    /**
     * Helper function: check if the order status is Successful
     *
     * @return boolean
     */
    public function isFailed() {
        if ($this->statuscode == Hielog::FAIL)
            return true;
        else
            return false;
    }
}
