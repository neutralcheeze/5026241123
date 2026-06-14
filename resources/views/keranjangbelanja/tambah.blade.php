@extends('template1')
@section('judul_halaman', 'Tambah Modem')
@section('konten')
    <a href="/keranjangbelanja" class="btn btn-secondary mb-4">Kembali</a>

    <div class="card">
        <div class="card-header">
            Form Tambah Data Keranjang belanja
        </div>

        <div class="card-body">
            <form action="/keranjangbelanja/store" method="post">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="KodeBarang" class="col-sm-2 col-form-label">Kode Barang</label>
                    <div class="col-sm-10">
                        <input type="text" name="KodeBarang" id="KodeBarang" class="form-control">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="Jumlah" class="col-sm-2 col-form-label">Jumlah Pembelian</label>
                    <div class="col-sm-10">
                        <input type="text" name="Jumlah" id="Jumlah" class="form-control">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="Harga" class="col-sm-2 col-form-label">Harga per Item</label>
                    <div class="col-sm-10">
                        <input type="text" name="Harga" id="Harga" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Beli" class="btn btn-primary">
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
