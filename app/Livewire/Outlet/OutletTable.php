<?php

namespace App\Livewire\Outlet;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class OutletTable extends Component
{
    public function render()
    {
        return view('livewire.outlet.outlet-table', [
            'users' => DB::table('tb_outlet')->get()
        ]);
    }

    public function delete($id)
    {
        var_dump($id);
        DB::table('tb_outlet')->where('id', $id)->delete();
        // redirect('/outlet');
    }
}
