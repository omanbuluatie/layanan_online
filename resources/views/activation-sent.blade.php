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
                                    <a href="admin-dashboard.html">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Registrasi</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="alert alert-info">
                <strong>Registrasi Berhasil!</strong> Link aktivasi telah dikirim ke email Anda. Silakan cek email untuk
                mengaktivasi akun Anda.
            </div>
        </div>
    </section>
@endsection
