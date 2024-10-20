<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use App\Models\JenisLayanan;
use App\Models\PendaftaranLayanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Models\RincianPendaftaran;
use App\Mail\PendaftaranLayananMail;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    public function __construct()
    {
        // Menggunakan middleware auth untuk semua metode
        $this->middleware('auth');
    }
    // public function show()
    // {
    //     // Cek apakah pengguna sudah mendaftar dengan status pendaftaran 0
    //     $pendaftaran = PendaftaranLayanan::where('user_id', Auth::id())
    //     ->where('status_pendaftaran', 0)
    //     ->orWhere('status_pendaftaran', 1)
    //     ->first();

    //     // Jika sudah mendaftar, redirect ke halaman upload dokumen
    //     if ($pendaftaran) {
    //         return redirect()->route('upload.documents', ['pendaftaran' => $pendaftaran->id]);
    //     }

    //     // Jika belum mendaftar, ambil semua jenis layanan dari database
    //     $layanan = JenisLayanan::where('is_active', true)->get();
    //     return view('layanan.select-services', compact('layanan'));

    // }

    public function show()
    {
        // Cek apakah pengguna sudah mendaftar dengan status pendaftaran 0 atau 1
        $pendaftaran = PendaftaranLayanan::where('user_id', Auth::id())
            ->where(function ($query) {
                $query->where('status_pendaftaran', 0)
                    ->orWhere('status_pendaftaran', 1);
            })
            ->first();

        // Jika status_pendaftaran = 0, arahkan ke halaman rincian pendaftaran
        if ($pendaftaran && $pendaftaran->status_pendaftaran == 0) {
            return redirect()->route('detail.registration', ['pendaftaran' => $pendaftaran->id])
                ->with('success', 'Silakan isi rincian pendaftaran.');
        }

        // Jika status_pendaftaran = 1, arahkan ke halaman upload dokumen
        if ($pendaftaran && $pendaftaran->status_pendaftaran == 1) {
            return redirect()->route('upload.documents', ['pendaftaran' => $pendaftaran->id]);
        }

        // Jika belum mendaftar, ambil semua jenis layanan dari database
        $jenisLayanan = JenisLayanan::where('is_active', true)->get();
        return view('layanan.select-services', compact('jenisLayanan'));
    }

    // Menyimpan pilihan layanan
    // public function store(Request $request)
    // {
    //     // Validasi input
    //     $request->validate([
    //         'jenis_layanan_id' => 'required|exists:jenis_layanan,id', // Validasi bahwa layanan harus valid
    //     ]);

    //     // Cek apakah ada pendaftaran yang sudah ada dengan jenis layanan ini
    //     $existingPendaftaran = PendaftaranLayanan::where('user_id', Auth::id())
    //         ->where('jenis_layanan_id', $request->jenis_layanan_id)
    //         ->get();

    //     // Cek jika ada pendaftaran dengan status 2
    //     $hasActiveRegistration = $existingPendaftaran->contains(function ($pendaftaran) {
    //         return $pendaftaran->status_pendaftaran == 2;
    //     });

    //     if ($hasActiveRegistration) {
    //         return redirect()->route('home')->with('error', 'Anda tidak dapat mendaftar untuk layanan ini saat status pendaftaran Anda masih ada permohonan yang diajukan.');
    //     }

    //     // Cek status pendaftaran yang ada
    //     $existingPendaftaranWithStatus9 = $existingPendaftaran->firstWhere('status_pendaftaran', 9);
    //     if ($existingPendaftaranWithStatus9) {
    //         // Jika status pendaftaran adalah 9, buat pendaftaran baru
    //         $pendaftaranLayanan = PendaftaranLayanan::create([
    //             'user_id' => Auth::id(),
    //             'jenis_layanan_id' => $request->jenis_layanan_id,
    //         ]);

    //         return redirect()->route('upload.documents', ['pendaftaran' => $pendaftaranLayanan->id])
    //             ->with('success', 'Pendaftaran baru berhasil dibuat karena status pendaftaran sebelumnya adalah 9.');
    //     }

    //     // Cek status pendaftaran yang ada
    //     $existingPendaftaranWithStatus0 = $existingPendaftaran->firstWhere('status_pendaftaran', 0);
    //     if ($existingPendaftaranWithStatus0) {
    //         // Jika status pendaftaran adalah 0, arahkan ke halaman upload
    //         return redirect()->route('upload.documents', ['pendaftaran' => $existingPendaftaranWithStatus0->id])
    //             ->with('success', 'Silakan upload dokumen.');
    //     }

    //     // Jika tidak ada pendaftaran sebelumnya, simpan pilihan layanan ke dalam database
    //     $pendaftaranLayanan = PendaftaranLayanan::create([
    //         'user_id' => Auth::id(),
    //         'jenis_layanan_id' => $request->jenis_layanan_id,
    //     ]);

    //     // Redirect ke halaman upload dokumen setelah pendaftaran
    //     return redirect()->route('upload.documents', ['pendaftaran' => $pendaftaranLayanan->id])
    //         ->with('success', 'Layanan berhasil dipilih.');
    // }


    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'jenis_layanan_id' => 'required|exists:jenis_layanan,id', // Validasi bahwa layanan harus valid
        ]);

        // Cek apakah ada pendaftaran yang sudah ada dengan jenis layanan ini
        $existingPendaftaran = PendaftaranLayanan::where('user_id', Auth::id())
            ->where('jenis_layanan_id', $request->jenis_layanan_id)
            ->get();

        // Cek jika ada pendaftaran dengan status 2
        // Cek jika ada pendaftaran dengan status 1 atau 2
        $hasActiveRegistration = $existingPendaftaran->contains(function ($pendaftaran) {
            return in_array($pendaftaran->status_pendaftaran, [0, 1, 2]);
        });

        if ($hasActiveRegistration) {
            return redirect()->route('home')->with('error', 'Anda tidak dapat mendaftar untuk layanan ini saat status pendaftaran Anda masih ada permohonan yang diajukan.');
        }


        // Cek status pendaftaran yang ada
        $existingPendaftaranWithStatus9 = $existingPendaftaran->firstWhere('status_pendaftaran', 9);
        if ($existingPendaftaranWithStatus9) {
            // Jika status pendaftaran adalah 9, buat pendaftaran baru
            $pendaftaranLayanan = PendaftaranLayanan::create([
                'user_id' => Auth::id(),
                'jenis_layanan_id' => $request->jenis_layanan_id,
            ]);

            return redirect()->route('detail.registration', ['pendaftaran' => $pendaftaranLayanan->id])
                ->with('success', 'Pendaftaran baru berhasil dibuat karena status pendaftaran sebelumnya adalah 9.');
        }

        // Cek status pendaftaran yang ada
        $existingPendaftaranWithStatus0 = $existingPendaftaran->firstWhere('status_pendaftaran', 0);
        if ($existingPendaftaranWithStatus0) {
            // Jika status pendaftaran adalah 0, arahkan ke halaman isian rincian
            return redirect()->route('detail.registration', ['pendaftaran' => $existingPendaftaranWithStatus0->id])
                ->with('success', 'Silakan isi rincian pendaftaran.');
        }

        // Jika tidak ada pendaftaran sebelumnya, simpan pilihan layanan ke dalam database
        $pendaftaranLayanan = PendaftaranLayanan::create([
            'user_id' => Auth::id(),
            'jenis_layanan_id' => $request->jenis_layanan_id,
        ]);

        // Redirect ke halaman isian rincian pendaftaran setelah pendaftaran
        return redirect()->route('detail.registration', ['pendaftaran' => $pendaftaranLayanan->id])
            ->with('success', 'Layanan berhasil dipilih.');
    }

    public function showDetailForm($pendaftaranId)
    {
        // Mengambil pendaftaran layanan berdasarkan ID
        $pendaftaran = PendaftaranLayanan::with(['jenisLayanan.metaDataIsian'])->findOrFail($pendaftaranId);

        // Mengambil metadata isian dari relasi
        $metadataIsian = $pendaftaran->jenisLayanan->metaDataIsian;

        // Jika tidak ada metadata isian, bisa menghandle error atau mengarahkan ke halaman lain
        if (!$metadataIsian) {
            return redirect()->route('home')->with('error', 'Metadata isian tidak ditemukan untuk jenis layanan ini.');
        }

        // Meng-decoding data JSON dari kolom 'data' dan pastikan hasilnya adalah array objek
        $dataIsian = json_decode($metadataIsian->data);

        // Jika data tidak berupa array, kembalikan error
        if (!is_array($dataIsian)) {
            return redirect()->route('home')->with('error', 'Format data metadata isian tidak valid.');
        }

        return view('layanan.detail', [
            'pendaftaran' => $pendaftaran,
            'metadataIsian' => $dataIsian,
        ]);
    }


    public function submitDetail(Request $request, $pendaftaranId)
    {

        // return $request->all();
        // Temukan pendaftaran layanan berdasarkan ID
        $pendaftaran = PendaftaranLayanan::findOrFail($pendaftaranId);



        // Simpan data rincian pendaftaran
        $rincianPendaftaran = new RincianPendaftaran();
        $rincianPendaftaran->pendaftaran_layanan_id = $pendaftaran->id;
        $rincianPendaftaran->metadata_isian = json_encode($request->input('metadata')); // Simpan metadata sebagai JSON
        $rincianPendaftaran->save();

        // Update status pendaftaran
        $pendaftaran->update(['status_pendaftaran' => 1]);

        // Redirect ke halaman upload dokumen
        return redirect()->route('upload.documents', ['pendaftaran' => $pendaftaran->id])
            ->with('success', 'Layanan berhasil dipilih.');
    }





    public function uploadDocuments(Request $request)
    {
        // Ambil informasi pendaftaran berdasarkan ID yang diterima dari request
        $pendaftaran = PendaftaranLayanan::with('jenisLayanan') // Pastikan relasi 'jenisLayanan' sudah didefinisikan
            ->where('id', $request->input('pendaftaran'))
            ->where('user_id', Auth::id())
            ->firstOrFail(); // Mengambil data pendaftaran atau 404 jika tidak ditemukan

        return view('layanan.upload-documents', compact('pendaftaran'));
    }


    public function storeDocuments(Request $request)
    {
        $request->validate([
            'dokumen.*' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048', // Validasi untuk file
        ]);

        foreach ($request->file('dokumen') as $file) {
            // Simpan file dan ambil path-nya
            $filePath = $file->store('dokumen');

            // Simpan informasi dokumen ke dalam database
            Dokumen::create([
                'pendaftaran_layanan_id' => $request->pendaftaran_layanan_id, // Ambil ID pendaftaran
                'file_path' => $filePath,
            ]);
        }

        return redirect()->route('home')->with('success', 'Dokumen berhasil diunggah.');
    }

    public function submitUploadDocuments(Request $request)
    {
        $request->validate([
            'dokumen' => 'required|file|mimes:jpg,png,pdf|max:2048',
            'pendaftaran_layanan_id' => 'required|exists:pendaftaran_layanan,id', // Validasi ID pendaftaran
        ]);

        $pendaftaranLayananId = $request->input('pendaftaran_layanan_id');
        $namaPersyaratan = $request->input('nama_persyaratan');

        // Membuat path folder berdasarkan tanggal dan ID pendaftaran
        $dateFolder = now()->format('YmdHis'); // Format tanggal
        $folderPath = public_path("files/persyaratan/{$dateFolder}/{$pendaftaranLayananId}");

        // Membuat folder jika belum ada
        if (!file_exists($folderPath)) {
            mkdir($folderPath, 0755, true);
        }

        // Mengambil file dokumen
        $file = $request->file('dokumen');

        // Menentukan nama file berdasarkan format yang diinginkan
        $fileName = "{$dateFolder}_{$pendaftaranLayananId}." . $file->getClientOriginalExtension();

        // Memindahkan file ke folder yang telah ditentukan
        $filePath = $file->move($folderPath, $fileName);

        // Insert or Update Dokumen
        Dokumen::updateOrCreate(
            [
                'pendaftaran_layanan_id' => $pendaftaranLayananId,
                'nama_persyaratan' => $namaPersyaratan,
            ],
            [
                'file_path' => 'public/files/persyaratan/' . "{$dateFolder}/{$pendaftaranLayananId}/" . $fileName,
            ]
        );

        return response()->json(['success' => 'Dokumen berhasil diunggah']);
    }

    public function deleteDocument(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|exists:dokumen,id',
            'pendaftaran_layanan_id' => 'required|exists:pendaftaran_layanan,id',
            'nama_persyaratan' => 'required|string',
        ]);

        // Cari dokumen dan hapus
        $document = Dokumen::find($validated['id']);
        $documentPath = $document->file_path; // Simpan path file untuk dihapus

        if ($document->delete()) {
            // Hapus file dari server jika perlu
            if (file_exists(public_path($documentPath))) {
                unlink(public_path($documentPath));
            }

            return response()->json([
                'success' => true,
                'persyaratan_id' => $validated['nama_persyaratan']
            ]);
        }

        return response()->json(['success' => false], 500);
    }
    public function showStatementPage($pendaftaran_layanan_id)
    {
        // Ambil data pendaftaran berdasarkan ID
        $pendaftaran = PendaftaranLayanan::with('jenisLayanan.persyaratan', 'dokumen') // Pastikan relasi sudah didefinisikan
            ->findOrFail($pendaftaran_layanan_id);

        // Hitung jumlah persyaratan yang dimiliki oleh jenis layanan terkait
        $totalPersyaratan = $pendaftaran->jenisLayanan->persyaratan->count();

        // Hitung jumlah dokumen yang sudah diunggah oleh user untuk pendaftaran ini
        $totalDokumenTerunggah = $pendaftaran->dokumen->count();

        // Validasi apakah jumlah dokumen yang diunggah sama dengan jumlah persyaratan
        if ($totalDokumenTerunggah < $totalPersyaratan) {
            // Jika dokumen belum lengkap, redirect ke halaman unggah dokumen dengan pesan error
            return redirect()->route('upload.documents', ['pendaftaran' => $pendaftaran_layanan_id])
                ->with('error', 'Dokumen persyaratan belum lengkap. Silakan unggah semua dokumen yang diperlukan.');
        }

        // Jika dokumen sudah lengkap, tampilkan halaman pernyataan
        return view('layanan.statement', compact('pendaftaran'));
    }



    public function updateStatusPendaftaran(Request $request)
    {
        // Validate the request
        $request->validate([
            'pendaftaran_layanan_id' => 'required|exists:pendaftaran_layanan,id',
            'declaration' => 'required|accepted', // Ensure the checkbox is checked
        ]);

        // Find the registration record
        $pendaftaran = PendaftaranLayanan::findOrFail($request->pendaftaran_layanan_id);

        // Update the status_pendaftaran to 2 (in process of application)
        $pendaftaran->status_pendaftaran = 2;
        $pendaftaran->save();

        // Send email to the user
        Mail::to(Auth::user()->email)->send(new PendaftaranLayananMail($pendaftaran));

        // Redirect with a success message
        return redirect()->route('home')->with('success', 'Permohonan berhasil diajukan dan email telah dikirim.');
    }
    public function cancel($id)
    {
        $pendaftaran = PendaftaranLayanan::find($id);

        // Check if the registration exists and belongs to the authenticated user
        if ($pendaftaran && $pendaftaran->user_id == Auth::id()) {
            // Optionally, add additional checks for status if necessary
            $pendaftaran->delete(); // Delete the registration

            return redirect()->route('home')->with('success', 'Pendaftaran berhasil dibatalkan.');
        }

        return redirect()->route('home')->with('error', 'Pendaftaran tidak ditemukan atau Anda tidak memiliki izin untuk membatalkannya.');
    }
    public function pindahPendudukStepOne(Request $request)
    {
        // Decrypt ID jika diperlukan
        $id = $request->query('id');
        if ($id) {
            try {
                $jenis_layanan_id = Crypt::decrypt($id);
                // Gunakan $decryptedId untuk mengambil data jika diperlukan
            } catch (\Illuminate\Contracts\Encryption\DecryptException $e) {
                // Handle error jika decryption gagal
                return redirect()->back()->with('error', 'Invalid ID');
            }
        }

        // Logika untuk mempersiapkan data form jika diperlukan

        return view('layanan.pindah_penduduk.step_one', compact('jenis_layanan_id'));
    }

    public function pindahPendudukStepTwo(Request $request)
    {
        // Validasi input
        $request->validate([
            'jenis_layanan_id' => 'required|exists:jenis_layanan,id',
            // Tambahkan validasi untuk field lainnya sesuai kebutuhan
        ]);

        // Cek pendaftaran yang sudah ada dengan jenis layanan ini
        $existingPendaftaran = PendaftaranLayanan::where('user_id', Auth::id())
            ->where('jenis_layanan_id', $request->jenis_layanan_id)
            ->get();

        // Cek jika ada pendaftaran dengan status 0, 1, atau 2
        $hasActiveRegistration = $existingPendaftaran->contains(function ($pendaftaran) {
            return in_array($pendaftaran->status_pendaftaran, [0, 1, 2]);
        });

        if ($hasActiveRegistration) {
            return redirect()->route('home')->with('error', 'Anda tidak dapat mendaftar untuk layanan ini saat status pendaftaran Anda masih ada permohonan yang diajukan.');
        }

        DB::beginTransaction();

        try {
            $pendaftaranLayanan = null;

            // Cek status pendaftaran yang ada
            $existingPendaftaranWithStatus9 = $existingPendaftaran->firstWhere('status_pendaftaran', 9);
            $existingPendaftaranWithStatus0 = $existingPendaftaran->firstWhere('status_pendaftaran', 0);

            if ($existingPendaftaranWithStatus9) {
                // Jika status pendaftaran adalah 9, buat pendaftaran baru
                $pendaftaranLayanan = PendaftaranLayanan::create([
                    'user_id' => Auth::id(),
                    'jenis_layanan_id' => $request->jenis_layanan_id,
                    'status_pendaftaran' => 0, // Asumsikan status awal adalah 0
                ]);
            } elseif ($existingPendaftaranWithStatus0) {
                // Jika status pendaftaran adalah 0, gunakan pendaftaran yang ada
                $pendaftaranLayanan = $existingPendaftaranWithStatus0;
            } else {
                // Jika tidak ada pendaftaran sebelumnya, buat baru
                $pendaftaranLayanan = PendaftaranLayanan::create([
                    'user_id' => Auth::id(),
                    'jenis_layanan_id' => $request->jenis_layanan_id,
                    'status_pendaftaran' => 0, // Asumsikan status awal adalah 0
                ]);
            }

            // Menyimpan rincian pendaftaran
            $metadataIsian = $request->except(['_token', 'jenis_layanan_id']);

            RincianPendaftaran::updateOrCreate(
                ['pendaftaran_layanan_id' => $pendaftaranLayanan->id],
                ['metadata_isian' => json_encode($metadataIsian)]
            );

            DB::commit();

            // Redirect ke halaman selanjutnya atau tampilkan pesan sukses
            return redirect()->route('pindah_penduduk.step3', $pendaftaranLayanan->id)->with('success', 'Data berhasil disimpan.');

        } catch (\Exception $e) {
            DB::rollback();
            return back()->with('error', 'Terjadi kesalahan saat menyimpan data. ' . $e->getMessage())->withInput();
        }
    }


    public function layanan_step_one($id)
    {
        // Decrypt ID
        try {
            $jenis_layanan_id = Crypt::decrypt($id);
        } catch (\Illuminate\Contracts\Encryption\DecryptException $e) {
            return redirect()->back()->with('error', 'Invalid ID');
        }

        // Cari layanan berdasarkan ID
        $layanan = JenisLayanan::findOrFail($jenis_layanan_id);

        // Buat slug dari nama_layanan untuk menentukan view
        $slug = \Illuminate\Support\Str::slug($layanan->nama_layanan, '_');

        // View akan dipanggil secara dinamis sesuai slug layanan
        return view('layanan.' . $slug . '.step_one', compact('layanan', 'jenis_layanan_id'));
    }


}
