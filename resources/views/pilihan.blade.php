@extends('master2')

<!-- isi bagian judul halaman -->
@section('title', '')

@section('judul_halaman', '')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
	<br/>

  <p> Anda telah memilih Kategori dengan Kode:</p> @foreach($kategori as $k)
  {{ $k->ID}}
@endforeach
@endsection
