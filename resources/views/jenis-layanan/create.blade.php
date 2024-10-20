@extends('layouts.admin-dashboard') <!-- Atau layout yang Anda gunakan -->
@section('title')
Tambah Jenis Layanan
@stop
@section('content')
<section class="container-fluid p-4">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <div class="border-bottom pb-3 mb-3 d-flex flex-column flex-lg-row gap-3 align-items-lg-center justify-content-between">
                <div class="d-flex flex-column gap-1">
                    <h1 class="mb-0 h2 fw-bold">Tambah Jenis Layanan</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ url('dashboard') }}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Tambah Jenis Layanan</li>
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
            <div class="offset-xl-3 col-xl-6 col-md-12 col-12">
                <div class="card">
                    <div class="card-body p-lg-6">
                        <form action="{{ route('jenis-layanan.store') }}" method="POST" class="row gx-3 needs-validation" novalidate>
                            @csrf
                            <div class="mb-3 col-12">
                                <label class="form-label">Nama Layanan <span class="text-danger">*</span></label>
                                <input type="text" name="nama_layanan" class="form-control" placeholder="Masukkan nama layanan" required />
                                <div class="invalid-feedback">Silakan masukkan nama layanan.</div>
                            </div>
                            <div class="mb-3 col-12">
                                <label class="form-label">Deskripsi</label>
                                <textarea name="deskripsi" class="form-control" placeholder="Masukkan deskripsi layanan..." rows="3" required></textarea>
                                <div class="invalid-feedback">Silakan masukkan deskripsi.</div>
                            </div>
                            <div class="mb-3 col-12">
                                <label class="form-label">Status <span class="text-danger">*</span></label>
                                <div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="is_active" id="active" value="1" checked required>
                                        <label class="form-check-label" for="active">
                                            Aktif
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="is_active" id="inactive" value="0" required>
                                        <label class="form-check-label" for="inactive">
                                            Tidak Aktif
                                        </label>
                                    </div>
                                    <div class="invalid-feedback">Silakan pilih status.</div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Simpan</button>
                                <button type="button" class="btn btn-outline-primary ms-2" onclick="window.history.back();">Tutup</button>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
