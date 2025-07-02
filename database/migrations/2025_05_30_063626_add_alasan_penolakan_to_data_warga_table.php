<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
{
    Schema::table('data_warga', function (Blueprint $table) {
        $table->text('alasan_penolakan_kelurahan')->nullable()->after('surat_keterangan_domisili');
    });
}

public function down(): void
{
    Schema::table('data_warga', function (Blueprint $table) {
        $table->dropColumn('alasan_penolakan_kelurahan');
    });
}


  
};
