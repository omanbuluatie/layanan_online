@extends('layouts.user-dashboard')
@section('title')
    Formulir Pendaftaran Perpindahan Penduduk
@stop
@section('content')
    <section class="container-fluid p-4">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div
                    class="border-bottom pb-3 mb-3 d-flex flex-column flex-lg-row gap-3 align-items-lg-center justify-content-between">
                    <div class="d-flex flex-column gap-1">
                        <h1 class="mb-0 h2 fw-bold">Formulir Pendaftaran Perpindahan Penduduk</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ url('dashboard') }}">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Formulir Perpindahan</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-6">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-12">
                    <div class="card">
                        <div class="card-body p-lg-6">
                            <form action="{{ route('layanan.step_two', $jenis_layanan_id) }}" method="POST"
                                class="row gx-3 needs-validation" novalidate>
                                @csrf
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">NIK <span class="text-danger">*</span></label>
                                    <input type="text" name="nik" value="{{ Auth::user()->nik ?? '' }}" readonly class="form-control" required>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Nama Lengkap Pemohon <span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="nama_pemohon" class="form-control" readonly value="{{ Auth::user()->name ?? '' }}" required>
                                </div>
                                
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">No. KK <span class="text-danger">*</span></label>
                                    <input type="text" name="no_kk" class="form-control" required>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Jenis Permohonan <span class="text-danger">*</span></label>
                                    <select name="jenis_permohonan" class="form-select" required>
                                        <option value="">Pilih Jenis Permohonan</option>
                                        <option value="Surat Keterangan Pindah">Surat Keterangan Pindah</option>
                                        {{-- <option value="Surat Keterangan Pindah Luar Negeri">Surat Keterangan Pindah Luar Negeri</option> --}}
                                        {{-- <option value="Surat Keterangan Tempat Tinggal">Surat Keterangan Tempat Tinggal</option> --}}
                                    </select>
                                </div>
                                <h4>Daerah Asal</h4>
                                <hr>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Alamat Asal</label>
                                    <input type="text" name="alamat_asal" class="form-control">
                                </div>
                                <div class="mb-3 col-md-3">
                                    <label class="form-label">RT</label>
                                    <input type="text" name="rt_asal" class="form-control">
                                </div>
                                <div class="mb-3 col-md-3">
                                    <label class="form-label">RW</label>
                                    <input type="text" name="rw_asal" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Desa/Kelurahan</label>
                                    <input type="text" name="desa_kelurahan_asal" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Kecamatan</label>
                                    <input type="text" name="kecamatan_asal" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Kabupaten/Kota</label>
                                    <input type="text" name="kabupaten_kota_asal" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Provinsi</label>
                                    <input type="text" name="provinsi_asal" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Kode Pos</label>
                                    <input type="text" name="kode_pos_asal" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Klasifikasi Kepindahan <span
                                            class="text-danger">*</span></label>
                                    <select name="klasifikasi_kepindahan" class="form-select" required>
                                        <option value="">Pilih Klasifikasi Kepindahan</option>
                                        <option value="Dalam satu desa/kelurahan">Dalam satu desa/kelurahan</option>
                                        <option value="Antar desa/kelurahan dalam satu kecamatan">Antar desa/kelurahan dalam
                                            satu kecamatan</option>
                                        <option value="Antar kecamatan dalam satu kabupaten/kota">Antar kecamatan dalam satu
                                            kabupaten/kota</option>
                                        <option value="Antar kabupaten/kota dalam satu provinsi">Antar kabupaten/kota dalam
                                            satu provinsi</option>
                                        <option value="Antar provinsi">Antar provinsi</option>
                                    </select>
                                </div>
                                <hr>
                                <h4>Daerah Tujuan</h4>
                                <hr>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Alamat Pindah</label>
                                    <input type="text" name="alamat_pindah" class="form-control">
                                </div>
                                <div class="mb-3 col-md-3">
                                    <label class="form-label">RT</label>
                                    <input type="text" name="rt_pindah" class="form-control">
                                </div>
                                <div class="mb-3 col-md-3">
                                    <label class="form-label">RW</label>
                                    <input type="text" name="rw_pindah" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Desa/Kelurahan</label>
                                    <input type="text" name="desa_kelurahan_pindah" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Kecamatan</label>
                                    <input type="text" name="kecamatan_pindah" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Kabupaten/Kota</label>
                                    <input type="text" name="kabupaten_kota_pindah" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Provinsi</label>
                                    <input type="text" name="provinsi_pindah" class="form-control">
                                    <input type="text" name="jenis_layanan_id" value="{{$jenis_layanan_id}}" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Kode Pos</label>
                                    <input type="text" name="kode_pos_pindah" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Alasan Pindah <span class="text-danger">*</span></label>
                                    <select name="alasan_pindah" class="form-select" required>
                                        <option value="">Pilih Alasan Pindah</option>
                                        <option value="Pekerjaan">Pekerjaan</option>
                                        <option value="Pendidikan">Pendidikan</option>
                                        <option value="Keamanan">Keamanan</option>
                                        <option value="Kesehatan">Kesehatan</option>
                                        <option value="Perumahan">Perumahan</option>
                                        <option value="Keluarga">Keluarga</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Jenis Kepindahan <span class="text-danger">*</span></label>
                                    <select name="jenis_kepindahan" class="form-select" required>
                                        <option value="">Pilih Jenis Kepindahan</option>
                                        <option value="Kepala Keluarga">Kepala Keluarga</option>
                                        <option value="Kepala Keluarga dan Sebagian Anggota Keluarga">Kepala Keluarga dan
                                            Sebagian Anggota Keluarga</option>
                                        <option value="Kepala Keluarga dan Seluruh Anggota Keluarga">Kepala Keluarga dan
                                            Seluruh Anggota Keluarga</option>
                                        <option value="Anggota Keluarga">Anggota Keluarga</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Anggota Keluarga Tidak Pindah</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio"
                                            name="anggota_keluarga_tidak_pindah" id="numpang_kk_tidak_pindah"
                                            value="Numpang KK">
                                        <label class="form-check-label" for="numpang_kk_tidak_pindah">
                                            Numpang KK
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio"
                                            name="anggota_keluarga_tidak_pindah" id="membuat_kk_baru_tidak_pindah"
                                            value="Membuat KK Baru">
                                        <label class="form-check-label" for="membuat_kk_baru_tidak_pindah">
                                            Membuat KK Baru
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Anggota Keluarga Yang Pindah</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="anggota_keluarga_pindah"
                                            id="numpang_kk_pindah" value="Numpang KK">
                                        <label class="form-check-label" for="numpang_kk_pindah">
                                            Numpang KK
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="anggota_keluarga_pindah"
                                            id="membuat_kk_baru_pindah" value="Membuat KK Baru">
                                        <label class="form-check-label" for="membuat_kk_baru_pindah">
                                            Membuat KK Baru
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="anggota_keluarga_pindah"
                                            id="nomor_kk_tetap" value="Nomor KK Tetap">
                                        <label class="form-check-label" for="nomor_kk_tetap">
                                            Nomor KK Tetap
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 col-12">
                                    <label class="form-label">Daftar Anggota Keluarga yang Pindah (Termasuk Pemohon)</label>
                                    <div id="anggota-keluarga-container">
                                        <div class="input-group mb-2">
                                            <input type="text" name="anggota_keluarga[]" class="form-control"
                                                placeholder="Nama Anggota Keluarga" required>
                                            
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-success mt-2"
                                        onclick="addAnggotaKeluarga()">Tambah Anggota Keluarga</button>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Simpan</button>
                                    <button type="button" class="btn btn-outline-primary ms-2"
                                        onclick="window.history.back();">Batal</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')

    <script>
        function addAnggotaKeluarga() {
            const container = document.getElementById('anggota-keluarga-container');
            const newInput = document.createElement('div');
            newInput.className = 'input-group mb-2';
            newInput.innerHTML = `
            <input type="text" name="anggota_keluarga[]" class="form-control" placeholder="Nama Anggota Keluarga" required>
            <button type="button" class="btn btn-danger btn-remove-anggota" onclick="removeAnggotaKeluarga(this)">Hapus</button>
        `;
            container.appendChild(newInput);
        }

        function removeAnggotaKeluarga(button) {
            const container = document.getElementById('anggota-keluarga-container');
            if (container.children.length > 1) {
                button.parentElement.remove();
            } else {
                alert('Minimal harus ada satu anggota keluarga.');
            }
        }
    </script>

@endsection
