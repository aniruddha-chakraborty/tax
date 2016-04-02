<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataEntryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_entry_ministry', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('password');
            $table->tinyInteger('type');
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
        Schema::drop('data_entry_ministry');
    }
}
