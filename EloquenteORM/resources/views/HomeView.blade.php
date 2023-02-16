<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procure um Nome!</title>
</head>
<body>
    <div id="container">
    <div id="box-search">
        <div id="form-div">
            <form action="" method="get">
                @csrf
                <div class="textfield">
                    <input type="search" name="search" id="search-input" placeholder="Digite o Nome!">
                </div>
            </form>
        </div>
    </div>
    <div id="campos-dos-nomes">
    <div id="nomes">
        @foreach($datas as $data)
        {{ $data-> Nome}}
    @endforeach
    </div>
</div>
</body>
</div>

<style>
    @import url('https://fonts.googleapis.com/css2?family= Poppins :ital,wght@0,400;1,500 & display=swap');
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    body{
        width: 100%;
        height: 100vh;

        display: flex;
        justify-content: center;
        align-items: center;


        background: rgb(2,0,36);
        background: linear-gradient(152deg, rgba(2,0,36,1) 0%, rgba(60,10,96,1) 38%, rgba(244,0,255,1) 100%);
    }

    #box-search #form-div input{
        padding: 10px;
        width: 90vh;
        border-radius: 5px;
        outline: none;       
    }

    #container #campos-dos-nomes{
        width: 100%;
        height: 10vh;
        margin-top: 20px;

        display: flex;
        justify-content: center;
        align-items: center;
    }

    #container #campos-dos-nomes #nomes{
        background-color: white;
        width: 50%;
        height: 100%;

        display: flex;
        justify-content: center;
        align-items: center;

        font-weight: bold;
    }
</style>
</html>