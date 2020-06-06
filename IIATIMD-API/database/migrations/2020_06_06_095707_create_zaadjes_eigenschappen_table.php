<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZaadjesEigenschappenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zaadjes_eigenschappen', function (Blueprint $table) {
            $table->id();
            $table->foreign('id')->references('zaadjes_id')->on('zaadjes');
            $table->integer("aantal_zaadjes_in_vak");
            $table->string("begin_zaaitijd")->default("Onbekend");
            $table->string("eind_zaaitijd")->default("Onbekend");
            $table->decimal('hoogte');
            $table->decimal("zaaidiepte")->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zaadjes_eigenschappen');
    }
}
