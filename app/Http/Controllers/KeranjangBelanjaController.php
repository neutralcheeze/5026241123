<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangBelanjaController extends Controller
{
    public function index()
    {
        $keranjangbelanja = DB::table('keranjangbelanja')->get();

        return view('keranjangbelanja.index', [
            'keranjangbelanja' => $keranjangbelanja,
        ]);
    }

    public function tambah()
    {
        // memanggil view tambah
        return view('keranjangbelanja.tambah');
    }

    public function store(Request $request)
    {
        // insert data ke table keranjang
        DB::table('keranjangbelanja')->insert([
            'KodeBarang' => $request->KodeBarang,
            'Jumlah' => $request->Jumlah,
            'Harga' => $request->Harga,
        ]);
        // alihkan halaman ke halaman keranjang
        return redirect('/keranjangbelanja');
    }

    public function hapus($id)
    {
        // menghapus data keranjang berdasarkan id yang dipilih
        DB::table('keranjangbelanja')->where('ID', $id)->delete();

        // alihkan halaman ke halaman keranjang
        return redirect('/keranjangbelanja');
    }
}
