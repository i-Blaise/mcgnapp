<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home', function (Blueprint $table) {
            $table->id();
            $table->string('home_slider1', 255);
            $table->string('home_slider1_caption', 60);
            $table->string('home_slider1_text', 255);
            $table->string('home_slider2', 255);
            $table->string('home_slider2_caption', 60);
            $table->string('home_slider2_text', 255);
            $table->string('home_slider3', 255);
            $table->string('home_slider3_caption', 60);
            $table->string('home_slider1=3_text', 255);
            $table->string('video_link', 255);
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
        Schema::dropIfExists('home');
    }
};
