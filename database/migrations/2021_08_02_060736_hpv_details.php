<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class HpvDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hpv_patient', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('patient_id')->nullable();
            $table->integer('visit_id')->nullable();
            $table->integer('test_id')->nullable();
            $table->integer('facility_id')->nullable();
            $table->integer('hiv_status')->default(1)->nullable();
            $table->string('art_number')->nullable();
            $table->string('clinic_id')->nullable();
            $table->string('nok_name')->nullable();
            $table->string('nok_relationship')->nullable();
            $table->string('nok_mobile')->nullable();
            $table->string('screened_status')->nullable();
            $table->string('previous_diagnostic_method')->nullable();
            $table->string('other_method')->nullable();
            $table->string('previous_screening_result')->nullable();
            $table->string('specimen_type')->nullable();
            $table->date('previous_screening_date')->nullable();
            $table->date('sample_collection_date')->nullable();
            $table->date('date_received_by_hw')->nullable();
            $table->date('date_received_by_lab')->nullable();
            $table->string('result')->nullable();
            $table->string('genotype_16')->nullable();
            $table->string('genotype_18')->nullable();
            $table->string('genotype_hr')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('uploaded')->default(0);
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
        Schema::drop('hpv_patient');
    }
}
