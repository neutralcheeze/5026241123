<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiDBController extends Controller
{
    public function index() {
        $pegawai = DB::table('pegawai')->get();

        return view('pegawaiIndex', [
            'pegawai' => $pegawai,
        ]);
    }
}
