<?php

namespace App\Livewire\Pegawai;

use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Tambah extends Component
{
    public $nama;
    public $username;
    public $role;
    public $password;
    public $id_outlet;

    public function mount($id_outlet)
    {
        $this->id_outlet = $id_outlet;
    }

    public function store()
    {
        $this->validate([
            'nama' => 'required',
            'username' => 'required',
            'role' => 'required',
            'password' => 'required',
        ]);

        DB::table('tb_user')->insert([
            'id_outlet' => $this->id_outlet,
            'username' => $this->username,
            'nama' => $this->nama,
            'role' => $this->role,
            'password' => Hash::make($this->password),
        ]);

        redirect('/user/' . $this->id_outlet);
    }
    public function render()
    {
        return view('livewire.pegawai.tambah');
    }


}
