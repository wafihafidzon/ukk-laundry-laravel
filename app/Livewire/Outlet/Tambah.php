<?php

namespace App\Livewire\Outlet;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Tambah extends Component
{
    public $id;
    public $nama;
    public $alamat;
    public $telepon;

    public function store()
    {
        $this->validate([
            'nama' => 'required|string|min:3',
            'alamat' => 'required|string',
            'telepon' => 'required|min:10',
        ]);

        DB::table('tb_outlet')->insert([
            'nama' => $this->nama,
            'alamat' => $this->alamat,
            'tlp' => $this->telepon,
        ]);

        session()->flash('success', 'User created successfully!');
        $this->nama = '';
        $this->alamat = '';
        $this->telepon = '';

        return $this->redirect('/outlet', navigate: true);
    }

    public function edit($id)
    {
        $user = DB::table('tb_outlet')
            ->where('id', $id)
            ->get();

            $this->id = $user[0]->id;
            $this->nama = $user[0]->nama;
            $this->alamat = $user[0]->alamat;
            $this->telepon = $user[0]->telepon;
            return view('livewire.outlet.tambah');
    }

    public function render()
    {
        return view('livewire.outlet.tambah');
    }
}
