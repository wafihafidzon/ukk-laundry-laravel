<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Pegawai extends Controller
{
    public function show($id_outlet)
    {
            $user = DB::table('tb_user')
            ->where('id_outlet', $id_outlet)
            ->get();

            $outlet = DB::table('tb_outlet')
            ->select('id','nama')
            ->where('id', $id_outlet)
            ->get();
        return view('pegawai.show', ['user' => $user, 'outlet' => $outlet]);
    }
    public function edit($id_user)
    {
        $user = DB::table('tb_user')
            ->where('id', $id_user)
            ->get();
        return view('pegawai.edit', ['user' => $user]);
    }
    public function store($id_outlet) 
    {
        return view('pegawai.tambah', ['id_outlet' => $id_outlet]);
    }
}
