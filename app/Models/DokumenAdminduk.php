<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DokumenAdminduk extends Model
{
    use HasFactory;

    protected $table = 'dokumen_adminduk'; // Menentukan nama tabel

    protected $fillable = [
        'pendaftaran_layanan_id',
        'deskripsi_file',
        'file_path',
        'diupload_oleh',
    ];

    // Relasi dengan PendaftaranLayanan
    public function pendaftaranLayanan()
    {
        return $this->belongsTo(PendaftaranLayanan::class, 'pendaftaran_layanan_id', 'id');
    }
}
