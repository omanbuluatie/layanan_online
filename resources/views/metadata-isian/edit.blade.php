{{-- resources/views/metadata-isian/edit.blade.php --}}
@extends('layouts.admin-dashboard')

@section('title', 'Edit Metadata Isian')

@section('content')
<section class="container-fluid p-4">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <div class="d-flex justify-content-between border-bottom pb-3 mb-3">
                <h1 class="mb-0 h2 fw-bold">Edit Metadata Isian</h1>
                <a href="{{ route('metadata-isian.index') }}" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="offset-xl-3 col-xl-6 col-md-12 col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('metadata-isian.update', $metadataIsian->id) }}" method="POST" class="needs-validation" novalidate>
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label">Jenis Layanan <span class="text-danger">*</span></label>
                            <select name="jenis_layanan_id" class="form-select" required>
                                <option value="">Pilih Jenis Layanan</option>
                                @foreach ($jenisLayanan as $layanan)
                                    <option value="{{ $layanan->id }}" {{ $layanan->id == $metadataIsian->jenis_layanan_id ? 'selected' : '' }}>
                                        {{ $layanan->nama_layanan }}
                                    </option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">Silakan pilih jenis layanan.</div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Data <span class="text-danger">*</span></label>
                            <input type="text" name="data" class="form-control" placeholder="Masukkan data" value="{{ $metadataIsian->data }}" required />
                            <div class="invalid-feedback">Silakan masukkan data.</div>
                        </div>

                        <button class="btn btn-primary" type="submit">Update</button>
                        <button type="button" class="btn btn-outline-primary ms-2" onclick="window.history.back();">Tutup</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
