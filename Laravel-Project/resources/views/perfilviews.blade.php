@extends('layouts.MainData')
@section('title','Perfil')
@section('conteudo')

<style>
    #container{
  border: 2px solid black;
  width: 80%;
  height: 25%;
  border-radius: 0px 0px 20px 20px ;
  box-shadow: 1px 1px 20px #000;
  background-color:#F0F8FF;
} 

.btn{
  border: 1px solid black;
  padding: 5px;
  margin-left: 3px;
  width: 100px;
  background-color: #000;

}
a {
  color: white;
}

td{
  border: 1px solid #DCDCDC;
}
th {
  border-right: 1px solid #DCDCDC;
  border-bottom: 1px solid #DCDCDC;
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
        <th scope="col">Observation</th>
      </tr>
    </thead>
<tbody>
      <tr>
        <th scope="row">{{$data -> id}}</th>
        <td>{{$data -> name}}</></td>
        <td>{{$data -> email}}</td>
        <td>{{$data -> cidade}}</td>
        <td>{{$data -> observation}}</td>
    </tr>
  </table>
  <button type="button" class="btn"><a href="{{ route('DataControllers.Home') }}"><=Voltar</></button>
  </section>
  </div>
    @endsection