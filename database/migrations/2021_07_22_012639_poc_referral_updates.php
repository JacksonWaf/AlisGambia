<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PocReferralUpdates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::update('ALTER TABLE poc_tables ADD referral_reason VARCHAR(60) NULL DEFAULT NULL AFTER facility_id');
        DB::update('ALTER TABLE poc_tables ADD testing_facility INT(10) NOT NULL AFTER referral_reason');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
