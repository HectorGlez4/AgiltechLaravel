<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLInterInterActionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inter_inter_actions', function (Blueprint $table) {
            $table->increments('INIA_ID');
            $table->integer('INT_ID');
            $table->integer('INAC_ID');

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
        Schema::drop('inter_inter_actions');
    }
}
