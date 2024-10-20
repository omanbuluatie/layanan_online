<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetaDataIsian extends Model
{
    use HasFactory;

    protected $table = 'meta_data_isian'; // Menentukan nama tabel

    protected $fillable = [
        'jenis_layanan_id', // Kolom untuk relasi dengan JenisLayanan
        'data', // Kolom untuk menyimpan data metadata
    ];

    // Relasi dengan JenisLayanan
    public function jenisLayanan()
    {
        return $this->belongsTo(JenisLayanan::class);
    }
}
