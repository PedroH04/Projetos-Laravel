<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastre-se No Nosso Site!</title>
    <!---------  Icone do navegador  ------>
    <link rel="icon" href="img-logo-page/pngwing.com.png">
    <!---------   Link FontAwesome  ------->
    <script src="https://kit.fontawesome.com/38d80f1986.js" crossorigin="anonymous"></script>
</head>
<body>

    <!------- Texto Da Esquerda --------->
    <header>
        <div class="textoprincipal">
            <h1>Formulário de Cadastro</h1>
        </div>
        <div class="subtexto">
            <p>Se Você já tem uma conta clique
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Aqui!</a>
            </p>
        </div>
    </header>

    <!-----------  Formulario ---------->
    <main>   
        <form method="post" action="{{ route('BancoDeDadosController.Cadastroview') }}">
    @csrf
            <div id="form_title">
            <h1 id="form_title_h1">Criando uma Conta!</h1>
        </div>

            <div class="div_nome_sobrenome">

        <div class="textfield">
            <label for="nome" id="label_nome" class="form_label">Nome</label>
            <input type="text" name="nome"  id="input_nome" class="inputs_form" required>
            
        </div>

        <div class="textfield">
            <label for="sobrenome" id="label_sobrenome" class="form_label">Sobrenome</label>
            <input type="text" name="sobrenome"  id="input_sobrenome" class="inputs_form" required >
            
        </div>
    </div>

            <div class="textfield">
                <label for="email" id="label_email" class="form_label">Email</label>
                <input type="email" name="email"  id="input_Email" class="inputs_form" required>
                <i class="fas fa-envelope"></i>
            
        </div>

        <div class="textfield">
            <label for="contato" id="label_contanto" class="form_label">Contato</label>
            <input type="text" name="contato"  id="input_Contato" class="inputs_form" required>
            <i class="fa fa-phone"></i>
        </div>

            <div class="textfield">
                <label id="label_endereço" for="endereço" class="form_label">Endereço</label>
                <input type="text" name="endereço"  id="input_Endereço" class="inputs_form" required>
                <i class="fas fa-home"></i>
            </div>

   <!------------- Botão do Formulario----------------> 

            <div id="form_btn">
                <button type="submit" name="btn" value="Cadastrar" id="btn"><a href="{{ route('BancoDeDadosController.Cadastroform') }}"></a></button>
            </div>
        </form>
    </main>

</body>
</html>