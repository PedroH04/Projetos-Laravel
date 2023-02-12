<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
    <title>Escolas Cadastradas!</title>
</head>
<body>
<div class="container">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Escolas</th>
            </tr>
        </thead>
        <tbody>
            <tr>
              @foreach($EscolasCadastradas as $Escolas)
                <td>{{ $Escolas->id }}</td>
                <td id="foreach_link"><a href="{{ route('AllControllers.CursosCadastrados', $Escolas->id) }}" id="foreach_texto">{{$Escolas->Nome }} </a></td>
                @endforeach 
            </tr>
        </tbody>
    </table>    
      <p>Ei! Clique na escola e veja os cursos cadastrados!</p> 
      <div class="btn_class">
        <button id="cadastrar_voltar"><a href="{{ route('AllControllers.RegistrarCursosHome') }}">Home</a></button>  
      </div>
</div>
<style>
    body{
        background: rgb(2,0,36);
        background: linear-gradient(152deg, rgba(2,0,36,1) 0%, rgba(60,10,96,1) 52%, rgba(244,0,255,1) 100%);

        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 100vh;
    }

    .container{
        background: transparent;
        
        border-radius: 9px;
        box-shadow: -4px 2px 22px 1px rgba(0,0,0,0.88);
        -webkit-box-shadow: -4px 2px 22px 1px rgba(0,0,0,0.88);
        -moz-box-shadow: -4px 2px 22px 1px rgba(0,0,0,0.88);
        padding: 35px;
        color: white;
        cursor: default;
    }

    .container #foreach_link a{
        color: #f1f1f1;
        opacity: 0.7;
    }
    
    .container #foreach_link a:hover{
        opacity: 1;
        font-weight: bold;
    }
    
    .container #foreach_link:hover {
        transform: scale(1.1);
        transition: 0.8s;
    }
    
     /*  Centralização e Estilização dos botões  */
    div.btn_class #cadastrar_voltar{
        display: flex;
        align-items: center;
        justify-content: center;
        
        width: 16%;
        
        background: transparent;
        text-transform: uppercase;
        cursor: pointer;        
        border: 1px solid black;
        border-radius: 5px;

        margin-top: 5px;
        transition: 0.3s;
        opacity: 0.9;
    }

    div.btn_class #cadastrar_voltar a{
        color: #0b0b0b;
        padding: 10px;
        padding: 10px 45px;
    }

    div.btn_class #cadastrar_voltar a:hover{
        color: white;
    }

    div.btn_class #cadastrar_voltar:hover{
        background: #d105ff;
        color: white;
        opacity: 1;
        transform: scale(0.9);
    }


</style>
</body>

</html>

