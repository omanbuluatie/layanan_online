@extends('layouts.user-dashboard')

@section('content')
<section class="container-fluid p-2">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <div class="border-bottom pb-3 mb-3 d-flex flex-column flex-lg-row gap-3 align-items-lg-center justify-content-between">
                <div class="d-flex flex-column gap-1">
                    <h1 class="mb-0 h2 fw-bold">Pernyataan</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="py-2">
        <div class="row">
            <div class="offset-xl-2 col-xl-8 col-md-12 col-12">
                <div class="card">
                    <div class="card-body p-lg-6">
                        <p>Saya menyatakan bahwa dokumen yang saya unggah adalah benar dan sesuai dengan keadaan
                            sebenarnya. Jika terbukti salah, saya siap mempertanggungjawabkan sesuai dengan
                            perundang-undangan yang berlaku.</p>
                        <form action="{{ route('pendaftaran.update.status') }}" method="POST">
                            @csrf
                            <input type="hidden" name="pendaftaran_layanan_id" value="{{ $pendaftaran->id }}">

                            <div class="form-check mb-3">
                                <input class="form-check-input" name="declaration" type="checkbox" id="agreementCheck" required>
                                <label class="form-check-label" for="agreementCheck">
                                    Saya setuju dengan pernyataan di atas
                                </label>
                            </div>

                            <button type="submit" class="btn btn-success">Ajukan Permohonan</button>
                            <a href="{{ route('home') }}" class="btn btn-outline-primary ms-2">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
