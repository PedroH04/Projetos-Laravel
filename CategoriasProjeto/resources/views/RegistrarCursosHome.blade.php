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
    <header>Cadastre Seu Curso:</header>
    <section>
            <form  method="post" action="{{ route('AllControllers.RegistrarCursosHome') }}">
                @csrf
            <div class="textfield">
                <label for="Nome">Nome Do curso:</label>
                <input type="text" name="Nome" id="Nome">
            </div>
            <div class="select_curso">
            <select name="second_id" id="second_id"  >
                <option value="" disabled selected>---- Escolha a Escola ----</option>
                @foreach($RegistrarCursos as $RegistrarCurso)
                <option value="{{$RegistrarCurso->id}}">{{ $RegistrarCurso->Nome }}</option>
                @endforeach
            </select>
            </div
            >
            <div class="registrar_escola">
                <p><a href="{{ route('AllControllers.EscolasCadastroHome') }}">Registrar escola</a></p>
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

div.form_btns{
    margin: 10px 20px 10px 20px;
}

div.registrar_escola{
    margin: 5px;
}
div.btn_form{
    border-radius: 5px;
    border: 1px solid black;
}

a{
    text-decoration: none;
}

</style>
</html>