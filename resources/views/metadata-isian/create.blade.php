{{-- resources/views/metadata-isian/create.blade.php --}}
@extends('layouts.admin-dashboard')

@section('title', 'Tambah Metadata Isian')

@section('content')
    <section class="container-fluid p-4">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="d-flex justify-content-between border-bottom pb-3 mb-3">
                    <h1 class="mb-0 h2 fw-bold">Tambah Metadata Isian</h1>
                    <a href="{{ route('metadata-isian.index') }}" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="offset-xl-3 col-xl-6 col-md-12 col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('metadata-isian.store') }}" method="POST" class="needs-validation"
                            novalidate>
                            @csrf

                            <div class="mb-3">
                                <label class="form-label">Jenis Layanan <span class="text-danger">*</span></label>
                                <select name="jenis_layanan_id" class="form-select" required>
                                    <option value="">Pilih Jenis Layanan</option>
                                    @foreach ($jenisLayanan as $layanan)
                                        <option value="{{ $layanan->id }}">{{ $layanan->nama_layanan }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">Silakan pilih jenis layanan.</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Metadata Isian <span class="text-danger">*</span></label>
                                <div id="dataFields">
                                    <div class="input-group mb-3 data-field">
                                        <input type="text" name="data[]" class="form-control"
                                            placeholder="Masukkan metadata isian" required />
                                    </div>
                                </div>
                            </div>

                            <button type="button" class="btn btn-success" onclick="addDataField()">+</button>
                            <hr>
                            <button class="btn btn-primary mt-3" type="submit">Simpan</button>
                            <button type="button" class="btn btn-outline-primary ms-2 mt-3"
                                onclick="window.history.back();">Tutup</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function addDataField() {
            const dataFieldsContainer = document.getElementById('dataFields');
            const newDataField = document.createElement('div');
            newDataField.classList.add('input-group', 'mb-3', 'data-field');
            newDataField.innerHTML = `
            <input type="text" name="data[]" class="form-control" placeholder="Masukkan data" required />
            <button type="button" class="btn btn-danger" onclick="removeDataField(this)">🗑️</button>
        `;
            dataFieldsContainer.appendChild(newDataField);
        }

        function removeDataField(button) {
            const dataField = button.parentElement;
            dataField.remove();
        }
    </script>
@endsection
