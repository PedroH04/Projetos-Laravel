<?php

namespace App\resouces\views; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Noto+Sans+JP:wght@100&family=Noto+Sans+TC&family=Tiro+Devanagari+Sanskrit:ital@0;1&display=swap" rel="stylesheet">
    <title>Sign in to Page</title>
    <style type="text/css" rel="stylesheet">
        
        body{
                background-color:#F0FFF0 ;
        }
        #container{
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        h2{
            display: flex;
            justify-content: center;
            align-items: center;
            border-bottom: 2px solid black;
            padding: 5px;
            font-family: 'Noto Sans JP', sans-serif;
        }
        form div{
            display: flex;
            flex-direction: column;
        }
        form input{
            outline: unset;
            padding: 15px;
            border: 1px solid #00BFFF;
            width: 340px;
            border-radius: 20px;
        }
        form input:focus{
            background-color: #87CEEB;
        }
        #email{
            padding-bottom:25px;
        }
        #forgotpassowordtxt{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            font-size: 14px;
            flex-direction: row;
            margin-bottom: 15px;
            margin-top:2px ;
        }
        #changepassword{
            margin-left: 5px;
            text-decoration:none;
            
        }
        #button:hover{
            background-color: #00BFFF;
            text-decoration: underline;
        }
        #view{
            margin-right: 25px;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            border: 1px solid #00BFFF;
            border-radius: 20px;
            padding: 5px;
            margin-top: 20px;
        }


</style>
</head>
<body>
    <div id="container">
        <div id="col-md-12" >
            <div id="Title">
                <h2>Login Account</h2>
            </div>
                <form method="get">
                    <div id="email">
                    <label for="email" class="labels">Email Address</label>
                    <input type="email" class="input" id="inputemail" name="email">

                    </div>
                    <div id="password">
                        <label for="password" class="labels">Password</label>
                        <input type="password" class="input" id="inputpassword" name="password">

                    </div>
                        <div id="forgotpassowordtxt">
                            Forgot Password? click here
                            <a href="#" id="changepassword">change password</a>
                        </div>
                    <div class="button">
                        <input type="submit" value="Sign in" id="button">
                    </div>
                    <div id="view">
                            <div id="emailview">
                                 <p>Your Email is? {{$email}}</p>
                                 </div>
                    <div id="passwordview">             
                    <p>Your Password is?{{$password}}</p>
                    </div>
                    </div>
                </form>
        </div>
    </div>
</style>
</body>
</html>