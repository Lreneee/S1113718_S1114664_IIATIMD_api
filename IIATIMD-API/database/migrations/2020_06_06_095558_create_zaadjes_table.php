<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZaadjesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zaadjes', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string('soort')->default("Soort onbekend");
            $table->foreign('soort')->references('name')->on('soort');
            $table->string('description', 2000)->default("Geen beschrijving beschikbaar");
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
        Schema::dropIfExists('zaadjes');
    }
}
