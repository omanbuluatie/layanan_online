@extends('layouts.admin-dashboard')

@section('title')
    Jenis Layanan
@stop

@section('content')
    <section class="container-fluid p-4">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Page header -->
                <div class="border-bottom pb-3 mb-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex flex-column gap-1">
                            <h3 class="mb-0 h2 fw-bold">Jenis Layanan</h3>
                            <!-- Breadcrumb -->
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Jenis Layanan</li>
                                </ol>
                            </nav>
                        </div>
                        <a href="{{ route('jenis-layanan.create') }}" class="btn btn-primary">Tambah Jenis Layanan</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- basic table -->
            <div class="col-md-12 col-12">
                <div class="card mb-5">
                    <!-- card header  -->
                    <div class="card-header">
                        <h4 class="mb-1">Data Table Jenis Layanan</h4>
                    </div>
                    <!-- table  -->
                    <div class="card-body">
                        <div class="table-responsive">
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <table class="table table-hover" id="jenisLayananTable" style="width: 100%">
                                <thead class="table-light">
                                    <tr>
                                        <th>Nama Layanan</th>
                                        <th>Deskripsi</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($jenisLayanan as $layanan)
                                        <tr>
                                            <td>{{ $layanan->nama_layanan }}</td>
                                            <td>{{ $layanan->deskripsi }}</td>
                                            <td>
                                                @if ($layanan->is_active)
                                                    <span class="badge bg-success">Aktif</span>
                                                @else
                                                    <span class="badge bg-danger">Tidak Aktif</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('jenis-layanan.edit', $layanan->id) }}"
                                                    class="btn btn-warning">Edit</a>
                                                <form action="{{ route('jenis-layanan.destroy', $layanan->id) }}"
                                                    method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"
                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</button>
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
        </div>
    </section>
@endsection

@section('scripts')
    <!-- Tambahkan jQuery dan DataTables JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#jenisLayananTable').DataTable({
                paging: true,
                searching: true,
                ordering: true
            });
        });
    </script>
@endsection
