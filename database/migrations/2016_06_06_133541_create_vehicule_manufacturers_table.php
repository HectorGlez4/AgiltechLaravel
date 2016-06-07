<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiculeManufacturersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicule_manufacturers', function (Blueprint $table) {
            $table->increments('VHMA_ID');
            $table->string('VHMA_Name');
            $table->boolean('VHMO_Active');
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
        Schema::drop('vehicule_manufacturers');
    }
}
