<div>
    @if ($items->count() == 0)
        <h2>Data Masih Kosong... <a href="{{ route('dashboard.show') }}" class="btn btn-primary">Dashboard</a></h2>
    @else
        <button class="btn btn-primary" wire:click="checkout">Checkout</button>
        <h1>Keranjang</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Paket</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Total</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $index => $item)
                    <tr>
                        <th scope="row">{{ $index + 1 }}</th>
                        <td>{{ $item->nama_paket }}</td>
                        <td>{{ $item->jenis }}</td>
                        <td>Rp.{{ number_format($item->harga, 2, ',', '.') }}</td>
                        <td class="text-center">
                            <ul class="pagination" style="width: 10px !important; margin: 0; ">
                                <li class="page-item">
                                    <a wire:click="updateQty({{ $item->id_keranjang }}, 'decrement')" class="page-link"
                                        href="#">-</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">{{ $item->qty }}</a></li>
                                <li class="page-item">
                                    <a wire:click="updateQty({{ $item->id_keranjang }}, 'increment')" class="page-link"
                                        href="#">+</a>
                                </li>
                            </ul>
                        </td>
                        <td>Rp.{{ number_format($item->qty * $item->harga, 2, ',', '.') }}</td>
                        <td>

                            <button wire:click="delete({{ $item->id_keranjang }})"
                                class="badge bg-danger">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
