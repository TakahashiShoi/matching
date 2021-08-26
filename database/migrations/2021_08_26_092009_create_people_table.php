<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{

    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->string('mail');
            $table->text('pass');
            $table->text('add_1');
            $table->text('add_2');
            $table->integer('birth_year');
            $table->integer('gender');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people');
    }
}
