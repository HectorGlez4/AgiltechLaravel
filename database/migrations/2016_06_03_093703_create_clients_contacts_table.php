<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients_contacts', function (Blueprint $table) {
            $table->increments('CLCO_ID');
            $table->string('CLCO_Name');
            $table->string('CLCO_Phone');
            $table->string('CLCO_Email');
            $table->integer('CLI_ID');
            $table->boolean('CLCO_Active');
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
        Schema::drop('clients_contacts');
    }
}
