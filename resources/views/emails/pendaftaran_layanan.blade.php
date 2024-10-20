<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pendaftaran Layanan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            padding: 20px;
            text-align: center; /* Menambahkan perataan teks ke tengah */
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: inline-block; /* Membuat container mengikuti konten */
            max-width: 600px; /* Membatasi lebar maksimum */
            margin: auto; /* Mengatur margin otomatis untuk pusat */
        }
        h1 {
            color: #007bff;
        }
        .service {
            font-weight: bold; /* Menebalkan teks jenis layanan */
            color: #007bff; /* Mengubah warna jenis layanan */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Terima Kasih telah Mendaftar!</h1>
        <p>Hai,</p>
        <p>Anda telah berhasil mendaftar untuk layanan dengan nomor registrasi: <strong>{{ $pendaftaran->id }}</strong>.</p>
        <p>Status pendaftaran Anda saat ini adalah: <strong>{{ $pendaftaran->status_pendaftaran == '2' ? 'PERMOHONAN DIAJUKAN' : '' }}</strong>.</p>
        <p>Jenis layanan yang Anda ambil: <span class="service">{{ $pendaftaran->jenisLayanan->nama_layanan }}</span></p> <!-- Menampilkan jenis layanan -->
        <p>Petugas kami akan melakukan pemeriksaan, verifikasi, dan validasi terhadap berkas persyaratan yang diunggah.</p> <!-- Informasi tambahan -->
        <p>Mohon cek email Anda secara berkala untuk informasi lebih lanjut.</p>
        <p>Terima kasih!</p>
    </div>
</body>
</html>
