<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTanggalMasukKeluarToDataWargaTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('data_warga', function (Blueprint $table) {
            $table->date('tanggal_masuk_pasien')->nullable()->after('tanggal_data_masuk');
            $table->date('tanggal_keluar_pasien')->nullable()->after('tanggal_masuk_pasien');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('data_warga', function (Blueprint $table) {
            $table->dropColumn(['tanggal_masuk_pasien', 'tanggal_keluar_pasien']);
        });
    }
}
