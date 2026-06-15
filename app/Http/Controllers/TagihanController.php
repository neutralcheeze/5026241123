<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TagihanController extends Controller
{
    public function index() {
        $tagihan = DB::table('tagihan_air')->get();
        return view('tagihan_air.index', compact('tagihan'));
    }

    public function tambah() {
        return view('tagihan_air.tambah');
    }

    public function store(Request $request) {
        DB::table('tagihan_air')->insert([
            'NoMeteran' => $request->NoMeteran,
            'MeterAwal' => $request->MeterAwal,
            'MeterAkhir' => $request->MeterAkhir,
        ]);

        return redirect()->route('eas.index');
    }
}
