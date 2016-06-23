<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLFirmwareIosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('l_firmware_io', function (Blueprint $table) {
            $table->increments('FIIO_ID');
            $table->integer('FRW_ID');
            $table->integer('IO_ID');
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
        Schema::drop('l_firmware_ios');
    }
}
