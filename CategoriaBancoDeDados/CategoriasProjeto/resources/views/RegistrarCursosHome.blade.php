<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre seu Curso!</title>
</head>
<body>
    <div id="container">
    <header>
             <p id="texto_cima"> Cadastre Seu Curso </p>
             <p id="texto_baixo"> Nas Nossas Escolas! </p>   
            <span>sua escola não esta na lista? <a href="{{ route('AllControllers.EscolasCadastroHome') }}" id="cadastrar_link">clique aqui</a> para cadastrar.</span>
    </header>

    <section>
        <div class="textfield">
                <form  method="post" action="{{ route('AllControllers.RegistrarCursosHome') }}">
                <label for="Nome" id="label_nome">Nome Do curso:</label>
                <input type="text" name="Nome" id="Nome-input">
                <div class="select_curso">
                <select name="second_id" id="second_id">
                    <option value="" disabled selected>-------- Escolha a Escola --------</option>
                    @foreach($RegistrarCursos as $RegistrarCurso)
                    <option value="{{$RegistrarCurso->id}}">{{ $RegistrarCurso->Nome }}</option>
                    @endforeach
                </select>
                </div>
            </div>
            <div class="registrar_escola">
                <a href="{{ route('AllControllers.EscolasCadastradas') }}">Escolas e Cursos Cadastrados</a>
            </div>
            <div class="form_btns">
                <button type="submit" id="cadastrar_button" class="btn_form" onclick="alert('Curso Registrado!')">Cadastrar</button>
            </div>
        </form>
    </section>
    </div>
</body>
<style>
     @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,500&display=swap');
    
    *{
        padding: 0;
        margin: 0;
  
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }
  
        body{
        width: 100%;
        height: 100vh;
  
        background: rgb(2,0,36);
        background: linear-gradient(152deg, rgba(2,0,36,1) 0%, rgba(60,10,96,1) 52%, rgba(244,0,255,1) 100%);
  
        display: flex;
        justify-content: center;
        align-items: center;
    }
      
    #container{
        height: 40vh;
        width: 100%;
  
        box-shadow: -7px 11px 30px 17px rgba(0,0,0,0.1),0px 10px 15px -3px rgba(0,0,0,0.1);
  
        display: flex;
        justify-content: space-around;
        align-items: center;

        cursor: default;
      }
  
      /* Centralização e Estilização dos textos da Esquerda*/
    header{
        text-align: center;
         color: white;
         font-weight: bold;
    }

    header #texto_cima{
        font-size: 35px;
    }
    header #texto_baixo{
        font-size: 25px;
    }

    
    /* ---------------  Centralização e Estilização dos Campos do formulario ---------------*/
    div.textfield #Nome-input{
        display: flex;
        align-items: center;

        border-radius: 10px;
        padding: 2px 5px;
        width: 100%;
        margin: 10px 0px;
    }

    div.textfield form{
        text-align: center;

        color: white;
        font-weight: 300;
    }

    /*  Centralização e Estilização do select  */
    div.textfield #second_id{
        width: 100%;

        margin: 2px 0px;

        background: white;
        border-radius: 8px;
        background: transparent;
        border: 1px solid black;

        transition: 0.5s;
        opacity: 0.5 ;
    }

    div.textfield #second_id:focus{
        background: #a304c7;
        color: white;
        opacity: 1;
    }

    div.textfield #second_id:hover{
        background-color: #ca14fc;
        opacity: 1;
        
        cursor: pointer;
    }

     /*  Centralização e Estilização dos botões  */
    div.form_btns .btn_form{
        padding: 10px;
        margin-top: 5px;
        display: flex;
        align-items: center;
        justify-content: center;

    }
    div.form_btns{
        display: flex;
        justify-content: center;
    }

    div.form_btns #cadastrar_button{
        width: 48%;

        color: black;
        background: transparent;
        text-transform: uppercase;
        cursor: pointer;
        
        border: 1px solid black;
        border-radius: 5px;
        transition: 0.3s;
        opacity: 0.7;

    }

    div.form_btns #cadastrar_button:hover{
        background: #d105ff;
        color: white;
        font-weight: bold;
        opacity: 1;
        transform: scale(0.9);
    }

    /*  Centralização e Estilização dos Links  */

  header a{
     color: #d105ff;
     text-decoration: none;
  }
  
  section a{
     color: rgb(50, 0, 86);
     text-decoration: none;
     font-weight: bold;
     transition: 0.5s;
     
  }

  section a:hover{
    color:#d105ff ;
    font-weight: bold;
  }

</style>
</html>
