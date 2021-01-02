<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{

    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->text('comment');
            $table->unsignedBigInteger('player_id');
            $table->timestamps();

            $table->foreign('player_id')->references('id')->on('players');

        });
    }

    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
