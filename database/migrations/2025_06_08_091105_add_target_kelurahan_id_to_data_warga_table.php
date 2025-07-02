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
            $table->unsignedBigInteger('target_kelurahan_id')->nullable()->after('nama_kelurahan');
            $table->foreign('target_kelurahan_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('data_warga', function (Blueprint $table) {
             $table->dropForeign(['target_kelurahan_id']);
            $table->dropColumn('target_kelurahan_id');
        });
    }
};
