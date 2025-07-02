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
        Schema::create('rejection_notes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('data_warga_id');
            $table->text('rejection_reason');
            $table->timestamps();

            $table->foreign('data_warga_id')->references('id')->on('data_warga')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rejection_notes');
    }
};
