@extends('template1')
@section('judul_halaman', 'Kode Soal tagihan_air')
@section('konten')

	<a href="{{ route('eas.tambah') }}" class="btn btn-success">Input Tagihan Baru</a>

	<br/>
	<br/>

	<table class="table table-striped table-hover mt-4">
		<tr>
			<th>ID</th>
			<th>No Meteran</th>
			<th>Penggunaan (m<sup>3</sup>)</th>
			<th>Total Tagihan</th>
		</tr>
		@foreach($tagihan as $t)
		<tr>
			<td>{{ $t->ID }}</td>
			<td>{{ $t->NoMeteran }}</td>
			<td>{{ ($t->MeterAkhir - $t->MeterAwal) }}</td>
			<td>Rp{{ number_format(($t->MeterAkhir - $t->MeterAwal) * 5000, 0, ',', '.') }}</td>
		</tr>
		@endforeach
	</table>
@endsection
