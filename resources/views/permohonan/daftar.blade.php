@extends('layouts.admin-dashboard')

@section('title', 'Daftar Permohonan')

@section('content')
    <section class="container-fluid p-4">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="d-flex justify-content-between border-bottom pb-3 mb-3">
                    <h3 class="mb-0 h2 fw-bold">Daftar Permohonan</h3>
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

                        <table class="table table-hover" id="pendaftaranTable" style="width: 100%">
                            <thead class="table-light">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pemohon</th>
                                    <th>Jenis Layanan</th>
                                    <th>Status Pendaftaran</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
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
            fillDataTable();
        });

        function fillDataTable() {
            $('#pendaftaranTable').DataTable().destroy(); // Memastikan tabel baru diisi

            // DataTables
            const table = $('#pendaftaranTable').DataTable({
                drawCallback: function() {
                    $('[data-toggle="popover"]').popover();
                },
                "processing": true,
                "serverSide": true,
                "ajax": {
                    "url": "{{ route('pendaftaran.index') }}",
                    "dataType": "json",
                    "type": "POST",
                    "data": {
                        _token: "{{ csrf_token() }}",
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseJSON);
                        alert('Terjadi kesalahan saat memuat data.');
                    }
                },
                "columns": [
                    {
                        "data": null, // Menggunakan null karena kita akan mengisi no secara manual
                        orderable: false
                    },
                    {
                        "data": "nama_user",
                    },
                    {
                        "data": "jenis_layanan",
                    },
                    {
                        "data": "status_pendaftaran",
                    },
                    {
                        "data": "aksi",
                    },
                ],
                "dom": 'lfrtip',
                "createdRow": function(row, data, dataIndex) {
                    // Mengisi nomor urut secara manual
                    $(row).find('td:eq(0)').html(dataIndex + 1);
                }
            });
        }
    </script>
@endsection
