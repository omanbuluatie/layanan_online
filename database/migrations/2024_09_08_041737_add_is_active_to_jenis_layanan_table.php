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
        Schema::table('jenis_layanan', function (Blueprint $table) {
            $table->boolean('is_active')->default(true); // Menambahkan kolom is_active dengan default true
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('jenis_layanan', function (Blueprint $table) {
            //
        });
    }
};
