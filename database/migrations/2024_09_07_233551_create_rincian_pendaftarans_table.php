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
        Schema::create('rincian_pendaftaran', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pendaftaran_layanan_id')->constrained('pendaftaran_layanan')->onDelete('cascade'); // Relasi ke jenis layanan
            $table->json('metadata_isian'); // Kolom untuk menyimpan metadata isian
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rincian_pendaftarans');
    }
};
