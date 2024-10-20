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
        Schema::table('pendaftaran_layanan', function (Blueprint $table) {
            $table->string('catatan_ditolak')->nullable(); // Menambahkan kolom is_active dengan default true
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pendaftaran_layanan', function (Blueprint $table) {
            //
        });
    }
};
