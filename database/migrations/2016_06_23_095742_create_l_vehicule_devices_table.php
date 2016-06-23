<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLVehiculeDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('l_vehicule_device', function (Blueprint $table) {
            $table->increments('VEDE_ID');
            $table->integer('VHC_ID');
            $table->integer('DEV_ID');
            $table->boolean('VEDE_Active');
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
        Schema::drop('l_vehicule_devices');
    }
}
