<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiculesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicules', function (Blueprint $table) {
            $table->increments('VHC_ID');
            $table->string('VHC_IDV');
            $table->string('VHC_Registration');
            $table->string('VHC_Photo');
            $table->string('VHC_CirrculationDate');
            $table->integer('CLI_ID');
            $table->integer('VHMO_ID');
            $table->boolean('VHC_Active');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('vehicules');
    }
}
