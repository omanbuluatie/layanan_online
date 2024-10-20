<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>PIN Pendaftaran dan Aktivasi Akun</title>
</head>

<body>
    <p>Halo {{ $name }},</p>

    <p>Terima kasih telah mendaftar. Berikut adalah PIN yang digunakan sebagai Kata Sandi untuk masuk ke akun Anda: <br>
        <h1><strong>{{ $pin }}</strong>.</h1></p>

        <p>Harap disimpan baik-baik, jangan di berikan kepada orang lain.</p>
    <p>Untuk mengaktifkan akun Anda, silakan klik link di bawah ini:</p>

    <p><a href="{{ $activationUrl }}">Aktivasi Akun</a></p>

    <p>Terima kasih,<br>
        {{ config('app.name') }}</p>
</body>

</html>
