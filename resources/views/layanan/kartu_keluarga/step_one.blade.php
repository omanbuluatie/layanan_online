@extends('layouts.user-dashboard')
@section('title')
    Entri Biodata Penduduk
@stop
@section('content')
    <section class="container-fluid p-4">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div
                    class="border-bottom pb-3 mb-3 d-flex flex-column flex-lg-row gap-3 align-items-lg-center justify-content-between">
                    <div class="d-flex flex-column gap-1">
                        <h1 class="mb-0 h2 fw-bold">Tambah Biodata Penduduk</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ url('dashboard') }}">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Tambah Biodata Penduduk</li>
                            </ol>
                        </nav>
                    </div>
                    <div>
                        <a href="{{ route('jenis-layanan.index') }}" class="btn btn-primary me-2">Kembali</a>
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
                                    <label class="form-label">No. KK <span class="text-danger">*</span></label>
                                    <input type="text" name="no_kk" class="form-control" required>
                                </div>



                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Jenis Penerbitan Kartu Keluarga <span
                                            class="text-danger">*</span></label>
                                    <select name="jenis_permohonan" class="form-select" required>
                                        <option value="">Pilih Jenis </option>
                                        <option value="Keluarga Baru">Keluarga Baru</option>
                                        <option value="Penambahan Anggota Keluarga">Penambahan Anggota Keluarga</option>
                                        {{-- <option value="Surat Keterangan Pindah Luar Negeri">Surat Keterangan Pindah Luar Negeri</option> --}}
                                        {{-- <option value="Surat Keterangan Tempat Tinggal">Surat Keterangan Tempat Tinggal</option> --}}
                                    </select>
                                </div>
                                <h4>Data Individu</h4>
                                <hr>
                                <!-- Nama Lengkap -->
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                                    <input type="text" name="nama_lengkap[]" class="form-control" required>
                                </div>

                                <!-- Jenis Kelamin -->
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Jenis Kelamin <span class="text-danger">*</span></label>
                                    <select name="jenis_kelamin[]" class="form-select" required>
                                        <option value="">== PILIHAN ==</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>

                                <!-- Tempat Lahir -->
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Tempat Lahir <span class="text-danger">*</span></label>
                                    <input type="text" name="tempat_lahir[]" class="form-control" required>
                                </div>

                                <!-- Tanggal Lahir -->
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Tanggal Lahir<span class="text-danger">*</span></label>
                                    <input type="text" name="tanggal_lahir[]" class="form-control" required>
                                </div>

                                <!-- Golongan Darah -->
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Golongan Darah <span class="text-danger">*</span></label>
                                    <select name="golongan_darah[]" class="form-select" required>
                                        <option value="">== PILIHAN ==</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="AB">AB</option>
                                        <option value="O">O</option>
                                        <option value="TIDAK TAHU">TIDAK TAHU</option>
                                    </select>
                                </div>

                                <!-- Agama/Kepercayaan -->
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Agama/Kepercayaan <span class="text-danger">*</span></label>
                                    <select name="agama[]" class="form-select" required>
                                        <option value="">== PILIHAN ==</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Kepercayaan Terhadap YME">Kepercayaan Terhadap YME</option>
                                    </select>
                                </div>

                                <!-- Status Perkawinan -->
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Status Perkawinan <span class="text-danger">*</span></label>
                                    <select name="status_perkawinan[]" class="form-select" required>
                                        <option value="">== PILIHAN ==</option>
                                        <option value="Belum Kawin">Belum Kawin</option>
                                        <option value="Kawin">Kawin</option>
                                        <option value="Cerai Hidup">Cerai Hidup</option>
                                        <option value="Cerai Mati">Cerai Mati</option>
                                    </select>
                                </div>

                                <!-- Tambahan fields sesuai gambar lainnya -->

                                <!-- Tanggal Perkawinan -->
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Tanggal Perkawinan</label>
                                    <input type="text" name="tanggal_perkawinan[]" class="form-control">
                                </div>

                                <!-- Tanggal Perceraian -->
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Tanggal Perceraian</label>
                                    <input type="text" name="tanggal_perceraian[]" class="form-control">
                                </div>

                                <!-- Kelainan Fisik dan Mental -->
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Kelainan Fisik dan Mental <span
                                            class="text-danger">*</span></label>
                                    <select name="kelainan_fisik[]" class="form-select" required>
                                        <option value="">== PILIHAN ==</option>
                                        <option value="Tidak Ada">Tidak Ada</option>
                                        <option value="Ada">Ada</option>
                                    </select>
                                </div>

                                <!-- Penyandang Disabilitas -->
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Penyandang Disabilitas</label>
                                    <select name="penyandang_disabilitas[]" class="form-select">
                                        <option value="">== PILIHAN ==</option>
                                        <option value="Tidak">Tidak</option>
                                        <option value="Ya">Ya</option>
                                    </select>
                                </div>
                                
                                <h4>Data Orang Tua</h4>
                                <hr>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">NIK IBU</label>
                                    <input type="text" name="nik_ibu[]" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">NAMA IBU </label>
                                    <input type="text" name="nama_lgkp_ibu[]" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">NIK AYAH</label>
                                    <input type="text" name="nik_ayah[]" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">NAMA AYAH</label>
                                    <input type="text" name="nama_lgkp_ayah[]" class="form-control">
                                </div>


                                <hr>
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
        $(document).ready(function() {
            // Add Data Individu
            $('#add-individu').click(function() {
                var html = `<div class="row individu-item">
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                            <input type="text" name="nama_lengkap[]" class="form-control" required>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Jenis Kelamin <span class="text-danger">*</span></label>
                            <select name="jenis_kelamin[]" class="form-select" required>
                                <option value="">== PILIHAN ==</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <button type="button" class="btn btn-danger remove-individu">Hapus</button>
                        </div>
                        <hr>
                    </div>`;
                $('#dynamic-individu').append(html);
            });

            // Add Data Orang Tua
            $('#add-orang-tua').click(function() {
                var html = `<div class="row orang-tua-item">
                        <div class="mb-3 col-md-6">
                            <label class="form-label">NIK Ibu</label>
                            <input type="text" name="nik_ibu[]" class="form-control">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Nama Ibu</label>
                            <input type="text" name="nama_lgkp_ibu[]" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <button type="button" class="btn btn-danger remove-orang-tua">Hapus</button>
                        </div>
                        <hr>
                    </div>`;
                $('#dynamic-orang-tua').append(html);
            });

            // Remove Individu Item
            $(document).on('click', '.remove-individu', function() {
                $(this).closest('.individu-item').remove();
            });

            // Remove Orang Tua Item
            $(document).on('click', '.remove-orang-tua', function() {
                $(this).closest('.orang-tua-item').remove();
            });
        });
    </script>
@endsection
