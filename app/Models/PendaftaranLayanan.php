<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendaftaranLayanan extends Model
{
    use HasFactory;
    protected $table = 'pendaftaran_layanan'; // Menentukan nama tabel

    protected $fillable = [
        'user_id',
        'jenis_layanan_id',
        'status_pendaftaran',
        'catatan_ditolak'
    ];

    // Relasi dengan User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi dengan JenisLayanan
    public function jenisLayanan()
    {
        return $this->belongsTo(JenisLayanan::class);
    }

    public function dokumen()
    {
        return $this->hasMany(Dokumen::class, 'pendaftaran_layanan_id', 'id');
    }
    public function rincianpendaftaran()
    {
        return $this->hasMany(RincianPendaftaran::class, 'pendaftaran_layanan_id', 'id');
    }
    public function dokumenAdminduk()
    {
        return $this->hasMany(DokumenAdminduk::class, 'pendaftaran_layanan_id', 'id');
    }

}
