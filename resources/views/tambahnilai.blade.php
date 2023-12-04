<!-- Menghubungkan dengan view template master -->
@extends('master2')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Tambah Nilai')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
<a href="/nilai"> Kembali</a>

<br/>

<form class = "form-horizontal" role = "form" action="/nilai/store" method="post">
    {{ csrf_field() }}
    <div class = "form-group">
       <label for = "ID" class = "col-sm-2 control-label">ID</label>
       <div class = "col-sm-10">
          <input type = "hidden" class = "form-control" name="ID" >
       </div>
    </div>
    <div class = "form-group">
        <label for = "NRP" class = "col-sm-2 control-label">NRP</label>
        <div class = "col-sm-10">
           <input type = "number" class = "form-control" name="NRP" required="required" placeholder = "Masukkan Number">
        </div>
     </div>
     <div class = "form-group">
        <label for = "umur" class = "col-sm-2 control-label">Nilai Angka</label>
        <div class = "col-sm-10">
           <input type = "number" class = "form-control" name="NilaiAngka" required="required" placeholder = "Masukkan Nilai">
        </div>
     </div>
     <div class = "form-group">
        <label for = "SKS" class = "col-sm-2 control-label">SKS</label>
        <div class = "col-sm-10">
           <input type = "number" name="SKS" required="required" class = "form-control" placeholder = "Masukkan SKS">
        </div>
     </div>

     <div class = "form-group">
        <div class = "col-sm-offset-2 col-sm-10">
           <input type="submit" class = "btn btn-primary" value="Simpan Data">
        </div>
     </div>
</form>

@endsection
