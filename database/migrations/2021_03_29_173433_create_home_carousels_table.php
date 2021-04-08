<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeCarouselsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_carousels', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->unsignedBigInteger('description_id')->nullable();
            $table->foreign('description_id')->references('id')->on('home_carousel_descriptions')->nullable();
            $table->integer('order');
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
        Schema::dropIfExists('home_carousels');
    }
}
