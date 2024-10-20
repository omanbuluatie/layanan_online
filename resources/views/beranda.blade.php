<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Codescandy" />

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/template/assets/favicon.ico') }}" />

    <!-- darkmode js -->
    <script src="{{ asset('public/template/assets/js/vendors/darkMode.js') }}"></script>

    <!-- Libs CSS -->
    <link href="{{ asset('public/template/assets/fonts/feather/feather.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/template/assets/libs/bootstrap-icons/font/bootstrap-icons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/template/assets/libs/simplebar/dist/simplebar.min.css') }}" rel="stylesheet" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('public/template/assets/css/theme.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('public/template/assets/libs/tiny-slider/dist/tiny-slider.css') }}" />

    <title>Layanan Online Administrasi Kependudukan - Disdukcapil Jayawijaya</title>
</head>


<body class="bg-white">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('public/template/') }}/assets/images/logo.png" alt="Disdukcapil Jayawijaya" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#layanan">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/register')}}">Daftar Akun</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/login')}}" >Masuk</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section py-5 bg-primary text-white text-center">
        <div class="container">
            <h1 class="display-4">Layanan Online Administrasi Kependudukan</h1>
            <p class="lead">Kemudahan layanan administrasi kependudukan di Dinas Kependudukan dan Pencatatan Sipil
                Kabupaten Jayawijaya.</p>
            <a href="#layanan" class="btn btn-lg btn-light">Lihat Layanan</a>
            <a href="https://disdukcapil.jayawijayakab.go.id/public/download" class="btn btn-lg btn-outline-light">Download Formulir</a>
        </div>
    </section>

    <!-- Layanan Section -->
    <section id="layanan" class="py-5">
        <div class="container">
            <h2 class="h1 text-center mb-4">Layanan Kami</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card border-light mb-4 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Pendaftaran Penduduk</h5>
                            <p class="card-text">Layanan penerbitan Kartu Keluarga (KK) dan SKPWNI (Surat Keterangan
                                Pindah
                                WNI).</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-light mb-4 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Pencatatan Sipil</h5>
                            <p class="card-text">Layanan penerbitan Akta Kelahiran dan dokumen pencatatan sipil lainnya.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-light mb-4 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Layanan Lainnya</h5>
                            <p class="card-text">Layanan lainnya terkait administrasi kependudukan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Formulir Section -->
    <section id="formulir" class="py-5 bg-light">
        <div class="container text-center">
            <h2 class="h1 mb-4">Download Formulir</h2>
            <p class="mb-4">Unduh formulir yang diperlukan untuk layanan administrasi kependudukan.</p>
            <a href="#" class="btn btn-lg btn-primary">Unduh Formulir</a>
        </div>
    </section>

    <!-- Kontak Section -->
    <section id="kontak" class="py-5">
        <div class="container text-center">
            <h2 class="h1 mb-4">Kontak Kami</h2>
            <p class="mb-4">Jika Anda memiliki pertanyaan atau membutuhkan bantuan, jangan ragu untuk menghubungi
                kami.</p>
            <ul class="list-unstyled">
                <li><i class="bi bi-geo-alt-fill"></i> Alamat: Jl. Jayawijaya No.1, Wamena</li>
                <li><i class="bi bi-telephone-fill"></i> Telepon: (0969) 123456</li>
                <li><i class="bi bi-envelope-fill"></i> Email: disdukcapil@jayawijaya.go.id</li>
            </ul>
        </div>
    </section>

    <!-- Footer -->

    <footer class="footer bg-dark py-8">
        <div class="container">
            <div class="row gy-6 gy-xl-0 pb-8">
                <div class="col-xl-3 col-lg-12 col-md-6 col-12">
                    <div class="d-flex flex-column gap-4">
                        <div>
                            <img src="{{ asset('public/template/') }}/assets/images/logo.png" alt="Disdukcapil Jayawijaya" />
                        </div>
                        <p class="mb-0">Layanan administrasi kependudukan online untuk memudahkan masyarakat
                            Kabupaten Jayawijaya.</p>
                    </div>
                </div>
                <div class="col-xl-2 col-md-3 col-6">
                    <div class="d-flex flex-column gap-3">
                        <span class="text-white">Perusahaan</span>
                        <ul class="list-unstyled mb-0 d-flex flex-column nav nav-footer nav-x-0">
                            <li>
                                <a href="#!" class="nav-link">Tentang Kami</a>
                            </li>
                            <li>
                                <a href="#!" class="nav-link">Hubungi Kami</a>
                            </li>
                            <li>
                                <a href="#!" class="nav-link">Berita dan Blog</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-md-3 col-6">
                    <div class="d-flex flex-column gap-3">
                        <span class="text-white">Layanan</span>
                        <ul class="list-unstyled mb-0 d-flex flex-column nav nav-footer nav-x-0">
                            <li>
                                <a href="#layanan" class="nav-link">Pendaftaran Penduduk</a>
                            </li>
                            <li>
                                <a href="#layanan" class="nav-link">Pencatatan Sipil</a>
                            </li>
                            <li>
                                <a href="#layanan" class="nav-link">Layanan Lainnya</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="d-flex flex-column gap-5">
                        <div class="d-flex flex-column gap-3">
                            <span class="text-white">Kontak Kami</span>
                            <ul class="list-unstyled mb-0 d-flex flex-column nav nav-footer nav-x-0">
                                <li>
                                    <i class="bi bi-telephone-fill"></i> Telepon: (0969) 123456
                                </li>
                                <li>
                                    <i class="bi bi-envelope-fill"></i> Email: disdukcapil@jayawijaya.go.id
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>



    <!-- Scroll top -->
    <div class="btn-scroll-top">
        <svg class="progress-square svg-content" width="100%" height="100%" viewBox="0 0 40 40">
            <path
                d="M8 1H32C35.866 1 39 4.13401 39 8V32C39 35.866 35.866 39 32 39H8C4.13401 39 1 35.866 1 32V8C1 4.13401 4.13401 1 8 1Z" />
        </svg>
    </div>

    <!-- Scripts -->
    <!-- Libs JS -->
    <script src="{{ asset('public/template/assets/libs/%40popperjs/core/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('public/template/assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/template/assets/libs/simplebar/dist/simplebar.min.js') }}"></script>

    <!-- Theme JS -->
    <script src="{{ asset('public/template/assets/js/theme.min.js') }}"></script>

    <script src="{{ asset('public/template/assets/libs/tiny-slider/dist/min/tiny-slider.js') }}"></script>
    <script src="{{ asset('public/template/assets/js/vendors/tnsSlider.js') }}"></script>

</body>

</html>
