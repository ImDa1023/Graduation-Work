<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScorelistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scorelists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('artist');
            $table->string('composer');
            $table->string('arranger');
            $table->string('publisher');
            $table->string('genre');
            $table->string('shelf');
            $table->string('shelfNum');
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
        Schema::dropIfExists('scorelists');
    }
}
