<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaketController extends Controller
{
    public function show($id_outlet)
    {
        $paket = DB::table('tb_paket')
            ->where('id_outlet', $id_outlet)
            ->get();

        $outlet = DB::table('tb_outlet')
            ->select('id', 'nama')
            ->where('id', $id_outlet)
            ->get();

        return view('paket.show', ['paket' => $paket, 'outlet' => $outlet]);
    }

    public function edit($id_paket)
    {
        $paket = DB::table('tb_paket')
            ->join('tb_outlet', 'tb_paket.id_outlet', '=', 'tb_outlet.id')
            ->where('tb_paket.id', $id_paket)
            ->select('tb_paket.*', 'tb_paket.id as id_paket' , 'tb_outlet.id', 'tb_outlet.nama as outlet_nama')
            ->get();


        return view('paket.edit', ['paket' => $paket]);

    }

    public function store($id_outlet)
    {
        return view('paket.tambah', ['id_outlet' => $id_outlet]);
    }
}
