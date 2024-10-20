<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{ asset('public/template/assets/libs/flatpickr/dist/flatpickr.min.css') }}" />
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Codescandy" />

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon"
        href="{{ asset('public/template/assets/images/favicon/favicon.ico') }}" />

    <!-- darkmode js -->
    <script src="{{ asset('public/template/assets/js/vendors/darkMode.js') }}"></script>

    <!-- Libs CSS -->
    <link href="{{ asset('public/template/assets/fonts/feather/feather.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/template/assets/libs/bootstrap-icons/font/bootstrap-icons.min.css') }}"
        rel="stylesheet" />
    <link href="{{ asset('public/template/assets/libs/simplebar/dist/simplebar.min.css') }}" rel="stylesheet" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('public/template/assets/css/theme.min.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">

    <title>@yield('title')</title>
</head>


<body>
    <!-- Wrapper -->
    <div id="db-wrapper">
        <!-- navbar vertical -->
        <!-- Sidebar -->
        <nav class="navbar-vertical navbar">
            <div class="vh-100" data-simplebar>
                <!-- Brand logo -->
                <a class="navbar-brand" href="../../index.html">
                    <img src="{{asset('public/template')}}/assets/images/brand/logo/logo-inverse.svg" alt="Geeks" />
                </a>
                <!-- Navbar nav -->
                <ul class="navbar-nav flex-column" id="sideNavbar">
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#navDashboard"
                            aria-expanded="false" aria-controls="navDashboard">
                            <i class="nav-icon fe fe-home me-2"></i>
                            Dashboard
                        </a>
                        <div id="navDashboard" class="collapse show" data-bs-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}"
                                        href="{{ route('admin.dashboard') }}">
                                        Beranda
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link collapsed {{ request()->is('jenis-layanan*') ? 'active' : '' }}"
                            href="#" data-bs-toggle="collapse" data-bs-target="#navCourses" aria-expanded="false"
                            aria-controls="navCourses">
                            <i class="nav-icon fe fe-book me-2"></i>
                            Kelola Data Induk
                        </a>
                        <div id="navCourses"
                            class="collapse {{ request()->is('jenis-layanan*') || request()->is('persyaratan*') || request()->is('metadata-isian*') ? 'show' : '' }}"
                            data-bs-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('jenis-layanan') ? 'active' : '' }}"
                                        href="{{ url('jenis-layanan') }}">
                                        Jenis Layanan
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('persyaratan*') ? 'active' : '' }}"
                                        href="{{ url('persyaratan') }}">
                                        Persyaratan
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('metadata-isian*') ? 'active' : '' }}"
                                        href="{{ url('metadata-isian') }}">
                                        Metadata Isian
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link collapsed {{ request()->is('permohonan*') ? 'active' : '' }}"
                            href="#" data-bs-toggle="collapse" data-bs-target="#navPermohonan" aria-expanded="false"
                            aria-controls="navPermohonan">
                            <i class="nav-icon fe fe-file-text me-2"></i>
                            Kelola Permohonan
                        </a>
                        <div id="navPermohonan"
                            class="collapse {{ request()->is('permohonan*') ? 'show' : '' }}"
                            data-bs-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('permohonan/daftar') ? 'active' : '' }}"
                                        href="{{ url('permohonan/daftar') }}">
                                        Daftar Permohonan
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                
                
                


                <!-- Card -->
                
            </div>
        </nav>

        <!-- Page Content -->
        <main id="page-content">
            <div class="header">
                <!-- navbar -->
                <nav class="navbar-default navbar navbar-expand-lg">
                    <a id="nav-toggle" href="#">
                        <i class="fe fe-menu"></i>
                    </a>
                    <div class="ms-lg-3 d-none d-md-none d-lg-block">
                        <!-- Form -->
                        <form class="d-flex align-items-center">
                            <span class="position-absolute ps-3 search-icon">
                                <i class="fe fe-search"></i>
                            </span>
                            <input type="search" class="form-control ps-6" placeholder="Search Entire Dashboard" />
                        </form>
                    </div>
                    <!--Navbar nav -->
                    <div class="ms-auto d-flex">
                        <div class="dropdown">
                            <button class="btn btn-light btn-icon rounded-circle d-flex align-items-center"
                                type="button" aria-expanded="false" data-bs-toggle="dropdown"
                                aria-label="Toggle theme (auto)">
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
                        <ul class="navbar-nav navbar-right-wrap ms-2 d-flex nav-top-wrap">
                            
                            <!-- List -->
                            <li class="dropdown ms-2">
                                <a class="rounded-circle" href="#" role="button" id="dropdownUser"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="avatar avatar-md avatar-indicators avatar-online">
                                        <img alt="avatar" src="{{asset('public/template')}}/assets/images/avatar/avatar-1.jpg"
                                            class="rounded-circle" />
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
                                    
                                        
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="{{ route('admin.logout') }}"
                                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                                Keluar
                                            </a>
                                            <form id="logout-form" action="{{ route('admin.logout') }}"
                                                method="POST" style="display: none;">
                                                @csrf
                                            </form>

                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>

            <!-- Page Header -->
            <!-- Container fluid -->
            @yield('content')

        </main>
    </div>

    <!-- Script -->

    <!-- Libs JS -->
    <script src="{{ asset('public/template/assets/libs/%40popperjs/core/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('public/template/assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/template/assets/libs/simplebar/dist/simplebar.min.js') }}"></script>

    <!-- Theme JS -->
    <script src="{{ asset('public/template/assets/js/theme.min.js') }}"></script>

    <script src="{{ asset('public/template/assets/libs/flatpickr/dist/flatpickr.min.js') }}"></script>
    <script src="{{ asset('public/template/assets/js/vendors/flatpickr.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    @yield('scripts')
</body>

</html>
