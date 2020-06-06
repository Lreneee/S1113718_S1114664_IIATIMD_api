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
            $table->timestamp("begin_zaaitijd");
            $table->timestamp("eind_zaaitijd");
            $table->integer('hoogte');
            $table->decimal("zaaidiepte");
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
