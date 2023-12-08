<div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Paket</th>
            <th scope="col">Jenis</th>
            <th scope="col">Harga</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($paket as $index => $item)
          <tr>
            <th scope="row">{{$index+1}}</th>
            <td>{{$item->nama_paket}}</td>
            <td>{{$item->jenis}}</td>
            <td>{{$item->harga}}</td>
            <td>
                <a href="{{route('paket_outlet.edit', $item->id)}}" class="badge bg-warning">Edit</a>
                <button wire:click="delete({{$item->id}})" class="badge bg-danger">Delete</button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
