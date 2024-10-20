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

    <title>@yield('title')</title>
</head>

<body>
    <!-- Page content -->
    <main>
        @yield('content')

        
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
