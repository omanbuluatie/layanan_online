<?php

namespace App\Http\Controllers;

use App\Models\PendaftaranLayanan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Ambil data pendaftaran layanan dengan relasinya
        $pendaftaranLayanan = PendaftaranLayanan::with(['jenisLayanan', 'dokumen', 'dokumenAdminduk']) // Menambahkan eager loading untuk dokumen_adminduk
            ->where('user_id', auth()->id())
            ->get();

        return view('home', compact('pendaftaranLayanan'));
    }

}
