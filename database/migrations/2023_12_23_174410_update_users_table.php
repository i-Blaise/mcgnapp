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
        Schema::table('users', function (Blueprint $table) {
            $table->string('image', 500)->after('id')->nullable();
            $table->string('about', 1200)->after('name');
            $table->integer('access_level')->default(0)->after('role');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Drop the added column
            $table->dropColumn('image');
            $table->dropColumn('about');
            $table->dropColumn('access_level');
        });
    }
};
