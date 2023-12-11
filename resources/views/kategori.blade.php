@extends('master2')

<!-- isi bagian judul halaman -->
@section('title', 'Kategori')

@section('judul_halaman', '')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
	<br/>
    <div class="container">
                <form action="hasil" method="get">
                <label for="category" class="form-label">Pilih Kategori</label>
                <select name="" id="category" class="form-control">
                    <option hidden>Choose Category</option>
                    @foreach($kategori as $k)
                    <option value ="{{ $k->ID }}"> {{ $k->Nama }}</option>
                    @endforeach
                </select>
                <input type="submit" value="Kirim" class="btn btn-primary" />
            </form>
    </div>

@endsection
