<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOSTRAP LINK-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- GOOGLE FONTES( ROBOTO )-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,700;1,500&display=swap" rel="stylesheet">
    <title>Sistema de ajuste de produtos!</title>
</head>
<body>
    <div id="container-navbar">
        <div id="navbar">
            <nav>
                <p>SISTEMA DE AJUSTE PREÇO PRODUTO</p>
                <div id="navbar-button">
                    <button type="button" id ="danger-button" class="btn btn-danger">Apagar</button>
                    <button type="button" id="success-button" class="btn btn-success">Salvar</button>
                </div>
            </nav>
        </div>
    </div>
                
    <div id="container-cards-section">
        <section>
            <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                <div class="card-header">Header</div>
                <div class="card-body">
                  <h5 class="card-title">Primary card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
              <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                <div class="card-header">Header</div>
                <div class="card-body">
                  <h5 class="card-title">Secondary card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
              <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                <div class="card-header">Header</div>
                <div class="card-body">
                  <h5 class="card-title">Success card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
              <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                <div class="card-header">Header</div>
                <div class="card-body">
                  <h5 class="card-title">Danger card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
              </div>
        </section>
    </div>
    <id id="container-produtos-config-section">
        <section>
            <div class="campos-produtos">
                <div id="limitador-produtos">
                    <p>LIMITADOR QTDE PRODUTOS</p>
                    <div class="button-inputs">
                        <div class="inicio-button">
                        <button type="button" id ="danger-button" class="btn btn-danger">ínicio</button>
                        <input type="text">
                    </div>
                </div>
                <div id="faixa-produtos">
                    <p>FAIXA DE VALOR Á ALTERAR</p>
                    <div class="button-inputs">
                        <button type="button" id ="danger-button" class="btn btn-danger">ínicio</button>
                        <button type="button" id="success-button" class="btn btn-success">final</button>
                    </div>
                </div>
            </div>
        </section>
    </id>
</body>
    <Style>
        body{

            font-family: 'Roboto', sans-serif;
        }

        /* BARRA DE NAVEGAÇÃO*/
        
        #container-navbar{
            width: 100%;
            background: white;
            height: 10vh;
            box-shadow: 0px 0px 9px 4px rgba(0, 0, 0, 0.1);
        }

        #navbar nav{
            height: 100%;

            display: flex;
            justify-content: space-between;
            align-items: center;

            color: #6d6966;
            font-weight: bold;
            font-size: 1.30rem;
        }

        #container-navbar #navbar nav p{
            margin: 20px 0px 0px 20px;
        }
        
        #container-navbar #navbar nav #navbar-button button{
            margin-top: 10px;
            margin-right: 15px;
            border-radius: 1px;
            box-shadow: 0px 5px 11px 0px rgba(0,0,0,0.1);
        }

        /* SECTION DOSCARDS */
        #container-cards-section section{
            display: flex;
            background: #e2e8f4;
            height: 45vh;
            justify-content: space-around;
            align-items: center;
            color: red;
        }
        
        

    </Style>
</html>