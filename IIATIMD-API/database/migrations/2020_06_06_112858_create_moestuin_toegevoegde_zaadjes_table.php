<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoestuinToegevoegdeZaadjesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moestuin_toegevoegde_zaadjes', function (Blueprint $table) {
            $table->bigInteger("moestuin_id")->unsigned();
            $table->foreign('moestuin_id')->references('moestuin_id')->on('moestuin');
            $table->bigInteger("zaadjes_id")->unsigned();
            $table->foreign('zaadjes_id')->references('zaadjes_id')->on('zaadjes');
            $table->integer('x');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('moestuin_toegevoegde_zaadjes');
    }
}
