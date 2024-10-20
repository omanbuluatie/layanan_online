<?php

use App\Http\Controllers\Auth\ActivationController;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DokumenAdmindukController;
use App\Http\Controllers\JenisLayananController;
use App\Http\Controllers\MetaDataIsianController;
use App\Http\Controllers\PendaftaranLayananController;
use App\Http\Controllers\PersyaratanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Models\JenisLayanan;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/activation-sent', [RegisterController::class, 'activationSent'])->name('activation.sent');
Route::get('/activate/{token}', [ActivationController::class, 'activate'])->name('activate_acc');



Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();
Auth::routes([
    'register' => true, // Registration Routes...
    'reset' => true, // Password Reset Routes...
    'verify' => true, // Email Verification Routes...
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//admin
// Rute untuk Admin Login
Route::get('admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');

// Rute yang hanya dapat diakses oleh admin
Route::middleware('admin')->group(function () {
    Route::get('admin/dashboard', function () {
        return view('admin.dashboard'); // Tampilkan dashboard admin
    })->name('admin.dashboard');
    Route::post('admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
});




Route::get('/select-service', [ServiceController::class, 'show'])->name('select.service');
Route::post('/select-service', [ServiceController::class, 'store'])->name('select.service.submit');

Route::get('/upload-documents', [ServiceController::class, 'uploadDocuments'])->name('upload.documents');
Route::post('/upload-documents', [ServiceController::class, 'storeDocuments'])->name('upload.documents.submit');
Route::post('/upload-documents/submit', [ServiceController::class, 'submitUploadDocuments'])->name('upload.documents.submit');
Route::post('/upload/documents/delete', [ServiceController::class, 'deleteDocument'])->name('upload.documents.delete');

Route::get('/statement/{pendaftaran_layanan_id}', [ServiceController::class, 'showStatementPage'])->name('statement.page');

Route::post('/pendaftaran/update-status', [ServiceController::class, 'updateStatusPendaftaran'])->name('pendaftaran.update.status');
Route::delete('/pendaftaran/{id}/cancel', [ServiceController::class, 'cancel'])->name('pendaftaran.cancel');


Route::resource('jenis-layanan', JenisLayananController::class);
Route::resource('persyaratan', PersyaratanController::class);
Route::resource('metadata-isian', MetaDataIsianController::class);

Route::get('/detail-registration/{pendaftaran}', [ServiceController::class, 'showDetailForm'])->name('detail.registration');

Route::post('/pendaftaran/{pendaftaran}', [ServiceController::class, 'submitDetail'])->name('detail.pendaftaran.submit');

Route::get('permohonan/daftar', [PendaftaranLayananController::class, 'index'])->name('permohonan.daftar');
Route::post('permohonan/indexdaftar', [PendaftaranLayananController::class, 'index_pendaftaran'])->name('pendaftaran.index');
Route::get('pendaftaran/{pendaftaran_id}/detail', [PendaftaranLayananController::class, 'show'])->name('pendaftaran.show');
Route::get('/pendaftaran/selesai/{id}', [PendaftaranLayananController::class, 'selesai'])->name('pendaftaran.selesai');
Route::get('/pendaftaran/proses/{id}', [PendaftaranLayananController::class, 'proses'])->name('pendaftaran.proses');
Route::post('/dokumen_adminduk', [DokumenAdmindukController::class, 'store'])->name('dokumen_adminduk.store');
Route::delete('/dokumen_adminduk/delete/{id}', [DokumenAdmindukController::class, 'destroy'])->name('dokumen_adminduk.destroy');
Route::post('/pendaftaran/{id}/update-status', [PendaftaranLayananController::class, 'tolakPengajuan'])->name('pendaftaran.tolak');

Route::post('/daftar', [RegisterController::class, 'daftar'])->name('daftar');


Route::get('/activation/resend', [App\Http\Controllers\Auth\ActivationController::class, 'showResendForm'])->name('activation.resend.form');
Route::post('/activation/resend', [App\Http\Controllers\Auth\ActivationController::class, 'resend'])->name('activation.resend');
Route::get('/activate/{token}', [App\Http\Controllers\Auth\ActivationController::class, 'activate'])->name('user.activate');




// Route::get('/pindah_penduduk', [ServiceController::class, 'pindahPendudukStepOne'])->name('pindah_penduduk.step_one');
// Route::post('/pindah_penduduk/step_two', [ServiceController::class, 'pindahPendudukStepTwo'])->name('pindah_penduduk.step_two');
// Route::get('/pindah_penduduk/step_three', [ServiceController::class, 'pindahPendudukStepThree'])->name('pindah_penduduk.step3');

Route::get('/step_one/{id}', [ServiceController::class, 'layanan_step_one'])
    ->name('layanan.step_one');

    Route::get('/step_two/{id}', [ServiceController::class, 'layanan_step_one'])
    ->name('layanan.step_two');

