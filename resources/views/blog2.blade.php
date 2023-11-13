<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3> Malasngoding.com</h3>
    <p>Tutor laravel</p>
    <p>Ini adalah sebuah view blog </p>
    <p>
        Nama : {{ $nama }}
        Alamat : {{ $alamat }}
        Umur : {{ $umur }}
    </p>
    <a href="/pegawai/{{ date ('D M Y') }}">Klik disini</a>
</body>
</html>
