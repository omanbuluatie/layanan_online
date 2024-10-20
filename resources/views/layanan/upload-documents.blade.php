@extends('layouts.user-dashboard')
@section('title')
    Upload Dokumen
@stop
@section('content')
    <section class="container-fluid p-2">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div
                    class="border-bottom pb-3 mb-3 d-flex flex-column flex-lg-row gap-3 align-items-lg-center justify-content-between">
                    <div class="d-flex flex-column gap-1">
                        <h1 class="mb-0 h2 fw-bold">Unggah Dokumen</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Unggah Dokumen</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-2">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 col-md-12 col-12">
                    <div class="card">
                        <div class="card-body p-lg-6">
                            <!-- Tampilkan pesan error jika ada -->
                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif

                            <!-- Tampilkan informasi pendaftaran dan jenis layanan -->
                            <div class="mb-4">
                                <h5>Informasi Pendaftaran</h5>
                                <p><strong>Jenis Layanan:</strong> {{ $pendaftaran->jenisLayanan->nama_layanan }}</p>
                                <p><strong>Status Pendaftaran:</strong>
                                    {{ $pendaftaran->status_pendaftaran == 0 ? 'Dalam Proses' : 'Selesai' }}</p>
                            </div>

                            <form id="uploadForm">
                                @csrf
                                <input type="hidden" name="pendaftaran_layanan_id" value="{{ $pendaftaran->id }}">

                                @foreach ($pendaftaran->jenisLayanan->persyaratan as $persyaratan)
                                    <div class="mb-3">
                                        <label class="form-label">{{ $persyaratan->nama_persyaratan }} <span
                                                class="text-danger">*</span></label>
                                        @php
                                            // Cek apakah dokumen sudah pernah diunggah
                                            $existingDocument = $pendaftaran->dokumen->firstWhere(
                                                'nama_persyaratan',
                                                $persyaratan->nama_persyaratan,
                                            );
                                        @endphp

                                        @if ($existingDocument)
                                            <button type="button" class="btn btn-primary mt-2"
                                                onclick="window.open('{{ asset($existingDocument->file_path) }}', '_blank')">Lihat
                                                Berkas</button>
                                            <button type="button" class="btn btn-danger mt-2 delete-button"
                                                data-id="{{ $existingDocument->id }}"
                                                data-nama="{{ $persyaratan->nama_persyaratan }}">Hapus Berkas</button>
                                        @else
                                            <input type="file" required name="dokumen[{{ $persyaratan->id }}]"
                                                class="form-control" required>
                                            <input type="hidden" name="nama_persyaratan[{{ $persyaratan->id }}]"
                                                value="{{ $persyaratan->nama_persyaratan }}">
                                            <button type="button" class="btn btn-success mt-2 upload-button"
                                                data-id="{{ $persyaratan->id }}">Unggah</button>
                                            <div class="upload-status" id="status-{{ $persyaratan->id }}"></div>
                                            <div class="invalid-feedback">Silakan unggah dokumen yang valid.</div>
                                            @error('dokumen.' . $persyaratan->id)
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        @endif
                                    </div>
                                @endforeach

                                <div class="d-flex justify-content-between">
                                    <a href="{{ route('home') }}" class="btn btn-outline-primary">Kembali</a>
                                    <a href="{{ route('statement.page', ['pendaftaran_layanan_id' => $pendaftaran->id]) }}"
                                        class="btn btn-primary">Selanjutnya</a>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.upload-button').click(function() {
                var persyaratanId = $(this).data('id');
                var formData = new FormData();
                var fileInput = $('input[name="dokumen[' + persyaratanId + ']"]')[0];

                if (fileInput.files.length === 0) {
                    alert('Silakan pilih dokumen untuk diunggah.');
                    return;
                }

                formData.append('dokumen', fileInput.files[0]);
                formData.append('pendaftaran_layanan_id', $('input[name="pendaftaran_layanan_id"]').val());
                formData.append('nama_persyaratan', $('input[name="nama_persyaratan[' + persyaratanId +
                    ']"]').val());
                formData.append('_token', '{{ csrf_token() }}');

                $.ajax({
                    url: '{{ route('upload.documents.submit') }}',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        location.reload();
                        // $('#status-' + persyaratanId).html(
                        //     '<div class="text-success">Dokumen berhasil diunggah.</div>');
                        // // Sembunyikan input file dan tampilkan tombol "Lihat Berkas"
                        // $('input[name="dokumen[' + persyaratanId + ']"]').parent()
                        //     .hide(); // Sembunyikan input file
                        // $('<button type="button" class="btn btn-primary mt-2" onclick="window.open(\'' +
                        //         response.file_url + '\', \'_blank\')">Lihat Berkas</button>')
                        //     .appendTo('#status-' +
                        //         persyaratanId); // Tambahkan tombol "Lihat Berkas"
                    },
                    error: function(xhr) {
                        $('#status-' + persyaratanId).html(
                            '<div class="text-danger">Gagal mengunggah dokumen.</div>');
                    }
                });
            });

            $('.delete-button').click(function() {
                var documentId = $(this).data('id');
                var namaPersyaratan = $(this).data('nama');
                var pendaftaranLayananId = $('input[name="pendaftaran_layanan_id"]').val();

                if (confirm('Apakah Anda yakin ingin menghapus berkas?')) {
                    $.ajax({
                        url: '{{ route('upload.documents.delete') }}',
                        type: 'POST',
                        data: {
                            id: documentId,
                            pendaftaran_layanan_id: pendaftaranLayananId,
                            nama_persyaratan: namaPersyaratan,
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            // Tampilkan kembali input file
                            location.reload();

                            // $('#status-' + response.persyaratan_id).html(
                            //     '<input type="file" name="dokumen[' + response
                            //     .persyaratan_id + ']" class="form-control" required>' +
                            //     '<input type="hidden" name="nama_persyaratan[' + response
                            //     .persyaratan_id + ']" value="' + response.nama_persyaratan +
                            //     '">' +
                            //     '<button type="button" class="btn btn-success mt-2 upload-button" data-id="' +
                            //     response.persyaratan_id + '">Unggah</button>' +
                            //     '<div class="upload-status" id="status-' + response
                            //     .persyaratan_id + '"></div>' +
                            //     '<div class="invalid-feedback">Silakan unggah dokumen yang valid.</div>'
                            // );
                        },
                        error: function(xhr) {
                            alert('Gagal menghapus berkas.');
                        }
                    });
                }
            });
        });
    </script>
@endsection
