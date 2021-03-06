<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stockists', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('shop_name');
            $table->string('email')->unique();
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->integer('total_business');
            $table->string('password');
            $table->rememberToken();
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
        Schema::drop('stockists');
    }
}
