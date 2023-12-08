<div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Pegawai</th>
            <th scope="col">Paket</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $index => $item)
          <tr>
            <th scope="row">{{$index+1}}</th>
            <td>{{$item->nama}}</td>
            <td>{{$item->alamat}}</td>
            <td><a href="{{route('user.show', $item->id)}}" class="btn btn-warning">User</a></td>
            <td><a href="{{route('paket_outlet.show', $item->id)}}" class="btn btn-warning">Paket</a></td>
            <td>
                <a href="{{route('outlet.edit', $item->id)}}" class="badge bg-warning">Edit</a>
                <button wire:click="delete({{$item->id}})" class="badge bg-danger">Delete</button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
