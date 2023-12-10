@extends('master2')

<!-- isi bagian judul halaman -->
@section('title', 'List Kopi')

@section('judul_halaman', 'List Kopi')

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
	<br/>
	<table class="table table-stripped table-hover">
		<tr>
		    <th>Kode Kopi</th>
			<th>Merk Kopi</th>
			<th>Stock Kopi</th>
			<th>Tersedia</th>
            <th>Action</th>
		</tr>
		@foreach($kopi as $k)
		<tr>
			<td>{{ $k->kodekopi }}</td>
			<td>{{ $k->merkkopi }}</td>
			<td>{{ $k->stockkopi }}</td>
            <td>
                    @if($k->tersedia == 'y')
                    <div class="custom-control custom-checkbox d-flex justify-content-center">
                        <input type="checkbox" class="custom-control-input" id="defaultCheckedDisabled2" checked disabled>
                        <label class="custom-control-label" for="defaultCheckedDisabled2">
                    </div>
                    @else
                    <div class="custom-control custom-checkbox d-flex justify-content-center">
                        <input type="checkbox" class="custom-control-input" id="defaultUncheckedDisabled2" disabled>
                        <label class="custom-control-label" for="defaultUncheckedDisabled2">
                      </div>
                    @endif
            </td>
            <td>
				<a href="/kopi/view/{{ $k->kodekopi }}" class="btn btn-success">View</a>
				|
                <a href="/kopi/edit/{{ $k->kodekopi }}" class="btn btn-warning">Edit</a>
				|
				<a href="kopi/hapus/{{ $k->kodekopi }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


@endsection
