<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persyaratan extends Model
{
    use HasFactory;

    protected $table = 'persyaratan'; // Menentukan nama tabel
    protected $fillable = [
        'jenis_layanan_id', // Menyimpan ID dari jenis layanan
        'nama_persyaratan',
        'deskripsi',
    ];

    // Relasi dengan JenisLayanan
    public function jenisLayanan()
    {
        return $this->belongsTo(JenisLayanan::class);
    }
}

