<div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Username</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($user as $index => $item)
          <tr>
            <th scope="row">{{$index+1}}</th>
            <td>{{$item->nama}}</td>
            <td>{{$item->username}}</td>
            <td>
                <a href="{{route('user.edit', $item->id)}}" class="badge bg-warning">Edit</a>
                <button wire:click="delete({{$item->id}})" class="badge bg-danger">Delete</button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
