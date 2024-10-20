<?php

namespace App\Http\Controllers;

use App\Models\JenisLayanan;
use Illuminate\Http\Request;

class JenisLayananController extends Controller
{
    // Menampilkan daftar jenis layanan
    public function index()
    {
        $jenisLayanan = JenisLayanan::all();
        return view('jenis-layanan.index', compact('jenisLayanan'));
    }

    // Menampilkan form untuk membuat jenis layanan baru
    public function create()
    {
        return view('jenis-layanan.create');
    }

    // Menyimpan jenis layanan baru
    public function store(Request $request)
    {
        $request->validate([
            'nama_layanan' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        JenisLayanan::create($request->all());
        return redirect()->route('jenis-layanan.index')->with('success', 'Jenis Layanan berhasil ditambahkan.');
    }

    // Menampilkan detail jenis layanan
    public function show(JenisLayanan $jenisLayanan)
    {
        return view('jenis-layanan.show', compact('jenisLayanan'));
    }

    // Menampilkan form untuk mengedit jenis layanan
    public function edit(JenisLayanan $jenisLayanan)
    {
        return view('jenis-layanan.edit', compact('jenisLayanan'));
    }

    // Mengupdate jenis layanan
    public function update(Request $request, JenisLayanan $jenisLayanan)
    {
        $request->validate([
            'nama_layanan' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        $jenisLayanan->update($request->all());
        return redirect()->route('jenis-layanan.index')->with('success', 'Jenis Layanan berhasil diperbarui.');
    }

    // Menghapus jenis layanan
    public function destroy(JenisLayanan $jenisLayanan)
    {
        $jenisLayanan->delete();
        return redirect()->route('jenis-layanan.index')->with('success', 'Jenis Layanan berhasil dihapus.');
    }
}
