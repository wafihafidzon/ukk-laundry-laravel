<?php

namespace App\Livewire\Pegawai;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class PegawaiTable extends Component
{
    public $user;
    public $id_outlet;
    public function mount($user, $outlet)
    {
        $this->user = $user;
        $this->id_outlet = $outlet[0]->id;
    }

    public function delete($id)
    {
        DB::table('tb_user')->where('id', $id)->delete();
        redirect('/user/' . $this->id_outlet);
    }
    public function render()
    {
        return view('livewire.pegawai.pegawai-table');
    }
}
