<?php

namespace App\Livewire\Kasir;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Keranjang extends Component
{
    public $items;
    public function mount($keranjang)
    {
        $this->items = $keranjang;

    }
    public function updateQty($id, $action)
    {
        $qty = DB::table('keranjang')->where('id', $id)->first();
        if ($item = $this->items) {
            if ($action == 'increment') {
                DB::table('keranjang')->where('id', $id)->increment('qty');
            } elseif ($action == 'decrement' && $qty->qty > 0) {
                DB::table('keranjang')->where('id', $id)->decrement('qty');
            }
            redirect('/keranjang');
        }
    }

    public function checkout()
    {
        redirect('/checkout');
    }
    public function delete($id)
    {
        DB::table('keranjang')->where('id', $id)->delete();
        redirect('/keranjang');
    }

    public function render()
    {
        return view('livewire.kasir.keranjang');
    }
}
