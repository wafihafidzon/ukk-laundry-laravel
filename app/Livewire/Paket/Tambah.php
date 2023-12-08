<?php

namespace App\Livewire\Paket;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Tambah extends Component
{
    public $id_outlet;
    public $nama_paket;
    public $jenis;
    public $harga;

    public function mount($id_outlet)
    {
        $this->id_outlet = $id_outlet;
    }

    public function store()
    {
        $this->validate([
            'nama_paket' => 'required',
            'jenis' => 'required',
            'harga' => 'required',
        ]);

        DB::table('tb_paket')->insert([
            'id_outlet' => $this->id_outlet,
            'nama_paket' => $this->nama_paket,
            'jenis' => $this->jenis,
            'harga' => $this->harga,
        ]);

        redirect('/paket/' . $this->id_outlet);
    }
    public function render()
    {
        return view('livewire.paket.tambah');
    }
}
