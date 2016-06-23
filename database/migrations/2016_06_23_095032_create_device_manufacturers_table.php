<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeviceManufacturersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('device_manufacturers', function (Blueprint $table) {
            $table->increments('DEMA_ID');
            $table->string('DEMA_Name');
            $table->boolean('DEMA_Active');
        
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
        Schema::drop('device_manufacturers');
    }
}
