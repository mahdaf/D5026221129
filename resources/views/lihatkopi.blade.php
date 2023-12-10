    <!-- Menghubungkan dengan view template master -->
    @extends('master2')

    <!-- isi bagian judul halaman -->
    <!-- cara penulisan isi section yang pendek -->
    @section('judul_halaman', 'Lihat Detail Kopi')


    <!-- isi bagian konten -->
    <!-- cara penulisan isi section yang panjang -->
    @section('konten')
    <h3 class="text-center">View Kopi</h3>
    <div class="container align-center">
       <div class="row" style="background-color: #ffffff;border: 1px solid #e5e5e5;border-radius: 30px;padding: 20px;box-shadow: 1px 8px 10px rgba(0, 0, 0, 0.15);">
           <div class="col-sm-6 d-flex">
            <img class="img-thumbnail mx-auto-d-block" style="width: 70%" src="https://blog.bookingtogo.com/wp-content/uploads/2020/11/jenis-kopi-di-Indonesia-dan-karakteristik-2048x1365.jpg" />
           </div>
            <div class="col-sm-6 d-flex">
                @foreach($kopi as $k)
                <div class="row">
                    <div class="col-12">
                        <p>Kode Kopi: {{ $k->kodekopi }}</p>
                        <p>Merk Kopi: {{ $k->merkkopi }}</p>
                        <p>Stock Kopi: {{ $k->stockkopi }}</p>
                        <p>Tersedia:
                            @if($k->tersedia == 'y')
                            Iya
                            @else
                            Tidak
                            @endif</p>
                        <a href="/kopi" class="mx-auto btn btn-info">OK</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>


    @endsection
