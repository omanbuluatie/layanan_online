@extends('layouts.user-dashboard')
@section('title')
    Formulir Isian Pendaftaran
@stop
@section('content')
    <section class="container-fluid p-4">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div
                    class="border-bottom pb-3 mb-3 d-flex flex-column flex-lg-row gap-3 align-items-lg-center justify-content-between">
                    <div class="d-flex flex-column gap-1">
                        <h1 class="mb-0 h2 fw-bold">Isian Rincian Pendaftaran</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Isian Rincian Pendaftaran</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-6">
            <div class="row">
                <div class="offset-xl-3 col-xl-6 col-md-12 col-12">
                    <div class="card">
                        <div class="card-body p-lg-6">
                            <!-- Alert untuk informasi -->
                            <div class="alert alert-info" role="alert">
                                Harap mengisi formulir dengan data yang benar.
                            </div>
                            <!-- Form Rincian Pendaftaran -->
                            <form action="{{ route('detail.pendaftaran.submit', ['pendaftaran' => $pendaftaran->id]) }}"
                                method="POST">
                                @csrf
                                <input type="hidden" readonly name="pendaftaran_layanan_id" value="{{ $pendaftaran->id }}">
                                <!-- Loop melalui metadata isian -->
                                @foreach ($metadataIsian as $key => $field)
                                    <div class="mb-3">
                                        <label class="form-label">{{ $field }}</label>
                                        <input type="text" name="metadata[{{ $key }}]" value="-"
                                            class="form-control" required>
                                        @error("metadata.$key")
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                @endforeach

                                <button type="submit" class="btn btn-primary">Selanjutnya</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
