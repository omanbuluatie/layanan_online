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
        Schema::create('meta_data_isian', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jenislayanan_id')->constrained('jenis_layanan')->onDelete('cascade'); // Relasi ke jenis layanan
            $table->text('data'); // Kolom untuk menyimpan data metadata
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meta_data_isian');
    }
};
