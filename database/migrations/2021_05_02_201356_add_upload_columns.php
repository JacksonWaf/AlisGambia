<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUploadColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::update('ALTER TABLE unhls_facilities ADD dhis2_name VARCHAR(60) NULL AFTER name');
        // DB::update('UPDATE `unhls_facilities` SET `dhis2_name` = 'Entebbe HOSPITAL' WHERE `unhls_facilities`.`id` = 1');
        DB::update('ALTER TABLE unhls_test_results ADD uploaded INT(3) NOT NULL DEFAULT 0 AFTER time_revised');
        DB::update('ALTER TABLE poc_results ADD uploaded INT(3) NOT NULL DEFAULT 0 AFTER updated_at');
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
