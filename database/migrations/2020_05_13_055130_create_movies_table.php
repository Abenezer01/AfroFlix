<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->bigIncrements('movie_id');
            $table->string('title');
            $table->string('trailer');
            $table->date('release_date');
            $table->decimal('run_time');
            $table->integer('movie_status');
            $table->bigInteger('votes');
            $table->string('interview');
            $table->string('movie_stills');
            $table->string('story_line');
            $table->string('location');
            $table->date('year');
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
        Schema::dropIfExists('movies');
    }
}
