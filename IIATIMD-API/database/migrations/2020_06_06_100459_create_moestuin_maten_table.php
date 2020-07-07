<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoestuinMatenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moestuinen_maten', function (Blueprint $table) {
            $table->id('id');
            $table->string('img')->default("Geen afbeelding");
            $table->integer('lengte_in_cm');
            $table->integer('lengte_in_vakjes');
            $table->integer('breedte_in_cm');
            $table->integer('breedte_in_vakjes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('moestuinen');
    }
}
