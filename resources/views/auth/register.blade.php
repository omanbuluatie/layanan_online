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
                                    <h3 class="mb-0 fw-bold">Pendaftaran akun</h3>
                                </div>
                            </div>
                            <!-- form -->
                            <form action="{{ route('daftar') }}" method="POST" class="row gx-3 needs-validation"
                                novalidate>
                                @csrf
                                <!-- Nama Lengkap -->
                                <div class="mb-3 col-12">
                                    <label class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                                    <input type="text" name="name" class="form-control"
                                        placeholder="Masukkan nama lengkap sesuai KTP" required
                                        oninput="this.value = this.value.toUpperCase()" />
                                    <div class="invalid-feedback">Silakan masukkan nama sesuai KTP.</div>
                                </div>

                                <!-- NIK -->
                                <div class="mb-3 col-12">
                                    <label class="form-label">NIK <span class="text-danger">*</span></label>
                                    <input type="text" name="nik" class="form-control" placeholder="Masukkan NIK"
                                        required pattern="\d*" maxlength="16" />
                                    <div class="invalid-feedback">Silakan masukkan NIK yang valid.</div>
                                </div>

                                <!-- Email -->
                                <div class="mb-3 col-12">
                                    <label class="form-label">Email</label>
                                    <input required type="email" name="email" class="form-control"
                                        placeholder="Masukkan alamat email aktif" />
                                    <div class="invalid-feedback">Silakan masukkan email yang valid.</div>
                                </div>

                                <!-- Nomor Telepon -->
                                <div class="mb-3 col-12">
                                    <label class="form-label">Nomor Telepon/WhatsApp <span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="nomor_telepon" class="form-control"
                                        placeholder="Masukkan nomor telepon atau WhatsApp yang aktif" required pattern="\d*"
                                        maxlength="15" />
                                    <div class="invalid-feedback">Silakan masukkan nomor telepon yang valid.</div>
                                </div>

                                <!-- Submit Button -->
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Daftar</button>
                                    <a href="{{ url('/') }}" class="btn btn-outline-primary ms-2">Kembali</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Membatasi input NIK dan nomor telepon hanya angka
        document.querySelectorAll('input[type="text"]').forEach(input => {
            input.addEventListener('input', function() {
                if (this.name === 'nik' || this.name === 'nomor_telepon') {
                    this.value = this.value.replace(/\D/, ''); // Hanya menerima angka
                }
            });
        });
    </script>
@endsection
