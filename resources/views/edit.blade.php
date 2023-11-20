    <!-- Menghubungkan dengan view template master -->
@extends('master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Edit Pegawai')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
<a href="/pegawai"> Kembali</a>

<br/>
<br/>

@foreach($pegawai as $p)
<form action="/pegawai/update" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
    Nama <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> <br/>
    Jabatan <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> <br/>
    Umur <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br/>
    Alamat <textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br/>
    <input type="submit" value="Simpan Data">
</form>
@endforeach


@endsection
