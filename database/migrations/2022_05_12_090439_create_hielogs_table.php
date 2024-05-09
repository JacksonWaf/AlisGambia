<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHielogsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('hielogs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('client', 50)->nullable($value = true);
            $table->string('httpmethod', 20)->nullable($value = true);
            $table->string('path', 255)->nullable($value = true);
            $table->longText('requestbody')->nullable($value = true);
            $table->dateTime('requesttime')->nullable($value = true);
            $table->string('requestparameter', 500)->nullable($value = true);
            $table->string('status',20);
            $table->string('statuscode',20)->nullable($value = true);
            $table->longText('responsebody')->nullable($value = true);
            $table->dateTime('responsetime')->nullable($value = true); 
            $table->bigInteger('visitid')->nullable($value = true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('hielogs');
    }

}
