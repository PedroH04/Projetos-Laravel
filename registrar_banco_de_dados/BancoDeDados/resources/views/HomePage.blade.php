<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Usuários Cadastrados!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
  

 <table class="table">
    <thead class="table-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Sobrenome</th>
      <th scope="col">Email</th>
      <th scope="col">Contato</th>
      <th scope="col">Endereço</th>
    </tr>
  </thead>
  <tbody>
        @foreach($datas as $data )
    <tr>
      <th scope="row">{{$data->id}}</th>
      <td><a href="{{ route('BancoDeDadosController.Home', $data) }}">{{$data->usuario}}</a></td>
      <td>{{$data->email}}</td>
    </tr>
      @endforeach
    </thead>
    </tbody>
  </table>
  <button type="button" class="btn btn-dark" ><a href="{{ route('AllControllers.Cadastroview') }}">Cadastre-se</a></button>
</html> 


