<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
    use HasFactory;
    protected $table = 'dokumen'; // Menentukan nama tabel

    protected $fillable = [
        'pendaftaran_layanan_id',
        'file_path',
        'nama_persyaratan'
    ];

    // Relasi dengan PendaftaranLayanan
    public function pendaftaranLayanan()
    {
        return $this->belongsTo(PendaftaranLayanan::class);
    }
}
