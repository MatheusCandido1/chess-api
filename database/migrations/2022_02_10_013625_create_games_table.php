<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('play')->nullable();
            $table->integer('status');
            $table->integer('whites');
            $table->integer('blacks');
            $table->integer('winner')->nullable();
            $table->integer('loser')->nullable();
            $table->string('winner_color')->nullable();
            $table->string('loser_color')->nullable();
            $table->boolean('tie')->nullable();
            $table->datetime('schedule')->nullable();
            $table->string('speed')->nullable();
            $table->text('pgn')->nullable();
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
        Schema::dropIfExists('games');
    }
}
