<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tips', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('short_description', 200);
            $table->string('long_description', 2000);
            $table->string('img')->default("https://www.landleven.nl/getmedia/07654159-f577-4166-a23d-4188813d22de/aanlegtips-mooie-moestuinLK.jpg?width=816&height=544&ext=.jpg");
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
        Schema::dropIfExists('tips');
    }
}
