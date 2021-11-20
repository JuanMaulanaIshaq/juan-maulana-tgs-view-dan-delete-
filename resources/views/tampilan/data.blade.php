@extends('tampilan.welcome')
@section('contant')
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">description</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    @foreach($items as $item) 
      <th scope="row">{{ $item->id }}</th>
      <td>{{ $item->name }}</td>
      <td>{{ $item->description }}</td>
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