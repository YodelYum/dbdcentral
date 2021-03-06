<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKillerperksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('killerperks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('killerID');
            $table->integer('perkID');
		  $table->foreign('killerID')->references('id')->on('killers');
		  $table->foreign('perkID')->references('id')->on('perks');
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
        Schema::dropIfExists('killerperks');
    }
}
