<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Modify the 'role' enum to add 'rsud'
        DB::statement("ALTER TABLE users MODIFY role ENUM('puskesmas', 'kelurahan', 'dukcapil', 'dinkes', 'rsud') NOT NULL");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Revert the 'role' enum to original values
        DB::statement("ALTER TABLE users MODIFY role ENUM('puskesmas', 'kelurahan', 'dukcapil', 'dinkes') NOT NULL");
    }
};
