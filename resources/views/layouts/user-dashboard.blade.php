<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Codescandy" />

    <!-- darkmode js -->
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
	<link href="<?= asset('public/css')?>/jquery.dataTables.min.css" rel="stylesheet">

    <title>@yield('title')</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid px-0">
            {{-- <a class="navbar-brand" href="../index.html"><img src="{{asset('public/template/')}}/assets/images/brand/logo/logo.svg"
                    alt="Geeks" /></a> --}}
                    <a href="{{url('/')}}">DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL KABUPATEN JAYAWIJAYA</a>
            <!-- Mobile view nav wrap -->
            {{-- <div class="ms-auto d-flex align-items-center order-lg-3">
                <div class="dropdown">
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
                <ul class="navbar-nav navbar-right-wrap ms-2 flex-row d-none d-md-block">
                    <li class="dropdown d-inline-block stopevent position-static">
                        <a class="btn btn-light btn-icon rounded-circle indicator indicator-primary" href="#"
                            role="button" id="dropdownNotificationSecond" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="fe fe-bell"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg position-absolute mx-3 my-5"
                            aria-labelledby="dropdownNotificationSecond">
                            <div>
                                <div class="border-bottom px-3 pb-3 d-flex align-items-center">
                                    <span class="h5 mb-0">Notifications</span>
                                    <a href="# ">
                                        <span class="align-middle"><i class="fe fe-settings me-1"></i></span>
                                    </a>
                                </div>
                                <ul class="list-group list-group-flush" style="height: 300px" data-simplebar>
                                    <li class="list-group-item bg-light">
                                        <div class="row">
                                            <div class="col">
                                                <a class="text-body" href="#">
                                                    <div class="d-flex">
                                                        <img src="{{asset('public/template/')}}/assets/images/avatar/avatar-1.jpg" alt=""
                                                            class="avatar-md rounded-circle" />
                                                        <div class="ms-3">
                                                            <h5 class="fw-bold mb-1">Kristin Watson:</h5>
                                                            <p class="mb-3 text-body">Krisitn Watsan like your comment
                                                                on course Javascript Introduction!</p>
                                                            <span class="fs-6">
                                                                <span>
                                                                    <span
                                                                        class="fe fe-thumbs-up text-success me-1"></span>
                                                                    2 hours ago,
                                                                </span>
                                                                <span class="ms-1">2:19 PM</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-auto text-center me-2">
                                                <a href="#" class="badge-dot bg-info" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Mark as read"></a>
                                                <div>
                                                    <a href="#" class="bg-transparent" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Remove">
                                                        <i class="fe fe-x"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col">
                                                <a class="text-body" href="#">
                                                    <div class="d-flex">
                                                        <img src="{{asset('public/template/')}}/assets/images/avatar/avatar-2.jpg" alt=""
                                                            class="avatar-md rounded-circle" />
                                                        <div class="ms-3">
                                                            <h5 class="fw-bold mb-1">Brooklyn Simmons</h5>
                                                            <p class="mb-3 text-body">Just launched a new Courses React
                                                                for Beginner.</p>
                                                            <span class="fs-6">
                                                                <span>
                                                                    <span
                                                                        class="fe fe-thumbs-up text-success me-1"></span>
                                                                    Oct 9,
                                                                </span>
                                                                <span class="ms-1">1:20 PM</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-auto text-center me-2">
                                                <a href="#" class="badge-dot bg-secondary"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Mark as unread"></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col">
                                                <a class="text-body" href="#">
                                                    <div class="d-flex">
                                                        <img src="{{asset('public/template/')}}/assets/images/avatar/avatar-3.jpg" alt=""
                                                            class="avatar-md rounded-circle" />
                                                        <div class="ms-3">
                                                            <h5 class="fw-bold mb-1">Jenny Wilson</h5>
                                                            <p class="mb-3 text-body">Krisitn Watsan like your comment
                                                                on course Javascript Introduction!</p>
                                                            <span class="fs-6">
                                                                <span>
                                                                    <span
                                                                        class="fe fe-thumbs-up text-info me-1"></span>
                                                                    Oct 9,
                                                                </span>
                                                                <span class="ms-1">1:56 PM</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-auto text-center me-2">
                                                <a href="#" class="badge-dot bg-secondary"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Mark as unread"></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col">
                                                <a class="text-body" href="#">
                                                    <div class="d-flex">
                                                        <img src="{{asset('public/template/')}}/assets/images/avatar/avatar-4.jpg" alt=""
                                                            class="avatar-md rounded-circle" />
                                                        <div class="ms-3">
                                                            <h5 class="fw-bold mb-1">Sina Ray</h5>
                                                            <p class="mb-3 text-body">You earn new certificate for
                                                                complete the Javascript Beginner course.</p>
                                                            <span class="fs-6">
                                                                <span>
                                                                    <span class="fe fe-award text-warning me-1"></span>
                                                                    Oct 9,
                                                                </span>
                                                                <span class="ms-1">1:56 PM</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-auto text-center me-2">
                                                <a href="#" class="badge-dot bg-secondary"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Mark as unread"></a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="border-top px-3 pt-3 pb-0">
                                    <a href="notification-history.html" class="text-link fw-semibold">See all
                                        Notifications</a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="dropdown ms-2 d-inline-block position-static">
                        <a class="rounded-circle" href="#" data-bs-toggle="dropdown" data-bs-display="static"
                            aria-expanded="false">
                            <div class="avatar avatar-md avatar-indicators avatar-online">
                                <img alt="avatar" src="{{asset('public/template/')}}/assets/images/avatar/avatar-1.jpg"
                                    class="rounded-circle" />
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end position-absolute mx-3 my-5">
                            <div class="dropdown-item">
                                <div class="d-flex">
                                    <div class="avatar avatar-md avatar-indicators avatar-online">
                                        <img alt="avatar" src="{{asset('public/template/')}}/assets/images/avatar/avatar-1.jpg"
                                            class="rounded-circle" />
                                    </div>
                                    <div class="ms-3 lh-1">
                                        <h5 class="mb-1">Annette Black</h5>
                                        <p class="mb-0">annette@geeksui.com</p>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <ul class="list-unstyled">
                                <li class="dropdown-submenu dropstart-lg">
                                    <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                                        <i class="fe fe-circle me-2"></i>
                                        Status
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <span class="badge-dot bg-success me-2"></span>
                                                Online
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <span class="badge-dot bg-secondary me-2"></span>
                                                Offline
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <span class="badge-dot bg-warning me-2"></span>
                                                Away
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <span class="badge-dot bg-danger me-2"></span>
                                                Busy
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="profile-edit.html">
                                        <i class="fe fe-user me-2"></i>
                                        Profile
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="student-subscriptions.html">
                                        <i class="fe fe-star me-2"></i>
                                        Subscription
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <i class="fe fe-settings me-2"></i>
                                        Settings
                                    </a>
                                </li>
                            </ul>
                            <div class="dropdown-divider"></div>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="dropdown-item" href="../index.html">
                                        <i class="fe fe-power me-2"></i>
                                        Sign Out
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <div>
                <!-- Button -->
                <button class="navbar-toggler collapsed ms-2" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="icon-bar top-bar mt-0"></span>
                    <span class="icon-bar middle-bar"></span>
                    <span class="icon-bar bottom-bar"></span>
                </button>
            </div> --}}
            <!-- Collapse -->
            
        </div>
    </nav>

    <!-- Page Content -->
    <main>
        @yield('content')

        
    </main>

    <!-- Footer -->
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row align-items-center g-0 border-top py-2">
                <!-- Desc -->
                <div class="col-md-6 col-12 text-center text-md-start">
                    <span>
                        ©
                        <span id="copyright">
                            <script>
                                document.getElementById("copyright").appendChild(document.createTextNode(new Date().getFullYear()));
                            </script>
                        </span>
                        Disdukcapil Kabupaten Jayawijaya - Bidang Pengelolaan Informasi Admministrasi Kependudukann (PIAK)
                    </span>
                </div>
                <!-- Links -->
                {{-- <div class="col-12 col-md-6">
                    <nav class="nav nav-footer justify-content-center justify-content-md-end">
                        <a class="nav-link active ps-0" href="#!">Privacy</a>
                        <a class="nav-link" href="#!">Terms</a>
                        <a class="nav-link" href="#!">Feedback</a>
                        <a class="nav-link" href="#!">Support</a>
                    </nav> --}}
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
    <script src="{{ asset('public/template/assets/libs/%40popperjs/core/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('public/template/assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/template/assets/libs/simplebar/dist/simplebar.min.js') }}"></script>
        <!-- Theme JS -->
    <script src="{{ asset('public/template/assets/js/theme.min.js') }}"></script>

    @yield('scripts')
</body>

</html>
