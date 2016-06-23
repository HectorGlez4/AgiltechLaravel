<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeviceConnectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('device_connections', function (Blueprint $table) {
            $table->increments('DECO_ID');
            $table->integer('DEIN_DeviceOne');
            $table->integer('FIIO_PortOne');
            $table->integer('DEIN_DeviceTwo');
            $table->integer('FIIO_PortTwo');
            $table->boolean('DECO_Active');
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
        Schema::drop('device_connections');
    }
}
