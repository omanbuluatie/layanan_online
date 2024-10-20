@extends('auth.login')
@section('title')
    Login
@stop
@section('content')
<section class="container d-flex flex-column vh-100">
    <div class="row align-items-center justify-content-center g-0 h-lg-100">
        <div class="col-lg-5 col-md-8 py-8 py-xl-0">
            <!-- Card -->
            <div class="card shadow">
                <!-- Card body -->
                <div class="card-body p-6 d-flex flex-column gap-4">
                    <div class="text-center">
                        <a href="{{ url('/') }}">
                            <img width="20%" src="{{ asset('public/template/assets/images/brand/logo/logo_jayawijaya.png') }}" class="mb-4" alt="logo-icon" />
                        </a>
                        <div class="d-flex flex-column gap-1">
                            <h3 class="mb-0 fw-bold">Login Pengguna</h3>
                        </div>
                        Untuk menggunakan layanan anda harus memiliki akun, silahkan login jika sudah memiliki akun
                    </div>
                    <!-- Form -->
                    <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate>
                        @csrf
                        <!-- Error Message -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <!-- Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" class="form-control" name="email" placeholder="Masukkan email anda" required />
                            <div class="invalid-feedback">Please enter a valid email address.</div>
                        </div>
                        <!-- Password -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" id="password" class="form-control" name="password" placeholder="Masukkan kata sandi" required />
                            <div class="invalid-feedback">Please enter a valid password.</div>
                        </div>
                        <!-- Checkbox -->
                        <div class="d-lg-flex justify-content-between align-items-center mb-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="rememberme" />
                                <label class="form-check-label" for="rememberme">Remember me</label>
                            </div>
                            <div>
                                <a href="{{ route('password.request') }}">Lupa kata sandi?</a>
                            </div>
                        </div>
                        <!-- Submit Button -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                    <!-- Register Link -->
                    <div class="text-center mt-4">
                        <p>Apakah anda belum memiliki akun? <a href="{{ route('register') }}">Silahkan klik disini</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection