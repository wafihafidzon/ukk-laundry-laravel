<?php

namespace App\Livewire\Pegawai;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Edit extends Component
{
    public $id_outlet;
    public $id;
    public $nama;
    public $username;
    public $role;
    
    public function mount($user)
    {
        foreach($user as $user)
        {
            $this->id_outlet = $user->id_outlet;
            $this->id = $user->id;
            $this->role = $user->role;
            $this->nama = $user->nama;
            $this->username = $user->username;
        }
    
    }

    public function update()
    {
        $this->validate([
            'username' => 'required|max:255',
            'nama' => 'required|max:255',
        ]);
        DB::table('tb_user')
              ->where('id', $this->id)
              ->update([
                  'username' => $this->username,
                  'nama' => $this->nama,
                  'role' => $this->role,
              ]);

        redirect('/user/'.$this->id_outlet);
    }
    public function render()
    {
        return view('livewire.pegawai.edit');
    }
}
