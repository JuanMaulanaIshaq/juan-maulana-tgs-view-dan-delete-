@extends('tampilan.welcome')
@section('contant')
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">email</th>
      <th scope="col">name</th>
      <th scope="col">addres</th>
      <th scope="col">phone</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    @foreach($items as $item) 
      <th scope="row">{{ $item->id }}</th>
      <td>{{ $item->email }}</td>
      <td>{{ $item->name }}</td>
      <td>{{ $item->addres}}</td>
      <td>{{ $item->phone }}</td>
      <td><form action="/delete/{{ $item->id }}" method="post">
  @method('delete')
  @csrf
    <button class="btn btn-flat btn-danger" onclick="return confirm('Delete data?')">Hapus</button>
</form></td>
    @endforeach
    </tr>
  </tbody>
</table>
@endsection