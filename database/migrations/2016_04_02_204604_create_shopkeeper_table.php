<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopkeeperTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shopkeeper', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('password');
            $table->string('api_key');
            $table->string('app_secret');
            $table->string('shopname');
            $table->string('vat_reg_number');
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
        Schema::drop('shopkeeper');
    }
}
