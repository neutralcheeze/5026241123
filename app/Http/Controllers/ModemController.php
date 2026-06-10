<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ModemController extends Controller
{
    public function index()
    {
        // mengambil data dari table modem
        $modem = DB::table('modem')->get();

        // mengambil data dari table modem dengan pagination
        $modem = DB::table('modem')->paginate(10);

        return view('modemIndex', [
            'modem' => $modem,
        ]);
    }

    public function cari(Request $request) {
        $cari = $request->cari;

        $modem = DB::table('modem')
            ->where('merkmodem', 'like', "%". $cari ."%")
            ->paginate();

        return view('modemIndex', [
            'modem' => $modem,
        ]);
    }

    // method untuk menampilkan view form tambah modem
    public function tambah()
    {
        // memanggil view tambah
        return view('tambahModem');
    }

    // method untuk insert data ke table modem
    public function store(Request $request)
    {
        // insert data ke table modem
        DB::table('modem')->insert([
            'merkmodem' => $request->merkmodem,
            'stockmodem' => $request->stockmodem,
            'tersedia' => $request->has("tersedia") ? 'Y' : 'N',
        ]);
        // alihkan halaman ke halaman modem
        return redirect('/modem');
    }

    // method untuk edit data modem
    public function edit($id)
    {
        // mengambil data modem berdasarkan id yang dipilih
        $modem = DB::table('modem')->where('kodemodem', $id)->get();
        // passing data modem yang didapat ke view edit.blade.php
        return view('editModem', ['modem' => $modem]);
    }

    // update data modem
    public function update(Request $request)
    {
        // update data modem
        DB::table('modem')->where('kodemodem', $request->kodemodem)->update([
            'merkmodem' => $request->merkmodem,
            'stockmodem' => $request->stockmodem,
            'tersedia' => $request->has("tersedia") ? 'Y' : 'N',
        ]);
        // alihkan halaman ke halaman modem
        return redirect('/modem');
    }

    // method untuk hapus data modem
    public function hapus($id)
    {
        // menghapus data modem berdasarkan id yang dipilih
        DB::table('modem')->where('kodemodem', $id)->delete();

        // alihkan halaman ke halaman modem
        return redirect('/modem');
    }
}
