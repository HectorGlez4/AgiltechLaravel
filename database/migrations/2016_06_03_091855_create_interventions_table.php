<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterventionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interventions', function (Blueprint $table) {
            $table->increments('INT_ID');
            $table->date('INT_CreationDate');
            $table->integer('INT_Status');
            $table->integer('VHC_ID');
            $table->integer('CLAD_ID');
            $table->integer('INAC_ID');
            $table->boolean('INT_Active');

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
        Schema::drop('interventions');
    }
}
