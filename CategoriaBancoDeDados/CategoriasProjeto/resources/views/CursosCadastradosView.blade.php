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
                <th>Cursos</th>
            </tr>
        </thead>
        <tbody>
            <tr>
              @foreach($CursosCadastrados as $Cursos)
                <td id="for_id">{{ $Cursos['second_id']}}</a></td>
                <td id="for_nome">{{ $Cursos['Nome']}}</a></td>
                @endforeach 
            </tr>
        </tbody>
    </table>

    <div class="btns_class">
    <button id="button_voltar" class="btn_form"><a href="{{ route('AllControllers.EscolasCadastradas') }}" id="voltar_link">Voltar Pagina</a></button>
    <button id="button_home" class="btn_form"><a href="{{ route('AllControllers.RegistrarCursosHome') }}" id="home_link">Home</a></button>
    </div>
</div>
</body>
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

    div.container{
        background: transparent;
        border-radius: 9px;
        box-shadow: -4px 2px 22px 1px rgba(0,0,0,0.88);
        -webkit-box-shadow: -4px 2px 22px 1px rgba(0,0,0,0.88);
        -moz-box-shadow: -4px 2px 22px 1px rgba(0,0,0,0.88);
        padding: 35px;
        color: white;
        cursor: default;
    }

    
    div.container #for_nome:hover{
        transform: scale(1.1);
        transition: 0.3s;
       cursor: default;
    }
     /*  Centralização e Estilização dos botões  */

    div.btns_class{
        display: flex;
        justify-content: start;
    }
    
    div.btns_class .btn_form{
        display: flex;
        align-items: center;
        justify-content: center;
        
        width: 24%;
        
        color: black;
        background: transparent;
        text-transform: uppercase;
        cursor: pointer;        
        border: 1px solid black;
        border-radius: 5px;
        transition: 0.3s;
        opacity: 0.7;
        
        margin-top: 5px;
    }
    
    div.btns_class #button_home{
        margin-left: 20px;

    }

    div.btns_class .btn_form a{
        color: black;
        text-decoration: none;
        text-transform: uppercase;
    }

    div.btns_class .btn_form #home_link{
        padding: 10px 84px ;
    }
    
    div.btns_class .btn_form #voltar_link{
        padding: 10px 44.35px ;
    }

    div.btns_class .btn_form a:hover{
        color: white;
    }

    div.btns_class .btn_form:hover{
        background: #d105ff;
        color: white;
        opacity: 1;
        transform: scale(0.9);
    }



</style>
</html>

