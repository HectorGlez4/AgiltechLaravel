<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterventionActionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intervention_actions', function (Blueprint $table) {
            $table->increments('INAC_ID');
            $table->string('INAC_Description');
            $table->boolean('INAC_Status');
            $table->integer('USR_ID');
            $table->integer('IACA_ID');
            $table->boolean('INAC_Active');

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
        Schema::drop('intervention_actions');
    }
}
