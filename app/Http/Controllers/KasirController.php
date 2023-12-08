<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class KasirController extends Controller
{
    public function index()
    {
        $paket = DB::table('tb_paket')
            ->where('id_outlet', Auth::user()->id_outlet)
            ->get();

        return view('kasir.data', ['paket' => $paket]);
    }

    public function keranjang()
    {
        $keranjang = DB::table('keranjang')
        ->join('tb_paket', 'keranjang.id_paket', '=', 'tb_paket.id')
        ->where('tb_paket.id_outlet', Auth::user()->id_outlet)
        ->select('keranjang.*', 'tb_paket.*', 'keranjang.id as id_keranjang')
        ->get();

        return view('kasir.keranjang', ['keranjang' => $keranjang]);
    }

    public function checkout()  
    {
        $keranjang = DB::table('keranjang')
        ->join('tb_paket', 'keranjang.id_paket', '=', 'tb_paket.id')
        ->where('tb_paket.id_outlet', Auth::user()->id_outlet)
        ->select('keranjang.*', 'tb_paket.*', 'keranjang.id as id_keranjang')
        ->get();

        return view('kasir.checkout', ['keranjang' => $keranjang]);
    }
}
