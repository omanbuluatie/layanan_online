<!doctype html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Codescandy" />

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/template/assets/favicon.ico') }}" />
    <script src="{{ asset('public/template/assets/js/vendors/darkMode.js') }}"></script>

    <!-- Libs CSS -->
    <link href="{{ asset('public/template/assets/fonts/feather/feather.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/template/assets/libs/bootstrap-icons/font/bootstrap-icons.min.css') }}"
        rel="stylesheet" />
    <link href="{{ asset('public/template/assets/libs/simplebar/dist/simplebar.min.css') }}" rel="stylesheet" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('public/template/assets/css/theme.min.css') }}" />


    <title>Layana Online Disdukcapil Jayawijaya</title>
</head>

<body class="bg-white">
    <!-- Navbar -->
    <!-- navbar mentor -->
    <nav class="navbar navbar-expand-lg">
        <div class="container px-0">
            {{-- <a class="navbar-brand" href="{{ asset('public/template') }}/index.html"><img src="{{ asset('public/template') }}/assets/images/mentor/geeks-mentor.svg"
                    alt="Geeks" /></a> --}} <a href="{{url('/')}}">DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL KABUPATEN JAYAWIJAYA</a>
            <div class="d-flex align-items-center order-lg-3">
                <div class="d-flex align-items-center">
                    <div class="dropdown me-2">
                        <button class="btn btn-light btn-icon rounded-circle d-flex align-items-center" type="button"
                            aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
                            <i class="bi theme-icon-active"></i>
                            <span class="visually-hidden bs-theme-text">Toggle theme</span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bs-theme-text">
                            <li>
                                <button type="button" class="dropdown-item d-flex align-items-center"
                                    data-bs-theme-value="light" aria-pressed="false">
                                    <i class="bi theme-icon bi-sun-fill"></i>
                                    <span class="ms-2">Light</span>
                                </button>
                            </li>
                            <li>
                                <button type="button" class="dropdown-item d-flex align-items-center"
                                    data-bs-theme-value="dark" aria-pressed="false">
                                    <i class="bi theme-icon bi-moon-stars-fill"></i>
                                    <span class="ms-2">Dark</span>
                                </button>
                            </li>
                            <li>
                                <button type="button" class="dropdown-item d-flex align-items-center active"
                                    data-bs-theme-value="auto" aria-pressed="true">
                                    <i class="bi theme-icon bi-circle-half"></i>
                                    <span class="ms-2">Auto</span>
                                </button>
                            </li>
                        </ul>
                    </div>
                    
                </div>
                <div>
                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="icon-bar top-bar mt-0"></span>
                        <span class="icon-bar middle-bar"></span>
                        <span class="icon-bar bottom-bar"></span>
                    </button>
                </div>
            </div>
            <!-- Button -->

            <!-- Collapse -->
            
        </div>
    </nav>

    <!-- Page Content -->
    <main>
        @yield('content')

        <!--Hero section-->
        
    </main>

   
   
    <!-- footer -->
    <!-- footer -->
    <footer class="py-lg-8 py-5 footer footer-dark">
        <div class="container">
            <div class="row gy-6 gy-xl-0 pb-8">
                <div class="col-xl-4 col-lg-12 col-md-6 col-12">
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
                        <span class="text-white">Organisasi</span>
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
                <div class="col-xl-3 col-md-3 col-6">
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
            <div class="row mt-lg-7 mt-5">
                <!-- Desc -->
                <div class="col-lg-6 offset-lg-3 col-12">
                    <span class="d-flex justify-content-center">
                        ©
                        <span id="copyright2" class="me-2">
                            <script>
                                document.getElementById("copyright2").appendChild(document.createTextNode(new Date().getFullYear()));
                            </script>
                        </span>
                        BIDANG PENGELOLAAN INFORMASI ADMINISTRASI KEPENDUDUKAN
                    </span>
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
    <!-- Libs JS -->
    <script src="{{ asset('public/template/assets/libs/%40popperjs/core/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('public/template/assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/template/assets/libs/simplebar/dist/simplebar.min.js') }}"></script>

    <!-- Theme JS -->
    <script src="{{ asset('public/template/assets/js/theme.min.js') }}"></script>

    <script src="{{ asset('public/template/assets/libs/tiny-slider/dist/min/tiny-slider.js') }}"></script>
    <script src="{{ asset('public/template/assets/js/vendors/tnsSlider.js') }}"></script>


    <script src="{{ asset('public/template') }}/assets/libs/typed.js/dist/typed.umd.js"></script>
    <script src="{{ asset('public/template') }}/assets/js/vendors/typed.js"></script>
</body>


</html>
