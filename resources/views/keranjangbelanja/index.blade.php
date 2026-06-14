@extends('template1')
@section('judul_halaman', 'Data Keranjang')
@section('konten')

	<a href="/keranjangbelanja/tambah/" class="btn btn-success">Tambah</a>

	<br/>
	<br/>

	<table class="table table-striped table-hover mt-4">
		<tr>
			<th>Kode Pembelian</th>
			<th>Kode Barang</th>
			<th>Jumlah Pembelian</th>
			<th>Harga per item</th>
			<th>Total</th>
			<th>Action</th>
		</tr>
		@foreach($keranjangbelanja as $k)
		<tr>
			<td>{{ $k->ID }}</td>
			<td>{{ $k->KodeBarang }}</td>
			<td>{{ $k->Jumlah }}</td>
			<td>{{ number_format($k->Harga, 0, ',', '.') }}</td>
			<td>{{ number_format($k->Jumlah * $k->Harga, 0, ',', '.') }}</td>
			<td>
				<a href="/keranjangbelanja/hapus/{{$k->ID }}" class="btn btn-danger">Batal</a>
			</td>
		</tr>
		@endforeach
	</table>
@endsection
