<?php

namespace App\Livewire\Outlet;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Edit extends Component
{
    public $id;
    public $nama;
    public $alamat;
    public $telepon;

    public function mount($user)
    {
        $this->nama = $user[0]->nama;
        $this->alamat = $user[0]->alamat;
        $this->telepon = $user[0]->tlp;
        $this->id = $user[0]->id;
    }

    public function store()
    {
        $this->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
        ]);

        DB::table('tb_outlet')->where('id', $this->id)->update([
            'nama' => $this->nama,
            'alamat' => $this->alamat,
            'tlp' => $this->telepon,
        ]);

        redirect('/outlet');
    }
    public function render()
    {
        return view('livewire.outlet.edit');
    }
}
