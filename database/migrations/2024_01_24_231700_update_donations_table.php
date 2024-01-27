<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('donations', function (Blueprint $table) {
            $table->string('name', 100);
            $table->string('phone_num', 100);
            $table->string('email', 100);
            $table->string('amount', 100);
            $table->string('cause_name', 100)->nullable();
            $table->string('api_message', 100)->nullable();
            $table->string('code', 100)->nullable();
            $table->string('paylinkId', 500)->nullable();
            $table->string('clientReference', 500)->nullable();
            $table->string('paylinkUrl', 1000)->nullable();
            $table->integer('expiresAt')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('donations', function (Blueprint $table) {
            $table->dropIfExists('api_message', 100);
            $table->dropIfExists('code', 100);
            $table->dropIfExists('paylinkId', 500);
            $table->dropIfExists('clientReference', 500);
            $table->dropIfExists('paylinkUrl', 1000);
            $table->dropIfExists('expiresAt');
        });
    }
};
