<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoestuinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moestuin', function (Blueprint $table) {
            $table->id('moestuin_id');
//            $table->bigInteger('user_id')->unsigned();
//            $table->foreign('user_id')->references('id')->on('users');
            $table->string('naam', 30);
            $table->bigInteger('moestuin_maten')->unsigned();
            $table->foreign('moestuin_maten')->references('id')->on('moestuinen_maten');
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
        Schema::dropIfExists('moestuin');
    }
}
