<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Account Page!</title>
    <link rel="stylesheet" href="app.css">
    <style>
    /**STYLE BOX=> */
        #MAINBOXVIEW{
            
            width: 50vh; 
            height: 60vh; 
            border: 2px solid Black; 
            border-radius:5px;}
    /**STYLE ALL PAGE=>*/
          *{padding: 0; 
            margin: 0;}
    /**STYLE User Login=>*/
    /**STYLE Titlle=>*/
    .UserTittle{
            border-bottom: 2px solid black;
            font-family: Arial, Helvetica, sans-serif;
            padding: 15px;
            height: 10vh;}
            
    /**STYLE Titlle LOW Title=>*/
        #LowUserTitle{
            border-top: 2px solid black;}
                
    /**ALIGNMENT BOX Section=>*/ 
    section{
            display: flex; 
            justify-content: center;
            align-items: center;
            height: 80vh;}
    /**ALIGNMENT Login=>*/ 
    .UserLogin{
           display: flex;
           justify-content: center;
           align-items: center;
           padding: 15px;
           font-size: 5vh;
           margin: 15px;}
    /**ALIGNMENT TiTlle=>*/
    .UserTittle{
           display: flex;
           justify-content: center;
           align-items: center;
        }
    </style>
</head>
    <body>
        <section>
        <div id="MAINBOXVIEW">
            <p>
    <h2 class="UserTittle" id="UserTitleUp">
            UserNames:</h2></p>

    <p class="UserLogin">
        {{$ACC['Name'][0]}}</p>


    <p><h2 class="UserTittle" id="LowUserTitle">
            PassWords:</h2></p>

    <p class="UserLogin">
        {{$ACC['PassWords'][0]}}</p>
    </section>

</div>
</body>
</html>