<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterPocResultsAddMpima extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::table('poc_results', function (Blueprint $table) {
      $table->string('equipment_serial_number')->nullable();
      $table->string('catridge_serial_number')->nullable();
      $table->string('machine_sample_detection')->nullable();
      $table->string('device_status')->nullable();
      $table->string('hiv1_positive_control')->nullable();
      $table->string('hiv2_positive_control')->nullable();
      $table->string('negative_control')->nullable();
      $table->string('device_analysis')->nullable();
      $table->string('device_software_version')->nullable();
      $table->string('test_summary')->nullable();
      $table->string('test_type')->nullable();
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::table('poc_results', function (Blueprint $table) {
      //
    });
  }
}