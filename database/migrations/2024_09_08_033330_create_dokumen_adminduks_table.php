<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('dokumen_adminduk', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pendaftaran_layanan_id')->constrained('pendaftaran_layanan')->onDelete('cascade'); // Relasi ke jenis layanan
            $table->string('deskripsi_file');
            $table->string('file_path');
            $table->string('diupload_oleh');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokumen_adminduks');
    }
};
