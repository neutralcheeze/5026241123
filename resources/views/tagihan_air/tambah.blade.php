@extends('template1')
@section('judul_halaman', 'Kode Soal tagihan_air')
@section('konten')
    <a href="{{ route('eas.index') }}" class="btn btn-secondary mb-4">Kembali</a>

    <div class="card">
        <div class="card-header">
            Form Tambah Data Tagihan Air
        </div>

        <div class="card-body">
            <form action="{{ route('eas.store') }}" method="post" onsubmit="return validasiForm()">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <div class="form-group col-sm-4">
                        <label for="NoMeteran" class="form-label">No Meteran</label>
                        <input type="text" required maxlength="6" name="NoMeteran" id="NoMeteran" class="form-control">
                    </div>
                    <div class="form-group col-sm-4">
                        <label for="MeterAwal" class="form-label">Meter Awal</label>
                        <input type="text" required name="MeterAwal" id="MeterAwal" class="form-control">
                    </div>
                    <div class="form-group col-sm-4">
                        <label for="MeterAkhir" class="form-label">Meter Akhir</label>
                        <input type="text" required name="MeterAkhir" id="MeterAkhir" class="form-control">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>

            </form>
        </div>
    </div>
    <script>
        function validasiForm() {
            let noMeteran = document.getElementById('NoMeteran').value.trim();
            let meterAwal = document.getElementById('MeterAwal').value.trim();
            let meterAkhir = document.getElementById('MeterAkhir').value.trim();

            if (Number(meterAkhir) <= (Number(meterAwal) + 20)) {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Meter Akhir harus melebihi 20 Meter Awal",
                    icon: "error"
                });
                return false;
            }

            if (isNaN(meterAkhir) || isNaN(meterAwal)) {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Meter Awal dan Meter Akhir harus berupa angka",
                    icon: "error"
                });
                return false;
            }
            return true;
        }
    </script>
@endsection
