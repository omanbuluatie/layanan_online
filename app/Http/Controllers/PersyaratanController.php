<?php
// app/Http/Controllers/PersyaratanController.php
namespace App\Http\Controllers;

use App\Models\Persyaratan;
use App\Models\JenisLayanan;
use Illuminate\Http\Request;

class PersyaratanController extends Controller
{
    public function index()
    {
        $persyaratan = Persyaratan::with('jenisLayanan')->get();
        return view('persyaratan.index', compact('persyaratan'));
    }

    public function create()
    {
        $jenisLayanan = JenisLayanan::all();
        return view('persyaratan.create', compact('jenisLayanan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis_layanan_id' => 'required|exists:jenis_layanan,id',
            'nama_persyaratan' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        Persyaratan::create($request->all());
        return redirect()->route('persyaratan.index')->with('success', 'Persyaratan berhasil ditambahkan!');
    }

    public function edit(Persyaratan $persyaratan)
    {
        $jenisLayanan = JenisLayanan::all();
        return view('persyaratan.edit', compact('persyaratan', 'jenisLayanan'));
    }

    public function update(Request $request, Persyaratan $persyaratan)
    {
        $request->validate([
            'jenis_layanan_id' => 'required|exists:jenis_layanan,id',
            'nama_persyaratan' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        $persyaratan->update($request->all());
        return redirect()->route('persyaratan.index')->with('success', 'Persyaratan berhasil diperbarui!');
    }

    public function destroy(Persyaratan $persyaratan)
    {
        $persyaratan->delete();
        return redirect()->route('persyaratan.index')->with('success', 'Persyaratan berhasil dihapus!');
    }
}
