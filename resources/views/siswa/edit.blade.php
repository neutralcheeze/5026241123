@extends('template1')
@section('title', 'Edit Data Siswa')
@section('konten')
    <div class="card">
        <div class="card-header">
            Edit Data {{ $siswa->Nama }}
        </div>

        @if ($errors->any())
            <ul style="color: red;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <div class="card-body">
            <form action="{{ route('siswa.update', $siswa->NRP) }}" method="post" onsubmit="return validasiForm()">
                {{ csrf_field() }}
                @method('PUT')

                <div class="row mb-3">
                    <label for="NRP" class="col-sm-2 col-form-label">NRP</label>
                    <div class="col-sm-10">
                        <input type="text" maxlength="10" name="NRP" id="NRP" class="form-control" value="{{ old('NRP', $siswa->NRP) }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" maxlength="20" name="Nama" id="Nama" class="form-control" value="{{ old('Nama', $siswa->Nama) }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="Kelas" class="col-sm-2 col-form-label">Kelas</label>
                    <div class="col-sm-10">
                        <input type="text" maxlength="5" name="Kelas" id="Kelas" class="form-control" value="{{ old('Kelas', $siswa->Kelas) }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="TanggalLahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                        <input type="date" maxlength="5" name="TanggalLahir" id="TanggalLahir" class="form-control" value="{{ old('TanggalLahir', $siswa->TanggalLahir) }}">
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        function validasiForm() {
            let nrp = document.getElementById('NRP').value.trim();
            let nama = document.getElementById('Nama').value.trim();
            let kelas = document.getElementById('Kelas').value.trim();
            let tanggal = document.getElementById('TanggalLahir').value;

            if (nrp === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "NRP wajib diisi",
                    icon: "error"
                });
                return false;
            }

            if (nrp.length > 10) {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "NRP maksimal 10 karakter",
                    icon: "error"
                });
                return false;
            }

            if (nama === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Nama wajib diisi",
                    icon: "error"
                });
                return false;
            }

            if (nama.length > 20) {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Nama maksimal 20 karakter",
                    icon: "error"
                });
                return false;
            }

            if (kelas === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Kelas wajib diisi",
                    icon: "error"
                });
                return false;
            }

            if (kelas.length > 5) {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Kelas maksimal 5 karakter",
                    icon: "error"
                });
                return false;
            }

            if (tanggal === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Tanggal lahir wajib diisi",
                    icon: "error"
                });
                return false;
            }

            return true;
        }
    </script>
@endsection
