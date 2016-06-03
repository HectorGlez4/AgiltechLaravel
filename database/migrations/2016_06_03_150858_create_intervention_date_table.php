<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterventionDateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intervention_dates', function (Blueprint $table) {
            $table->increments('INDA_ID');
            $table->timestamp('INDA_StartTime');
            $table->timestamp('INDA_EndTime');
            $table->boolean('INDA_Status');
            $table->integer('INT_ID');
            $table->boolean('INDA_Active');
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
        Schema::drop('intervention_dates');
    }
}
