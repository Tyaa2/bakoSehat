<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MakeSuratKeteranganSakitNullableInDataWargaTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('data_warga', function (Blueprint $table) {
            $table->string('surat_keterangan_sakit')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('data_warga', function (Blueprint $table) {
            $table->string('surat_keterangan_sakit')->nullable(false)->change();
        });
    }
}
