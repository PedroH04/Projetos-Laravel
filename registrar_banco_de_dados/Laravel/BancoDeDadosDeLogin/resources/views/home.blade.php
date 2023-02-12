@extends('layout.main')
@section('title','Conta Dos Usuarios')
@section('content')   

 <table class="table">
    <thead class="table-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Usuario</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
        @foreach($datas as $data )
    <tr>
      <th scope="row">{{$data->id}}</th>
      <td><a href="{{ route('AllControllers.UserView', $data) }}">{{$data->usuario}}</a></td>
      <td>{{$data->email}}</td>
    </tr>
    @endforeach
  </thead>
  </tbody>
</table>
<button type="button" class="btn btn-dark" ><a href="{{ route('AllControllers.Cadastroview') }}">Cadastre-se</a></button>
@endsection