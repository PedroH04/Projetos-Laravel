@extends('layouts.MainData')
@section('title','Dados De Perfil')
@section('conteudo')

<style>
#container{
  border: 2px solid black;
  width: 80%;
  height: 50%;
  border-radius: 0px 0px 20px 20px ;
  box-shadow: 1px 1px 20px #000;
  background-color:#F0F8FF;
} 
  .btn{
    background-color: #212529;
  border: 1px solid black;
  padding: 8px;
  margin-left: 3px;
  width: 140px;
}
td a {
  color: black;
}
button a {
  color: white;
}

</style>
<section>
  <div id="container">
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Cidade</th>
      </tr>
    </thead>
<tbody>
      @foreach ($Datas as $data) 
      <tr>
        <th scope="row">{{$data -> id}}</th>
        <td><a href="{{ route('DataControllers.DataView' , $data) }}">{{$data -> name}}</a></td>
        <td>{{$data -> email}}</td>
        <td>{{$data -> cidade}}</td>
      </tr>
      @endforeach
    </table>
    <button type="button" class="btn"><a href="{{ route('DataControllers.RegistrarView') }}">Cadastre-se</button>
    </div>
  </section>
  @endsection

