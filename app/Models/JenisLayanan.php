<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisLayanan extends Model
{
    use HasFactory;
    protected $table = 'jenis_layanan'; // Menentukan nama tabel
    protected $fillable = [
        'nama_layanan',
        'deskripsi',
        'is_active'
    ];

    // Relasi dengan PendaftaranLayanan
    public function pendaftaranLayanan()
    {
        return $this->hasMany(PendaftaranLayanan::class);
    }
    // Relasi dengan Persyaratan
    public function persyaratan()
    {
        return $this->hasMany(Persyaratan::class);
    }
    public function metaDataIsian()
    {
        return $this->hasOne(MetaDataIsian::class);
    }
}
