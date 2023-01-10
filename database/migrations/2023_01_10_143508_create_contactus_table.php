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
        Schema::create('contactus', function (Blueprint $table) {
            $table->id();
            $table->string('location', 255)->nullable();
            $table->string('phone_num1', 20);
            $table->string('phone_num2', 20)->nullable();
            $table->string('email', 255);
            $table->boolean('sm_facebook_status')->default(0);
            $table->string('sm_facebook_link', 255)->nullable();
            $table->boolean('sm_instagram_status')->default(0);
            $table->string('sm_instagram_link', 255)->nullable();
            $table->boolean('sm_linkedin_status')->default(0);
            $table->string('sm_linkedin_link', 255)->nullable();
            $table->boolean('sm_twitter_status')->default(0);
            $table->string('sm_twitter_link', 255)->nullable();
            $table->boolean('sm_youtube_status')->default(0);
            $table->string('sm_youtube_link', 255)->nullable();
            $table->boolean('sm_snapchat_status')->default(0);
            $table->string('sm_snapchat_link', 255)->nullable();
            $table->boolean('sm_whatsapp_status')->default(0);
            $table->string('sm_whatsapp_link', 255)->nullable();
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
        Schema::dropIfExists('contactus');
    }
};
