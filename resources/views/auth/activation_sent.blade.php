@extends('layouts.user-dashboard')

@section('content')
    <section class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Page header -->
                <div
                    class="border-bottom d-flex flex-column flex-lg-row gap-3 align-items-lg-center justify-content-between">
                    <div class="d-flex flex-column gap-1">
                        <h1 class="mb-0 h2 fw-bold">Registrasi Pemohon</h1>
                        <!-- Breadcrumb -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{url('/')}}">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Registrasi</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="py-6">
            <!-- row -->
            <div class="row">
                <div class="offset-xl-3 col-xl-6 col-md-12 col-12">
                    <!-- card -->
                    <div class="card">
                        <!-- card body -->
                        <div class="card-body p-lg-6">
                            <div class="text-center">

                                <div class="d-flex flex-column gap-1">
                                    <h3 class="mb-0 fw-bold">Aktivasi Akun Terkirim</h3>
                                </div>
                            </div>
                            <!-- form -->
                            <p>Link aktivasi telah dikirim ke email Anda. Silakan cek email Anda untuk mengaktifkan akun Anda.</p>
                            <p>Jika tidak menemukan email, silakan periksa folder spam atau coba lagi.</p>
                            <a href="{{ url('/') }}" class="btn btn-primary">Kembali ke Beranda</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   
@endsection


