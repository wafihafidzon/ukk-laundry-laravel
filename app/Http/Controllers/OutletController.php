<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OutletController extends Controller
{
    public function show($id)
    {
        $user = DB::table('tb_users')->get();
        return view('users.show', ['user' => $user]);
    }

    public function store() 
    {
        return view('outlet.create');
    }

    public function edit($id)
    {
        $user = DB::table('tb_outlet')
            ->where('id', $id)
            ->get();
        return view('outlet.edit', ['user' => $user]);
    }
}
