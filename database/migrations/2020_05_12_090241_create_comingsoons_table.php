<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComingsoonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comingsoons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('gener');
            $table->string('Trailer');
            $table->tinyInteger('19');
            $table->string('crew');
            $table->tinyInteger('numbers');
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
        Schema::dropIfExists('comingsoons');
    }
}
