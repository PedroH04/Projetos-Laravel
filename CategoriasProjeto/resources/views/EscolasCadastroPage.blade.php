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
    <header>Cadastre Sua Escola:</header>
    <section>
            <form  method="post" action="AllControllers.EscolasCadastroHome">
                @csrf
            <div class="textfield">
                <label for="Nome">Nome Da Escola :</label>
                <input type="text" name="Nome" id="Nome">   
            </div>

            <div class="form_btns">
                <button id="cadastrar_voltar" class="btn_form"><a href="{{ route('AllControllers.RegistrarCursosHome') }}">Voltar</a></button>
                <button type="submit" id="cadastrar_button" class="btn_form">Cadastrar</button>
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
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100vh;
        flex-direction: row;
        /* background: #1C1C1C; */
    }

#container{
    border: 1px solid black;
    border-radius: 5px;
    width: 30vw;
    height: 18vw;
    /* background: #363636; */
    text-align: center;
}

header{
    border-bottom:1px solid black;
    padding: 1rem;
}
 
section{
    height: 76%;
}

div.textfield{
    margin: 20px 20px 10px 20px;
}


div.registrar_escola{
    margin: 5px;
}

.form_btns{
    margin: 10px 20px 10px 20px;
}

.btn_form{
    height: 1.7rem;
    width: 5rem;
    border-radius: 5px;
    border: 1px solid black;
    margin: 10px;
}

</style>
</html>