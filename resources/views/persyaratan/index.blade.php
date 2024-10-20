<!-- resources/views/persyaratan/index.blade.php -->
@extends('layouts.admin-dashboard')

@section('title', 'Persyaratan Layanan')

@section('content')
<section class="container-fluid p-4">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <div class="d-flex justify-content-between border-bottom pb-3 mb-3">
                <h3 class="mb-0 h2 fw-bold">Persyaratan Layanan</h3>
                <a href="{{ route('persyaratan.create') }}" class="btn btn-primary">Tambah Persyaratan</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 col-12">
            <div class="card mb-5">
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <table class="table table-hover" id="persyaratanTable" style="width: 100%">
                        <thead class="table-light">
                            <tr>
                                <th>Jenis Layanan</th>
                                <th>Nama Persyaratan</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($persyaratan as $item)
                                <tr>
                                    <td>{{ $item->jenisLayanan->nama_layanan }}</td>
                                    <td>{{ $item->nama_persyaratan }}</td>
                                    <td>{{ $item->deskripsi }}</td>
                                    <td>
                                        <a href="{{ route('persyaratan.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                                        <form action="{{ route('persyaratan.destroy', $item->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $('#persyaratanTable').DataTable({
            paging: true,
            searching: true,
            ordering: true
        });
    });
</script>
@endsection
