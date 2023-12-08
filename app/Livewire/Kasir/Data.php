<?php

namespace App\Livewire\Kasir;

use Darryldecode\Cart\Cart;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Illuminate\Support\Facades\Session;

class Data extends Component
{
    public $cart = [];
    public $paket;
    public $id_outlet;

    public function mount($paket)
    {
        // Ambil data keranjang dari session saat komponen dimuat
        $this->cart = Session::get('cart', []);
        $this->paket = $paket;
        $this->id_outlet = $paket[0]->id_outlet;
    }

    public function add_cart($id_paket)
    {
        DB::table('keranjang')->insert([
            'id_outlet' => $this->id_outlet,
            'id_paket' => $id_paket,
            'qty' => 1
        ]);
        
    }

    public function render()
    {
        return view('livewire.kasir.data');
    }
}
