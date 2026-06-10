@extends('template1')
@section('judul_halaman', 'Data Modem')
@section('konten')

    <a href="/modem/tambah" class="btn btn-success"> + Tambah modem Baru</a>

	<br/>
	<br/>

    <p>Cari Data Modem :</p>
    <form action="/Modem/cari" method="GET">
    <div class="d-flex justify-content-between gap-2">
        <input type="text" name="cari" placeholder="Cari Modem..." class="form-control">
        <input type="submit" value="Cari" class="btn btn-primary">
    </div>
    </form>

	<table class="table table-striped table-hover mt-4">
		<tr>
			<th>Kode Modem</th>
			<th>Merk Modem</th>
			<th>Stock Modem</th>
			<th>Tersedia</th>
			<th>Opsi</th>
		</tr>
		@foreach($modem as $m)
		<tr>
			<td>{{ $m->kodemodem }}</td>
			<td>{{ $m->merkmodem }}</td>
			<td>{{ $m->stockmodem }}</td>
			<td>{{ $m->tersedia }}</td>
			<td>
				<a href="/modem/edit/{{ $m->kodemodem }}" class="btn btn-warning">Edit</a>
				<a href="/modem/hapus/{{$m->kodemodem }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $modem->links() }}
@endsection
