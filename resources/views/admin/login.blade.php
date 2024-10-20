<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Your Company Name" />

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/template/assets/images/favicon/favicon.ico') }}" />

    <!-- darkmode js -->
    <script src="{{ asset('public/template/assets/js/vendors/darkMode.js') }}"></script>

    <!-- Libs CSS -->
    <link href="{{ asset('public/template/assets/fonts/feather/feather.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/template/assets/libs/bootstrap-icons/font/bootstrap-icons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/template/assets/libs/simplebar/dist/simplebar.min.css') }}" rel="stylesheet" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('public/template/assets/css/theme.min.css') }}">

    <title>Admin Login | Your Application</title>
</head>

<body>
    <!-- Page content -->
    <main>
        <section class="container d-flex flex-column vh-100">
            <div class="row align-items-center justify-content-center g-0 h-lg-100 py-8">
                <div class="col-lg-5 col-md-8 py-8 py-xl-0">
                    <!-- Card -->
                    <div class="card shadow">
                        <!-- Card body -->
                        <div class="card-body p-6 d-flex flex-column gap-4">
                            <div>
                                <a href="{{ url('/') }}">
                                    <img src="{{ asset('public/template/assets/images/brand/logo/logo-icon.svg') }}" class="mb-4" alt="logo-icon" />
                                </a>
                                <div class="d-flex flex-column gap-1">
                                    <h1 class="mb-0 fw-bold">Admin Login</h1>
                                    
                                </div>
                            </div>
                            <!-- Form -->
                            <form method="POST" action="{{ route('admin.login.submit') }}" class="needs-validation" novalidate>
                                @csrf
                                <!-- Email -->
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" id="email" class="form-control" name="email" placeholder="Enter your email" required />
                                    <div class="invalid-feedback">Please enter a valid email address.</div>
                                </div>
                                <!-- Password -->
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" id="password" class="form-control" name="password" placeholder="Enter your password" required />
                                    <div class="invalid-feedback">Please enter a valid password.</div>
                                </div>
                                <!-- Checkbox -->
                                <div class="d-lg-flex justify-content-between align-items-center mb-4">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="rememberme" />
                                        <label class="form-check-label" for="rememberme">Remember me</label>
                                    </div>
                                    
                                </div>
                                <!-- Submit Button -->
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Scripts -->
    <!-- Libs JS -->
    <script src="{{ asset('public/template/assets/libs/%40popperjs/core/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('public/template/assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/template/assets/libs/simplebar/dist/simplebar.min.js') }}"></script>

    <!-- Theme JS -->
    <script src="{{ asset('public/template/assets/js/theme.min.js') }}"></script>

    <script src="{{ asset('public/template/assets/js/vendors/validation.js') }}"></script>
</body>

</html>
