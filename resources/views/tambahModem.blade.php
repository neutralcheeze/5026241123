@extends('template1')
@section('judul_halaman', 'Tambah Modem')
@section('konten')
    <a href="/modem" class="btn btn-secondary mb-4">Kembali</a>

    <div class="card">
        <div class="card-header">
            Form Tambah Data Modem
        </div>

        <div class="card-body">
            <form action="/modem/store" method="post">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="merkmodem" class="col-sm-2 col-form-label">Merk Modem</label>
                    <div class="col-sm-10">
                        <input type="text" name="merkmodem" id="merkmodem" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="stockmodem" class="col-sm-2 col-form-label">Stock Modem</label>
                    <div class="col-sm-10">
                        <input type="text" name="stockmodem" id="stockmodem" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="tersedia" class="col-sm-2">Tersedia</label>
                    <div class="col-sm-2">
                        <input type="checkbox" name="tersedia" id="tersedia">
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Simpan Data" class="btn btn-primary">
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
