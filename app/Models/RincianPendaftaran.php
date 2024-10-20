<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RincianPendaftaran extends Model
{
    use HasFactory;

    protected $table = 'rincian_pendaftaran'; // Menentukan nama tabel

    protected $fillable = [
        'pendaftaran_layanan_id',
        'metadata_isian',
    ];

    // Relasi dengan PendaftaranLayanan
    public function pendaftaranLayanan()
    {
        return $this->belongsTo(PendaftaranLayanan::class, 'pendaftaran_layanan_id', 'id');
    }
}
