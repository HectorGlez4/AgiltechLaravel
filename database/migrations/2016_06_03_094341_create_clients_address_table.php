<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients_address', function (Blueprint $table) {
            $table->increments('CLAD_ID');
            $table->string('CLAD_Name');
            $table->string('CLAD_Address');
            $table->integer('CLCO_ID');
            $table->boolean('CLAD_Active');
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
        Schema::drop('clients_address');
    }
}
