<?php

namespace App\Http\Controllers;

use App\Models\MetaDataIsian;
use App\Models\JenisLayanan;
use Illuminate\Http\Request;

class MetaDataIsianController extends Controller
{
    public function index()
    {
        $metadataIsian = MetaDataIsian::with('jenisLayanan')->get();
        return view('metadata-isian.index', compact('metadataIsian'));
    }

    public function create()
    {
        $jenisLayanan = JenisLayanan::all();
        return view('metadata-isian.create', compact('jenisLayanan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis_layanan_id' => 'required|exists:jenis_layanan,id',
            'data' => 'required|array', // Validasi data sebagai array
            'data.*' => 'required|string' // Validasi setiap elemen dalam array
        ]);

        // Mengonversi data array menjadi JSON
        $dataJson = json_encode($request->data);

        // Menyimpan data ke dalam database
        MetaDataIsian::create([
            'jenis_layanan_id' => $request->jenis_layanan_id,
            'data' => $dataJson, // Simpan dalam format JSON
        ]);

        return redirect()->route('metadata-isian.index')->with('success', 'Data berhasil ditambahkan.');
    }


    public function edit(MetaDataIsian $metadataIsian)
    {
        $jenisLayanan = JenisLayanan::all();
        return view('metadata-isian.edit', compact('metadataIsian', 'jenisLayanan'));
    }

    public function update(Request $request, MetaDataIsian $metadataIsian)
    {
        $request->validate([
            'jenis_layanan_id' => 'required|exists:jenis_layanan,id',
            'data' => 'required',
        ]);

        $metadataIsian->update($request->all());
        return redirect()->route('metadata-isian.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy(MetaDataIsian $metadataIsian)
    {
        $metadataIsian->delete();
        return redirect()->route('metadata-isian.index')->with('success', 'Data berhasil dihapus.');
    }
}
