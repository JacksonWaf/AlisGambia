<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViralLoadDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viral_load_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('facility_id')->nullable();
            $table->integer('patient_id');
            $table->string('referral_reason')->nullable();
            $table->integer('site_id')->nullable();
            $table->string('form_number');
            $table->date('initiation_date')->nullable();
            $table->string('duration_on_current_regimen')->nullable();
            $table->string('who_stage')->nullable();
            $table->string('anc')->nullable();
            $table->string('mother_pregnant')->nullable();
            $table->string('mother_breastfeeding')->nullable();
            $table->string('active_tb')->nullable();
            $table->string('tb_phase')->nullable();
            $table->string('arv_adherence')->nullable();
            $table->string('care_approach')->nullable();
            $table->string('indication')->nullable();
            $table->string('regiment')->nullable();
            $table->string('treatment_line')->nullable();
            $table->integer('uploaded')->default(0);
            $table->date('test_date');
            $table->integer('created_by')->nullable();
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
        Schema::dropIfExists('viral_load_details');
    }
}
