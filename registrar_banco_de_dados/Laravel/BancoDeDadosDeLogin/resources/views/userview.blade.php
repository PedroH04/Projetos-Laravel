@extends('layout.main')
@section('title','Conta')
@section('content')

    <table class="table">
    <thead class="table-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Usuario</th>
      <th scope="col">Email</th>
      <th scope="col">senha</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{$datas->id}}</th>
      <td>{{$datas->usuario}}</a></td>
      <td>{{$datas->email}}</td>
      <td>{{$datas->senha}}</td>
    </tr>
  </thead>
  </tbody>
</table>
<button type="button" class="btn btn-info"><a href="{{ route('HomeController') }}">Voltar</a></button>

@endsection

  