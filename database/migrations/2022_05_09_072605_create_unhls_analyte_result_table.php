<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnhlsAnalyteResultTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unhls_analyte_result', function (Blueprint $table) {            $table->increments('id');
            $table->string('analyte_name', 255);
            $table->string('analyte_result', 255);
            $table->float('ct');
            $table->float('endpt');
            $table->unsignedInteger('test_id');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');

            $table->foreign('test_id')->references('id')->on('unhls_tests');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unhls_analyte_result');
    }
}
