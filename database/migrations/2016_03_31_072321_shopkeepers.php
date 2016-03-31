<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Shopkeepers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('shopkeeper', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('api_key')->unique();
            $table->string('shopname');
            $table->string('location');
            $table->integer('vat_id');
            $table->string('nid');
            $table->string('jid');
            $table->timestamps();
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shopkeeper', function (Blueprint $table) {
            Schema::drop('shopkeeper');
        });
    }
}
