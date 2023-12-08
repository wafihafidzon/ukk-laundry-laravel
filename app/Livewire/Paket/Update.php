<?php

namespace App\Livewire\Paket;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Update extends Component
{
    public $id_outlet;
    public $id_paket;
    public $nama;
    public $harga;
    public $jenis;
    
    public function mount($paket)
    {
            $this->id_outlet = $paket[0]->id_outlet;
            $this->id_paket = $paket[0]->id_paket;
            $this->nama = $paket[0]->nama_paket;
            $this->harga = $paket[0]->harga;
            $this->jenis = $paket[0]->jenis;
    
    }

    public function update()
    {
        DB::table('tb_paket')
        ->where('id', $this->id_paket)
        ->update([
            'nama_paket' => $this->nama,
            'harga' => $this->harga,
            // 'role' => $this->role,
        ]);
        redirect('/paket/'.$this->id_outlet);
    }

    // public function update()
    // {
    //     $this->validate([
    //         // 'username' => 'required|max:255',
    //         'nama' => 'required|max:255',
    //     ]);

    //     echo "test";
    //     echo $this->nama;
    //     DB::table('tb_paket')
    //           ->where('id', 4)
    //           ->update([
    //               'nama_paket' => $this->nama,
    //           ]);

    //     redirect('/paket/'.$this->id_outlet);
    // }
    public function render()
    {
        return view('livewire.paket.update');
    }
}
