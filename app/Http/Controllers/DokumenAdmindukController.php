<?php

namespace App\Http\Controllers;

use App\Models\DokumenAdminduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DokumenAdmindukController extends Controller
{
    public function store(Request $request)
    {
        // return $request->all();
        $request->validate([
            'file' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'deskripsi_file' => 'required|string|max:255',
        ]);

        // Simpan file
        $path = $request->file('file')->store('dokumen_adminduk');

        // Simpan ke database
        DokumenAdminduk::create([
            'pendaftaran_layanan_id' => $request->pendaftaran_layanan_id, // pastikan untuk mengirimkan ID ini
            'deskripsi_file' => $request->deskripsi_file,
            'file_path' => $path,
            'diupload_oleh' => auth()->id(), // ID pengguna yang mengupload
        ]);

        return redirect()->back()->with('success', 'Dokumen berhasil diupload!');
    }

    public function destroy($id)
    {
        $dokumen = DokumenAdminduk::findOrFail($id);
        // Hapus file dari storage
        Storage::delete($dokumen->file_path);
        // Hapus dari database
        $dokumen->delete();

        return redirect()->back()->with('success', 'Dokumen berhasil dihapus!');
    }
}

