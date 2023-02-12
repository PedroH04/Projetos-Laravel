<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre sua Escola!</title>
</head>
<body>
    <div id="container">
    <header> 
            <p id="texto_cima"> Cadastre Sua Escola </p>
            <p id="texto_baixo">No Nosso SITE</p>
    </header>
    <section>
        <div class="textfield">
            <form  action="" method="post" >
                @csrf
                <label for="Nome">Nome Da Escola :</label>
                <input type="text" name="Nome" id="Nome-input">   
            </div>

            <div class="form_btns">
                <button id="cadastrar_voltar" class="btn_form"><a href="{{ route('AllControllers.RegistrarCursosHome') }}">Voltar</a></button>
                <button type="submit" id="cadastrar_button" class="btn_form" onclick="alert('Escola Registrada!')">Cadastrar</button>
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
    }

    header{
        text-align: center;
        color: white;
    }
    
    header #texto_cima{
        font-size: 35px;
    }
    header #texto_baixo{
        font-size: 30px;
    }

    section{
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;

        color: white;

        font-size: 1.5rem;
    }

    .textfield #Nome-input{
        display: flex;
        align-items: center;

        border-radius: 10px;
        padding: 2px 5px;
        width: 100%;
        margin: 15px 0px;
        
    }

    .form_btns .btn_form{
        padding: 10px;
        margin-top: 5px;
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
        opacity: 1;
    }

    div.form_btns #cadastrar_voltar{
        width: 48%;

        background: transparent;
        cursor: pointer;
        
        border-radius: 5px;
        border: 1px solid black;

        transition: 0.3s;
        opacity: 0.7;
    }
    div.form_btns #cadastrar_voltar:hover{
        background-color:#d105ff;
        color: white;
        opacity: 1;
    }

    div.form_btns #cadastrar_voltar a{
        color: black;
        text-decoration: none;
        text-transform: uppercase;
        padding: 10px 20px;
    }
    div.form_btns #cadastrar_voltar a:hover{
        color: white;
    }
</style>

</html>