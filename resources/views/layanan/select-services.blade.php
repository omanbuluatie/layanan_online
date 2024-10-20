@extends('layouts.user-dashboard')

@section('content')
    <?php
    use Illuminate\Support\Str;
    ?>
    <section class="container-fluid p-4">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div
                    class="border-bottom pb-3 mb-3 d-flex flex-column flex-lg-row gap-3 align-items-lg-center justify-content-between">
                    <div class="d-flex flex-column gap-1">
                        <h1 class="mb-0 h2 fw-bold">Pilih Layanan</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Pilih Layanan</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-6">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-12">
                    <div class="card">
                        <div class="card-body p-lg-6">
                            <div class="d-flex flex-column gap-3">
                                <div class="accordion-single border" id="accordionExample">
                                    <div class="accordion-item-single rounded-0">
                                        <div class="accordion-header-single">
                                            <div class="d-flex flex-row align-items-center justify-content-between">
                                                <a class="h4 mb-0" data-bs-toggle="collapse" href="#collapseOne"
                                                    role="button" aria-expanded="false" aria-controls="collapseOne">
                                                    <div class="d-flex align-items-center gap-3 flex-row">
                                                        <div class="">
                                                            <div class="">Layanan Pendaftaran Penduduk</div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body-single border-bottom">
                                                <div class="row justify-content-center gy-4">
                                                    @foreach ($jenisLayanan as $layanan)
                                                        <div class="col-xxl-2 col-md-4 col-12">
                                                            <a href="{{ url('/step_one/' . Crypt::encrypt($layanan->id)) }}"
                                                                class="card card-border-primary rounded-4">
                                                                <div class="card-body d-flex flex-column gap-4 text-center">
                                                                    <div>
                                                                        <h3 class="mb-0">{{ $layanan->nama_layanan }}</h3>
                                                                        <span>{{ $layanan->deskripsi }}</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    @endforeach

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
