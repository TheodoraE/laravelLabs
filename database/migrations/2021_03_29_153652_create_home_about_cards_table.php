<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeAboutCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_about_cards', function (Blueprint $table) {
            $table->id();
            $table->string('classCol')->nullable();
            $table->unsignedBigInteger('icon_id');
            $table->foreign('icon_id')->references('id')->on('icons');
            $table->string('title');
            $table->text('text');
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
        Schema::dropIfExists('home_about_cards');
    }
}
