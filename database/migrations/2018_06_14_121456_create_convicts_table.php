<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConvictsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('convicts', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name");
            $table->string("gender");
            $table->string("Nationality");
            $table->string("state");
            $table->string("Address");
            $table->string("crime");
            $table->string("Verdict");
            $table->date("dateconvicted");
            $table->string('dob');
            $table->string('judge');
            $table->string('ppix');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('convicts');
    }
}
