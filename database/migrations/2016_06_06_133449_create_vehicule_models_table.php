<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiculeModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicule_models', function (Blueprint $table) {
            $table->increments('VHMO_ID');
            $table->string('VHMO_Name');
            $table->integer('VHMA_ID');
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
        Schema::drop('vehicule_models');
    }
}
