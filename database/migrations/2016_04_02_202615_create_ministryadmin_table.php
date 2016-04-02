<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMinistryadminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ministryadmin', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username')->unique();
            $table->string('password');
            $table->tinyInteger('type');
            $table->string('full_name');
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
        Schema::drop('ministryadmin');
    }
}
