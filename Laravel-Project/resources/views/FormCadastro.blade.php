@extends('layouts.MainData')
@section('title','Cadastro')
@section('conteudo')    

<style>
    *{
        padding: 0;
        margin: 0;
    }
   

        
    .container{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: row;
        height: 100vh;
        width: 100%;
    }

      form {
        border: 2px solid black;
        padding: 20px;
        background-color:#F0F8FF;
        box-shadow: 1px 1px 20px #000;
        border-radius: 20px;
      }
    #observation{
        margin-bottom: 10px;
        }

    button{
            margin: 15px;
        }
        a{
          text-decoration: none;
        }

        #btnvoltar{
          border: 1px solid black;
          padding: 8px;
          width: 100px;
        }

        #cadastrobtn{
          border: 1px solid black;
          padding: 8px;
          width: 100px;
        }
        #cadastrobtn:hover{
          background-color: #FF6347;
        }
        #btnvoltar:hover{
          background-color:#BA55D3;
        }
        #btnvoltar a {
          color:black;
        }


</style>
<section>
<div class="container">
  <form class="row g-3" action="{{ route('DataControllers.RegistrarView') }}" method="POST"> 
  @csrf
  <div class="col-md-6">
    <label for="name" class="form-label">Nome</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <div class="col-md-6">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <div class="col-12">
    <label for="cidade" class="form-label">Cidade</label>
    <input type="text" class="form-control" id="cidade" name="cidade">
  </div>
  <div class="col-12">
    <label for="observation" class="form-label">Observação</label>
    <input type="text" class="form-control" id="observation" name="observation">
  </div>
  <button type="submit" class="btn" id="cadastrobtn">Cadastrar</button>
  <button type="button" class="btn" id="btnvoltar"><a href="{{ route('DataControllers.Home') }}">Voltar</></button>
</form>
</section>
</div>
@endsection