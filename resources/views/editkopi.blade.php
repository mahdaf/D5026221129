    <!-- Menghubungkan dengan view template master -->
    @extends('master2')

    <!-- isi bagian judul halaman -->
    <!-- cara penulisan isi section yang pendek -->
    @section('judul_halaman', 'Edit Kopi')


    <!-- isi bagian konten -->
    <!-- cara penulisan isi section yang panjang -->
    @section('konten')
    <a href="/kopi"> Kembali</a>

    <br/>

    @foreach($kopi as $k)
    <form class="form-horizontal" role="form" action="/kopi/update" method="post">
        {{ csrf_field() }}
        <div class ="form-group row">
           <label for= "id" class = "col-sm-1 control-label"></label>
           <div class= "col-sm-9">
              <input type="hidden" class="form-control" name="id" value="{{ $k->kodekopi }}">
           </div>
        </div>
        <div class = "form-group row">
            <label for = "merkkopi" class = "col-sm-1 control-label">Merk Kopi</label>
            <div class = "col-sm-9">
               <input type="text" class="form-control" name="merkkopi" required="required" value="{{ $k->merkkopi }}">
            </div>
         </div>
        <div class = "form-group row">
            <label for = "stockkopi" class = "col-sm-1 control-label">Stock Kopi</label>
            <div class = "col-sm-9">
               <input type="number" class="form-control" name="stockkopi" required="required" value="{{ $k->stockkopi }}">
            </div>
         </div>
         <div class = "form-group row">
            <label for = "tersedia" class = "col-sm-1 control-label">Tersedia (y/n)</label>
            <div class = "col-sm-9">
               <input type = "text" class = "form-control" name="tersedia" required="required" value="{{ $k->tersedia }}">
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
