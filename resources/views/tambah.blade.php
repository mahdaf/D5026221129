<!-- Menghubungkan dengan view template master -->
@extends('master2')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Tambah Pegawai')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
<a href="/pegawai"> Kembali</a>

<br/>

{{-- <form action="/pegawai/store" method="post">
    {{ csrf_field() }}
    Nama <input type="text" name="nama" required="required"> <br/>
    Jabatan <input type="text" name="jabatan" required="required"> <br/>
    Umur <input type="number" name="umur" required="required"> <br/>
    Alamat <textarea name="alamat" required="required"></textarea> <br/>
    <input type="submit" value="Simpan Data">
</form> --}}

<form class = "form-horizontal" role = "form" action="/pegawai/store" method="post">
    {{ csrf_field() }}
    <div class = "form-group row">
       <label for = "nama" class = "col-sm-1 control-label">Nama</label>
       <div class = "col-sm-9">
          <input type = "text" class = "form-control" name="nama" required="required" placeholder = "Masukkan Nama">
       </div>
    </div>
    <div class = "form-group row">
        <label for = "jabatan" class = "col-sm-1 control-label">Jabatan</label>
        <div class = "col-sm-9">
           <input type = "text" class = "form-control" name="jabatan" required="required" placeholder = "Masukkan Jabatan">
        </div>
     </div>
     <div class = "form-group row">
        <label for = "umur" class = "col-sm-1">Umur</label>
        <div class = "col-sm-9">
           <input type = "number" class = "form-control" name="umur" required="required" placeholder = "Masukkan Umur">
        </div>
     </div>
     <div class = "form-group row">
        <label for = "jabatan" class = "col-sm-1 control-label">Alamat</label>
        <div class = "col-sm-9">
           <textarea name="alamat" required="required" class = "form-control" placeholder = "Masukkan Alamat"></textarea>
        </div>
     </div>

     <div class = "form-group row">
        <div class = "col-sm-offset-2 col-sm-10">
           <input type="submit" class = "btn btn-primary" value="Simpan Data">
        </div>
     </div>
</form>

@endsection
