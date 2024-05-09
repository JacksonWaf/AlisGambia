<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BloodTransfusionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('blood_bank', function (Blueprint $table) {
            $table->increments('id');
            $table->string('unit_no');
            $table->string('group');
            $table->string('rhs')->nullable();
            $table->string('blood_component')->nullable();
            $table->integer('amount')->nullable();
            $table->date('donation_date')->nullable();
            $table->date('expiry_date')->nullable();
            $table->integer('status')->default(0);
            $table->integer('created_by');
            $table->integer('edited_by')->nullable();
            $table->timestamps();
        });
       Schema::create('patient_transfused', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('blood_bank_id')->nullable();
            $table->integer('patient_id');
            $table->integer('visit_id')->nullable();
            $table->string('reason');
            $table->string('other_reasons')->nullable();
            $table->string('transfusion_history')->nullable();
            $table->date('date')->nullable();
            $table->string('pregnancies')->nullable();
            $table->string('still_birth')->nullable();
            $table->string('jaundiced_babies')->nullable();
            $table->string('type')->nullable();
            $table->integer('units_requested')->nullable();
            $table->integer('units_given')->nullable();
            $table->integer('created_by')->nullable();
            $table->timestamps();
        });
       Schema::create('blood_transfer', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('blood_bank_id');
            $table->string('transfer_reason');
            $table->string('destination');
            $table->string('reference')->nullable();
            $table->date('date')->nullable();
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
        Schema::drop('blood_bank');
        Schema::drop('patient_transfused');
        Schema::drop('blood_transfer');
    }
}
