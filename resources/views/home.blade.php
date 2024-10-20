@extends('layouts.user-dashboard')

@section('content')
    <section class="pt-5 pb-5">
        <div class="container">
            <!-- User info -->
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                    <!-- Bg -->
                    <div class="rounded-top"
                        style="background: url({{ asset('public/template/') }}/assets/images/background/profile-bg.jpg) no-repeat; background-size: cover; height: 100px">
                    </div>
                    <div class="card px-4 pt-2 pb-4 shadow-sm rounded-top-0 rounded-bottom-0 rounded-bottom-md-2">
                        <div class="d-flex align-items-end justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="me-2 position-relative d-flex justify-content-end align-items-end mt-n5">
                                    <img src="{{ asset('public/template/') }}/assets/images/avatar/avatar-3.jpg"
                                        class="avatar-xl rounded-circle border border-4 border-white" alt="avatar" />
                                </div>
                                <div class="lh-1">
                                    <h2 class="mb-0">
                                        {{ auth()->user()->name }}

                                    </h2>
                                </div>
                            </div>
                            <div>
                                <a href="{{ url('select-service') }}" class="btn btn-primary btn-sm d-none d-md-block">PILIH
                                    LAYANAN</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content -->

            <div class="row mt-0 mt-md-4">
                <div class="col-lg-3 col-md-4 col-12">
                    <!-- Side navbar -->
                    <nav class="navbar navbar-expand-md shadow-sm mb-4 mb-lg-0 sidenav">
                        <!-- Menu -->
                        <a class="d-xl-none d-lg-none d-md-none text-inherit fw-bold" href="#">Menu</a>
                        <!-- Button -->
                        <button class="navbar-toggler d-md-none icon-shape icon-sm rounded bg-primary text-light"
                            type="button" data-bs-toggle="collapse" data-bs-target="#sidenav" aria-controls="sidenav"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="fe fe-menu"></span>
                        </button>
                        <!-- Collapse navbar -->
                        <div class="collapse navbar-collapse" id="sidenav">
                            <div class="navbar-nav flex-column">
                                <span class="navbar-header">Subscription</span>
                                <ul class="list-unstyled ms-n2 mb-4">
                                    <!-- Nav item -->
                                    <li class="nav-item active">
                                        <a class="nav-link" href="student-subscriptions.html">
                                            <i class="fe fe-calendar nav-icon"></i>
                                            Permohonan saya
                                        </a>
                                    </li>
                                    <!-- Nav item -->

                                    <!-- Nav item -->
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="fe fe-power nav-icon"></i>
                                            Sign Out
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>



                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="col-lg-9 col-md-8 col-12">
                    <!-- Card -->
                    <div class="card border-0">
                        <!-- Card header -->
                        <div class="card-header d-lg-flex justify-content-between align-items-center">
                            <div class="mb-3 mb-lg-0">
                                <h3 class="mb-0">Daftar Permohonan Saya</h3>
                            </div>
                        </div>
                        <!-- Card body -->
                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif

                            @if (session('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ session('error') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif

                            @foreach ($pendaftaranLayanan as $pendaftaran)
                                <div class="border-bottom pt-0 pb-5">
                                    <div class="row mb-4">
                                        <div class="col-lg-6 col-md-8 col-7 mb-2 mb-lg-0">
                                            <span class="d-block">
                                                <span class="h4">{{ $pendaftaran->jenisLayanan->nama_layanan }}</span>
                                                <span
                                                    class="badge 
    {{ $pendaftaran->status_pendaftaran == '2' ? 'bg-info' : '' }} 
    {{ $pendaftaran->status_pendaftaran == '4' ? 'bg-info' : '' }} 
    {{ $pendaftaran->status_pendaftaran == '1' ? 'bg-warning' : '' }} 
    {{ $pendaftaran->status_pendaftaran == '0' ? 'bg-warning' : '' }} 
    {{ $pendaftaran->status_pendaftaran == '5' ? 'bg-danger' : '' }} 
    {{ $pendaftaran->status_pendaftaran == '9' ? 'bg-success' : '' }} ms-2">
                                                    {{ ucfirst($pendaftaran->status_pendaftaran) == 2 ? 'PERMOHONAN DI AJUKAN' : '' }}
                                                    {{ ucfirst($pendaftaran->status_pendaftaran) == 1 ? 'BELUM MENGUNGGAH BERKAS' : '' }}
                                                    {{ ucfirst($pendaftaran->status_pendaftaran) == 4 ? 'DIPROSES PETUGAS' : '' }}
                                                    {{ ucfirst($pendaftaran->status_pendaftaran) == 0 ? 'BELUM MENGISI METADATA' : '' }}
                                                    {{ ucfirst($pendaftaran->status_pendaftaran) == 5 ? 'PENGAJUAN DITOLAK' : '' }}
                                                    {{ ucfirst($pendaftaran->status_pendaftaran) == 9 ? 'SELESAI' : '' }}
                                                </span>

                                            </span>
                                            <p class="mb-0 fs-6">Nomor Registrasi: #{{ $pendaftaran->id }}</p>
                                        </div>
                                        @if ($pendaftaran->status_pendaftaran == 0)
                                            <div
                                                class="col-lg-3 col-md-12 col-12 d-lg-flex align-items-start justify-content-end">
                                                <a href="{{ route('detail.registration', $pendaftaran->id) }}"
                                                    class="btn btn-outline-primary btn-sm">Isi Formulir</a>
                                                <form action="{{ route('pendaftaran.cancel', $pendaftaran->id) }}"
                                                    method="POST" style="display:inline;"
                                                    id="cancel-form-{{ $pendaftaran->id }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-outline-danger btn-sm ms-2"
                                                        onclick="confirmCancellation({{ $pendaftaran->id }})">Batalkan
                                                        Pendaftaran</button>
                                                </form>
                                            </div>
                                        @endif
                                        @if ($pendaftaran->status_pendaftaran == 1)
                                            <div
                                                class="col-lg-3 col-md-12 col-12 d-lg-flex align-items-start justify-content-end">
                                                <a href="{{ url('select-service') }}"
                                                    class="btn btn-outline-primary btn-sm">Lengkapi Berkas</a>
                                                <form action="{{ route('pendaftaran.cancel', $pendaftaran->id) }}"
                                                    method="POST" style="display:inline;"
                                                    id="cancel-form-{{ $pendaftaran->id }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-outline-danger btn-sm ms-2"
                                                        onclick="confirmCancellation({{ $pendaftaran->id }})">Batalkan
                                                        Pendaftaran</button>
                                                </form>
                                            </div>
                                        @endif
                                        @if ($pendaftaran->status_pendaftaran == 5)
                                            <div class="alert alert-danger mt-3">
                                                <strong>Pengajuan Ditolak!</strong> <br>
                                                Alasan:
                                                {{ $pendaftaran->catatan_ditolak ?? 'Tidak ada alasan yang diberikan.' }}
                                            </div>
                                        @endif
                                        @if ($pendaftaran->status_pendaftaran == 9)
                                            <h5>Dokumen yang telah diupload:</h5>
                                            <ul class="list-group mt-3">
                                                @foreach ($pendaftaran->dokumenAdminduk as $dokumen)
                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-center">
                                                        {{ $dokumen->deskripsi_file }}
                                                        <div>
                                                            <a href="{{ Storage::url($dokumen->file_path) }}"
                                                                class="btn btn-info btn-sm" target="_blank">Download</a>

                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif

                                        <script>
                                            function confirmCancellation(pendaftaranId) {
                                                // Show a confirmation dialog
                                                if (confirm('Apakah Anda yakin ingin membatalkan pengajuan layanan?')) {
                                                    // If confirmed, submit the form
                                                    document.getElementById('cancel-form-' + pendaftaranId).submit();
                                                }
                                            }
                                        </script>



                                    </div>
                                    <!-- Pricing data -->
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                            <span class="fs-6">Tanggal Pengajuan</span>
                                            <h6 class="mb-0">{{ $pendaftaran->created_at->format('M d, Y') }}</h6>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                            <span class="fs-6">Keterangan</span>
                                            <h6 class="mb-0">{{ $pendaftaran->jenisLayanan->deskripsi }}</h6>
                                        </div>

                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
