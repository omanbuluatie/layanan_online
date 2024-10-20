@extends('layouts.admin-dashboard')

@section('title', 'Rincian Permohonan')

@section('content')
    <section class="container-fluid p-4">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Page header -->
                <div class="border-bottom pb-3 mb-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex flex-column gap-1">
                            <h3 class="mb-0 h2 fw-bold">Detail Pendaftaran Layanan</h3>
                            <!-- Breadcrumb -->
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="{{ route('permohonan.daftar') }}">Daftar Permohonan</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Rincian Permohonan</li>
                                </ol>
                            </nav>
                            <div>
                                @if ($pendaftaran->status_pendaftaran == 2)
                                    <a href="{{ route('pendaftaran.proses', $pendaftaran->id) }}"
                                        class="btn btn-primary">PROSES PENGAJUAN</a>
                                @endif
                                @if ($pendaftaran->status_pendaftaran == 4)
                                    <a href="{{ route('pendaftaran.selesai', $pendaftaran->id) }}" class="btn btn-primary"
                                        onclick="return confirmCompletion()">Update => SELESAI PROSES</a>
                                    <script>
                                        function confirmCompletion() {
                                            return confirm('Apakah Anda yakin permohonan sudah selesai sepenuhnya untuk diupdate?');
                                        }
                                    </script>
                                @endif


                                <button class="btn btn-danger ms-2" data-bs-toggle="modal"
                                    data-bs-target="#tolakModal">Tolak
                                    Pengajuan</button> <!-- Tombol Tolak Pengajuan -->

                                <!-- Modal -->
                                <div class="modal fade" id="tolakModal" tabindex="-1" aria-labelledby="tolakModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="tolakModalLabel">Alasan Penolakan</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="tolakForm"
                                                    action="{{ route('pendaftaran.tolak', $pendaftaran->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    <input type="hidden" name="pendaftaran_layanan_id"
                                                        value="{{ $pendaftaran->id }}">
                                                    <div class="mb-3">
                                                        <label for="catatan_ditolak" class="form-label">Alasan
                                                            Penolakan</label>
                                                        <textarea name="catatan_ditolak" class="form-control" id="catatan_ditolak" rows="3" required></textarea>
                                                    </div>
                                                    <div class="alert alert-warning" role="alert">
                                                        Apakah Anda yakin ingin menolak pengajuan ini?
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn btn-danger">Simpan</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="row">
            <!-- Informasi Pendaftaran -->
            <div class="col-md-6 col-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4 class="mb-1">Informasi Pendaftaran</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Nama User:</strong> {{ $pendaftaran->user->name }}</p>
                        <p><strong>Email User:</strong> {{ $pendaftaran->user->email }}</p>
                        <p><strong>NIK User:</strong> {{ $pendaftaran->user->nik }}</p>
                        <p><strong>Nomor Telepon:</strong> {{ $pendaftaran->user->nomor_telepon }}</p>
                        <p><strong>Jenis Layanan:</strong> {{ $pendaftaran->jenisLayanan->nama_layanan }}</p>
                        <p><strong>Deskripsi Layanan:</strong> {{ $pendaftaran->jenisLayanan->deskripsi }}</p>
                        <p><strong>Status Pendaftaran:</strong> {!! generateStatusBadge($pendaftaran->status_pendaftaran) !!}</p>
                    </div>
                </div>
            </div>

            <!-- Metadata dan Rincian Pendaftaran -->
            <div class="col-md-6 col-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4 class="mb-1">Metadata dan Rincian Pendaftaran</h4>
                    </div>
                    <div class="card-body">
                        @if ($pendaftaran->jenisLayanan->metaDataIsian && $pendaftaran->rincianPendaftaran->isNotEmpty())
                            @php
                                $metadata = json_decode($pendaftaran->jenisLayanan->metaDataIsian->data, true);
                                $rincianmetadata = json_decode(
                                    $pendaftaran->rincianPendaftaran->first()->metadata_isian,
                                    true,
                                );
                            @endphp

                            @if (is_array($metadata) && is_array($rincianmetadata) && count($metadata) === count($rincianmetadata))
                                @php
                                    $hasil = array_combine(array_values($metadata), array_values($rincianmetadata));
                                @endphp

                                @foreach ($hasil as $key => $value)
                                    <p><strong>{{ $key }}:</strong> {{ $value }}</p>
                                @endforeach
                            @else
                                <p>Data tidak dalam format yang benar atau jumlah elemen tidak sesuai.</p>
                            @endif
                        @else
                            <p>Tidak ada metadata isian atau rincian pendaftaran.</p>
                        @endif
                    </div>
                </div>
            </div>
            @if ($pendaftaran->status_pendaftaran == 4)

                <div class="col-md-12 col-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h4 class="mb-1">Upload Dokumen Adminduk Yang Telah Selesai Di Proses</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('dokumen_adminduk.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="file" class="form-label">Pilih Dokumen</label>
                                    <input type="file" name="file" class="form-control" id="file" required>
                                </div>
                                <div class="mb-3">
                                    <label for="deskripsi_file" class="form-label">Deskripsi File</label>
                                    <input type="text" name="deskripsi_file" class="form-control" id="deskripsi_file"
                                        required>
                                    <input type="hidden" value="{{ $pendaftaran->id }}" name="pendaftaran_layanan_id"
                                        class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary">Upload</button>
                            </form>

                            <hr>

                            <h5>Dokumen yang telah diupload:</h5>

                            <ul class="list-group mt-3">
                                @foreach ($pendaftaran->dokumenAdminduk as $dokumen)
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        {{ $dokumen->deskripsi_file }}
                                        <div>
                                            <a href="{{ Storage::url($dokumen->file_path) }}" class="btn btn-info btn-sm"
                                                target="_blank">Lihat</a>
                                            <form action="{{ route('dokumen_adminduk.destroy', $dokumen->id) }}"
                                                method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                            </form>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

            @endif
            <!-- Persyaratan Layanan -->
            <div class="col-md-12 col-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4 class="mb-1">Persyaratan Layanan</h4>
                    </div>
                    <div class="card-body">
                        <ul>
                            @foreach ($pendaftaran->jenisLayanan->persyaratan as $persyaratan)
                                <li>{{ $persyaratan->nama_persyaratan }}: {{ $persyaratan->deskripsi }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Dokumen yang Diupload -->
            <div class="col-md-12 col-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4 class="mb-1">Dokumen yang Diupload</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            @foreach ($pendaftaran->jenisLayanan->persyaratan as $persyaratan)
                                @php
                                    $dokumen = $pendaftaran->dokumen->firstWhere(
                                        'nama_persyaratan',
                                        $persyaratan->nama_persyaratan,
                                    );
                                @endphp
                                <li class="mb-4">
                                    <strong>{{ $persyaratan->nama_persyaratan }}:</strong><br>
                                    @if ($dokumen)
                                        <img width="80%" src="{{ asset($dokumen->file_path) }}"
                                            alt="{{ $persyaratan->nama_persyaratan }}" class="img-fluid mt-2"
                                            style="max-width: 80%;">
                                    @else
                                        <span class="text-muted">Belum diupload</span>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
