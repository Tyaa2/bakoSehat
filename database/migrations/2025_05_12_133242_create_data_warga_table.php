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
        Schema::create('data_warga', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_data_masuk');
            $table->string('nomor_kk');
            $table->string('nama');
            $table->string('nik');
            $table->date('tanggal_lahir');
            $table->text('alamat_kk');
            $table->string('nama_kelurahan');
            $table->string('kecamatan');

            // File upload (path disimpan di database)
            $table->string('foto_ktp')->nullable(); // opsional
            $table->string('foto_kk');
            $table->string('surat_keterangan_sakit');
            $table->string('surat_keterangan_domisili')->nullable(); // diupload oleh kelurahan

            // Status approval
            $table->enum('status_approve_dukcapil', ['pending', 'approved', 'rejected'])->default('pending');
            $table->enum('status_approve_dinkes', ['pending', 'approved', 'rejected'])->default('pending');

            // Relasi
            $table->unsignedBigInteger('created_by'); // user_id dari Puskesmas
            $table->string('nama_puskesmas'); // diambil dari alamat user

            $table->timestamps();

            // Foreign key ke users table
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_warga');
    }
};
