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
        Schema::table('causes', function (Blueprint $table) {
            $table->string('main_img', 500)->change();
            $table->string('caption', 500)->change();
            $table->text('excerpt', 6000)->change();
            $table->text('body', 10000)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('causes', function (Blueprint $table) {
            $table->string('main_img', 255)->change();
            $table->string('caption', 20)->change();
            $table->string('excerpt', 1000)->change();
            $table->string('body', 6000)->change();
        });
    }
};
