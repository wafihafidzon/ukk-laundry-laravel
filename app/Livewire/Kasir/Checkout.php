<?php

namespace App\Livewire\Kasir;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Checkout extends Component
{
    public $id_outlet;
    public $nama;
    public $alamat;
    public $keranjang;
    public $telepon;

    public function mount($keranjang)
    {
        $this->keranjang = $keranjang;
        $this->id_outlet = $keranjang[0]->id_outlet;
    }

    public function checkout()
    {
        $member = [
            'nama' => $this->nama,
            'alamat' => $this->alamat,
            'tlp' => $this->telepon
        ];
    
        $id_member = DB::table('tb_member')->insertGetId($member);

        $invoice = [
            'kode_invoice' => 'INV-' . date('mdHis') . '-' . sprintf("%04s", $id_member),
            'id_member' => $id_member,
            'id_outlet' => $this->id_outlet,
            'tgl_bayar' => now(), // Menggunakan helper now() untuk mendapatkan waktu saat ini
            'status_laundry' => 'baru',
            'status_pembayaran' => 'dibayar',
        ];

        $id_invoice = DB::table('tb_transaksi')->insertGetId($invoice);

        foreach ($this->keranjang as $item) {
            $detail_transaksi = [
                'id_transaksi' => $id_invoice,
                'id_paket' => $item->id,
                'qty' => $item->qty,
            ];
    
            DB::table('tb_detail_transaksi')->insert($detail_transaksi);
        }

        DB::table('keranjang')->where('id_outlet', $this->id_outlet)->delete();

        return redirect('/dashboard');
    }
    public function render()
    {
        return view('livewire.kasir.checkout');
    }
}
