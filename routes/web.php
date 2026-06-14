<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\KeranjangBelanjaController;
use App\Http\Controllers\ModemController;
use App\Http\Controllers\NilaiKuliahController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo', function() {
    return "<h1>Halo, Selamat datang di tutorial laravel <u>www.malasngoding.com</u>";
});


Route::get('/pertemuan5', function() {
    return view('pertemuan5');
});


Route::get('/grid', function () {
    return view('grid');
})->name('grid.index');

Route::get('/intro', function () {
    return view('intro');
})->name('intro.index');

Route::get('/news', function () {
    return view('news');
})->name('news.index');

Route::get('/responsive', function () {
    return view('responsive');
})->name('responsive.index');

Route::get('/template', function () {
    return view('template');
})->name('template.index');

Route::get('/tooltip', function () {
    return view('tooltip');
})->name('tooltip.index');

Route::get('/menu', function () {
    return view('menu');
})->name('menu.index');

Route::get('/blog', function () {
    return view('blog');
})->name('blog.index');

Route::get('/linktree', function() {
    return view('linktree');
});

Route::get('/dosen', [DosenController::class, 'index'])->name('dosen.index');
Route::get('/biodata', [DosenCOntroller::class, 'biodata'])->name('dosen.biodata');

Route::get('/pegawailama/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

// PegawaiDBController
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);

//route CRUD siswa
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

// ModemController
Route::get('/modem', [ModemController::class, 'index']);
Route::get('/modem/tambah', [ModemController::class, 'tambah']);
Route::post('/modem/store', [ModemController::class, 'store']);
Route::get('/modem/edit/{id}', [ModemController::class, 'edit']);
Route::post('/modem/update', [ModemController::class, 'update']);
Route::get('/modem/hapus/{id}', [ModemController::class, 'hapus']);
Route::get('/modem/cari', [ModemController::class, 'cari']);

// KeranjangBelanjaController
Route::get('/keranjangbelanja', [KeranjangBelanjaController::class, 'index']);
Route::get('/keranjangbelanja/tambah', [KeranjangBelanjaController::class, 'tambah']);
Route::post('/keranjangbelanja/store', [KeranjangBelanjaController::class, 'store']);
Route::get('/keranjangbelanja/hapus/{id}', [KeranjangBelanjaController::class, 'hapus']);

// NilaiKuliahController
Route::get('/nilaikuliah', [NilaiKuliahController::class, 'index']);
Route::get('/nilaikuliah/tambah', [NilaiKuliahController::class, 'tambah']);
Route::post('/nilaikuliah/store', [NilaiKuliahController::class, 'store']);
