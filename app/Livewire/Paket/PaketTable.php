<?php

namespace App\Livewire\Paket;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class PaketTable extends Component
{
    public $paket;
    public $id_outlet;

    public function mount($paket, $outlet)
    {
        $this->paket = $paket;
        $this->id_outlet = $outlet[0]->id;
    }

    public function delete($id)
    {
        DB::table('tb_paket')->where('id', $id)->delete();
        redirect('/paket/' . $this->id_outlet);
    }
    public function render()
    {
        return view('livewire.paket.paket-table');
    }
}
