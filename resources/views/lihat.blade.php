    <!-- Menghubungkan dengan view template master -->
    @extends('master2')

    <!-- isi bagian judul halaman -->
    <!-- cara penulisan isi section yang pendek -->
    @section('judul_halaman', 'View Pegawai')


    <!-- isi bagian konten -->
    <!-- cara penulisan isi section yang panjang -->
    @section('konten')
    <h3 class="text-center">View</h3>
    <div class="container align-center">
        <div class="row bg-light d-flex align-items-center justify-content-center">
            <div class="col-3 d-flex bg-secondary">

            </div>
            <div class="col-4 d-flex flex-column m-2">
                @foreach($pegawai as $p)
                    <input type="hidden" name="id" value="{{ $p->pegawai_id }}">
                    <p>Nama: {{ $p->pegawai_nama }}</p>
                    <p>Jabatan: {{ $p->pegawai_jabatan }}</p>
                    <p>Umur: {{ $p->pegawai_umur }}</p>
                    <p>Alamat: {{ $p->pegawai_alamat }}</p>
                    <a href="/pegawai" class="mx-auto btn btn-info">OK</a>
                @endforeach
            </div>
        </div>
    </div>


    @endsection
