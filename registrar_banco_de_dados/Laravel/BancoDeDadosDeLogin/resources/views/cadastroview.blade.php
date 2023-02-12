@extends('layout.main')
@section('title.Cadastro De Usuário')
@section('content')
	<form action="{{ route('AllControllers.Cadastroform') }}" method="POST">
@csrf
  <div class="form-group">
    <label for="usuario">Nome de Usuário</label>
    <input type="text" class="form-control" id="usuario" aria-describedby="emailHelp" placeholder="Escreveva Seu Nome de Usuário aqui" name="usuario">
   </div>

  <div class="form-group">
    <label for="email">Endereço de Email</label>
    <input type="email" class="form-control" id="email" placeholder="Digite Seu Endereço de Email aqui">
  </div>

  <div class="form-group">
    <label for="senha">Senha</label>
    <input type="password" class="form-control" id="senha" placeholder="Digite Sua Senha aqui">
    <small id="smallsenha" class="form-text text-muted">Lembre-se, Nunca compartilhe sua senha com ninguém.</small>
  </div>

  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="checkbox">
    <label class="form-check-label" for="checkbox">Não sou um Robo!</label>
  </div>
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
@endsection


  