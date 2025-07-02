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
        Schema::table('data_warga', function (Blueprint $table) {
            $table->string('alasan_penolakan_dukcapil')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('data_warga', function (Blueprint $table) {
            $table->dropColumn('alasan_penolakan_dukcapil');
        });
    }
};
