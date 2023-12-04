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

@foreach($pegawai as $p)
{{-- <form action="/pegawai/update" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
    Nama <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> <br/>
    Jabatan <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> <br/>
    Umur <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br/>
    Alamat <textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br/>
    <input type="submit" value="Simpan Data">
</form> --}}

<form class="form-horizontal" role="form" action="/pegawai/update" method="post">
    {{ csrf_field() }}
    <div class ="form-group">
       <label for= "id" class = "col-sm-2 control-label"></label>
       <div class= "col-sm-10">
          <input type="hidden" class="form-control" name="id" value="{{ $p->pegawai_id }}">
       </div>
    </div>
    <div class = "form-group">
        <label for = "nama" class = "col-sm-2 control-label">Nama</label>
        <div class = "col-sm-10">
           <input type="text" class="form-control" name="nama" required="required" value="{{ $p->pegawai_nama }}">
        </div>
     </div>
    <div class = "form-group">
        <label for = "jabatan" class = "col-sm-2 control-label">Jabatan</label>
        <div class = "col-sm-10">
           <input type="text" class="form-control" name="jabatan" required="required" value="{{ $p->pegawai_jabatan }}">
        </div>
     </div>
     <div class = "form-group">
        <label for = "umur" class = "col-sm-2 control-label">Umur</label>
        <div class = "col-sm-10">
           <input type = "number" class = "form-control" name="umur" required="required" value="{{ $p->pegawai_umur }}">
        </div>
     </div>
     <div class = "form-group">
        <label for = "jabatan" class = "col-sm-2 control-label">Alamat</label>
        <div class = "col-sm-10">
           <textarea name="alamat" required="required" class = "form-control">{{ $p->pegawai_alamat }}</textarea>
        </div>
     </div>

     <div class = "form-group">
        <div class = "col-sm-offset-2 col-sm-10">
           <input type="submit" class="btn btn-primary" value="Simpan Data">
        </div>
     </div>
</form>
@endforeach


@endsection
