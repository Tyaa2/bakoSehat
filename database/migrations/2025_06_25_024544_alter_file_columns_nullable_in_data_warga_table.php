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
            $table->string('foto_kk')->nullable()->change();
            $table->string('surat_keterangan_sakit')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('data_warga', function (Blueprint $table) {
            $table->string('foto_kk')->nullable(false)->change();
            $table->string('surat_keterangan_sakit')->nullable(false)->change();
        });
    }
};
