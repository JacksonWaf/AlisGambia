<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ViralLoadPoc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poc_vl_data', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('facility_id');
            $table->integer('testing_facility');
            $table->string('referral_reason')->nullable();
            $table->string('art_no');
            $table->string('other_id')->nullable();
            $table->string('dhis2_uid')->nullable();
            $table->string('sample_id')->nullable();
            $table->string('form_number')->nullable();
            $table->date('dob')->nullable();
            $table->string('gender');
            $table->date('initiation_date')->nullable();
            $table->integer('treatment_duration')->nullable();
            $table->integer('who_stage')->nullable();
            $table->string('anc')->nullable();
            $table->string('is_pregnant')->nullable();
            $table->string('is_breastfeeding')->nullable();
            $table->string('patient_has_tb')->nullable();
            $table->integer('tb_phase')->nullable();
            $table->integer('arv_adherence')->nullable();
            $table->integer('care_approach')->nullable();
            $table->string('indication_for_vltesting')->nullable();
            $table->integer('current_regimen')->nullable();
            $table->integer('treatment_line')->nullable();
            $table->string('result');
            $table->string('poc_device');
            $table->date('sample_collection_date');
            $table->date('test_date');
            $table->string('synchronized_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('poc_vl_data');
    }
}
