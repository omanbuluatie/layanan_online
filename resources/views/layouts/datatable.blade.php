<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh DataTables</title>
    <!-- Tambahkan CSS DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Contoh DataTables</h1>
        <table id="exampleTable" class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Layanan</th>
                    <th>Status Pendaftaran</th>
                    <th>Tanggal Pengajuan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Layanan A</td>
                    <td>PERMOHONAN DI AJUKAN</td>
                    <td>2024-09-01</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Layanan B</td>
                    <td>BELUM UPLOAD PERSYARATAN</td>
                    <td>2024-09-02</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Layanan C</td>
                    <td>SELESAI</td>
                    <td>2024-09-03</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Layanan D</td>
                    <td>PERMOHONAN DI AJUKAN</td>
                    <td>2024-09-04</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Layanan E</td>
                    <td>BELUM UPLOAD PERSYARATAN</td>
                    <td>2024-09-05</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Tambahkan jQuery dan DataTables JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#exampleTable').DataTable({
                paging: true,
                searching: true,
                ordering: true
            });
        });
    </script>
</body>
</html>
