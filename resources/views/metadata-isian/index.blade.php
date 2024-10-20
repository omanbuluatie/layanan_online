@extends('layouts.admin-dashboard')

@section('title', 'Data Metadata Isian')

@section('content')
<section class="container-fluid p-4">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <div class="d-flex justify-content-between border-bottom pb-3 mb-3">
                <h3 class="mb-0 h2 fw-bold">Data Metadata Isian</h3>
                <a href="{{ route('metadata-isian.create') }}" class="btn btn-primary">Tambah Data</a>
            </div>
        </div>
    </div>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-5">
                <div class="card-body">
                    <table class="table table-hover" id="metadataIsianTable" style="width: 100%">
                        <thead class="table-light">
                            <tr>
                                <th>No</th>
                                <th>Jenis Layanan</th>
                                <th>Metadata Isian</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($metadataIsian as $index => $item)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $item->jenisLayanan->nama_layanan }}</td>
                                    <td>{{ is_array(json_decode($item->data, true)) ? implode(', ', json_decode($item->data, true)) : $item->data }}</td>
                                    <td>
                                        <a href="{{ route('metadata-isian.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('metadata-isian.destroy', $item->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</button>
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
        $('#metadataIsianTable').DataTable({
            paging: true,
            searching: true,
            ordering: true
        });
    });
</script>
@endsection
