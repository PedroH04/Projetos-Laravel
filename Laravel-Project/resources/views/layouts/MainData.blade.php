<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/style.css">
  <title>@yield('title')</title>
</head>
<body> @yield('conteudo') 
  <style>
    /**
     * Background animado(https://animatedbackgrounds.me/)
     */

    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800,900&display=swap');

  * {
    margin: 0;
    padding: 0;
    outline: 0;
  }

  body {
    font-family: 'Poppins', sans-serif;
  }

  section{
    width: 100%;
    height: 100vh;
    background: linear-gradient(-45deg, #3f51b1 0%, #5a55ae 13%, #7b5fac 25%, #8f6aae 38%, #a86aa4 50%, #cc6b8e 62%, #f18271 75%, #f3a469 87%, #f7c978 100%);;
    background-size: 400% 400%;
    position: relative;
    animation: animate 7.5s ease-in-out infinite;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  h1{
    color: #fff;
    background: rgba(255,255,255,.2);
    padding: 20px;
    font-size: 50px;
    border-radius: 10px;
  }

  @keyframes animate{
    0%{
      background-position: 0 50%;
    }
    50%{
      background-position: 100% 50%;
    }
    100%{
      background-position: 0 50%;
    }
  }
  </style>
  </body>
  </html>