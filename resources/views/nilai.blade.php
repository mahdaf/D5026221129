@extends('master2')

<!-- isi bagian judul halaman -->
@section('title', 'Nilai Kuliah')

@section('judul_halaman', 'Nilai Kuliah')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
	<br/>
    <a href="/nilai/tambahnilai"> + Tambah Nilai Baru</a>

	<table class="table table-stripped table-hover">
		<tr>
		    <th>NRP</th>
			<th>Nilai Angka</th>
			<th>SKS</th>
			<th>Nilai Huruf</th>
            <th>Bobot</th>
		</tr>
		@foreach($nilaikuliah as $n)
		<tr>
			<td>{{ $n->NRP }}</td>
			<td>{{ $n->NilaiAngka }}</td>
			<td>{{ $n->SKS }}</td>
            <td>
                    @if($n->NilaiAngka <= 40)
                    D
                    @elseif($n->NilaiAngka <= 60)
                    C
                    @elseif($n->NilaiAngka <= 80)
                    B
                    @else
                    A
                    @endif
                </td>
            <td>{{$n->NilaiAngka*$n->SKS}} </td>
		</tr>
		@endforeach
	</table>


@endsection
