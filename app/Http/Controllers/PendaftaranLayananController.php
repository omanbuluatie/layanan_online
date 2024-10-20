<?php

namespace App\Http\Controllers;

use App\Mail\PendaftaranProsesMail;
use App\Models\PendaftaranLayanan;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Mail;

class PendaftaranLayananController extends Controller
{
    public function index()
    {
        return view('permohonan.daftar');
    }

    public function index_pendaftaran(Request $request)
    {
        try {
            $data = [];
            $limit = $request->input('length');
            $start = $request->input('start', 0);
            $search = $request->input('search.value');

            $query = PendaftaranLayanan::with(['user', 'jenisLayanan']); // Eager load relasi

            // Implementasi pencarian (opsional)
            if ($search) {
                $query->whereHas('user', function ($q) use ($search) {
                    $q->where('nama', 'like', "%$search%"); // Asumsikan nama adalah kolom di model User
                })->orWhereHas('jenisLayanan', function ($q) use ($search) {
                    $q->where('nama', 'like', "%$search%"); // Asumsikan nama adalah kolom di model JenisLayanan
                });
            }

            $totalData = $query->count();
            $results = $query->skip($start)->take($limit)->get();

            foreach ($results as $result) {
                $data[] = [
                    'nama_user' => $result->user->name ?? 'N/A', // Ganti dengan kolom yang sesuai di model User
                    'jenis_layanan' => $result->jenisLayanan->nama_layanan ?? 'N/A', // Ganti dengan kolom yang sesuai di model JenisLayanan
                    'status_pendaftaran' => generateStatusBadge($result->status_pendaftaran),
                    'aksi' => $this->getAction($result->id), // Menggunakan pendaftaran_id                    
                ];
            }

            $output = [
                "draw" => intval($request->input('draw')),
                "recordsTotal" => $totalData,
                "recordsFiltered" => $totalData,
                "data" => $data,
            ];

            return response()->json($output);
        } catch (Exception $error) {
            return response()->json(['error' => 'Gagal mengambil data.'], 500);
        }
    }

    private function getAction($pendaftaran_id)
    {
        return '
        <a href="' . url('pendaftaran/' . $pendaftaran_id . '/detail') . '" target="_blank" class="btn btn-outline-info btn-sm">Lihat Detail</a>
    ';
    }
    public function show($pendaftaran_id)
    {
        // Ambil data pendaftaran berdasarkan ID, beserta semua relasinya
        $pendaftaran = PendaftaranLayanan::with([
            'user',
            'jenisLayanan',
            'dokumen',
            'jenisLayanan.metaDataIsian',
            'jenisLayanan.persyaratan',
            'rincianPendaftaran',
            'dokumenAdminduk'
        ])
            ->findOrFail($pendaftaran_id);

        // Mengembalikan view dengan data pendaftaran
        return view('permohonan.detail', compact('pendaftaran'));
    }
    public function proses($id)
    {
        // Temukan pendaftaran layanan berdasarkan ID
        $pendaftaran = PendaftaranLayanan::findOrFail($id);

        // Update status pendaftaran menjadi 4
        $pendaftaran->status_pendaftaran = 4;
        $pendaftaran->save();

        // Kirim email kepada pengguna
        Mail::to($pendaftaran->user->email)->send(new PendaftaranProsesMail($pendaftaran));

        // Redirect ke route permohonan.daftar
        return redirect()->route('permohonan.daftar')->with('success', 'Pendaftaran berhasil diupdate!');
    }
    public function selesai($id)
    {
        // Temukan pendaftaran layanan berdasarkan ID
        $pendaftaran = PendaftaranLayanan::findOrFail($id);

        // Update status pendaftaran menjadi 9
        $pendaftaran->status_pendaftaran = 9;
        $pendaftaran->save();

        // Redirect ke route permohonan.daftar
        return redirect()->route('permohonan.daftar')->with('success', 'Pendaftaran berhasil diupdate!');
    }


    // public function tolakPengajuan($id)
    // {
    //     // Temukan pendaftaran berdasarkan ID
    //     $pendaftaran = PendaftaranLayanan::find($id);

    //     if (!$pendaftaran) {
    //         return redirect()->back()->with('error', 'Pendaftaran tidak ditemukan.');
    //     }

    //     // Update status_pendaftaran menjadi 5
    //     $pendaftaran->status_pendaftaran = 5;
    //     $pendaftaran->save();

    //     return redirect()->back()->with('success', 'Status pendaftaran berhasil diperbarui.');
    // }

    public function tolakPengajuan(Request $request, $id)
    {
        $request->validate([
            'catatan_ditolak' => 'required|string|max:255',
        ]);

        // Temukan pendaftaran berdasarkan ID
        $pendaftaran = PendaftaranLayanan::find($id);

        if (!$pendaftaran) {
            return redirect()->back()->with('error', 'Pendaftaran tidak ditemukan.');
        }

        // Update status_pendaftaran menjadi 5 dan catatan_ditolak
        $pendaftaran->status_pendaftaran = 5;
        $pendaftaran->catatan_ditolak = $request->catatan_ditolak;
        $pendaftaran->save();

        return redirect()->back()->with('success', 'Pengajuan berhasil ditolak dengan alasan: ' . $request->catatan_ditolak);
    }


    

}
