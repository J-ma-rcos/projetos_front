<?php

    if(isset($_POST['submit'])){
    include_once('config.php');

    $email = $_POST['user'];
    $senha = $_POST['senha'];
    
    $result = mysqli_query($conexao, "INSERT INTO usuarios(email, senha) VALUES('$email', '$senha')");
    
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>login</title>
        <meta name="viewport" content="width=device-width , initial-scale=1.0">
        <link rel="stylesheet" href="login.css">
        <meta name="theme-color" content="#725A7A">
    </head>
    <body>
        <div class="container">
            <h3>login</h3>
            <form action="login.php" method="post" >
                
                <div class="user">
                    <input type="email" id="user" name="user" required="">
                    <label>username or email</label>
                </div>

                <div class="user">
                    <input type="password" id="senha" name="senha" required="">
                    <label>password</label>
                    <button class="buttonA" type="submit" name="submit">SUBMIT</button>
                    <button class="buttonB" type="reset">CLEAN</button>
                    <p class="text"> Don't have a account?<a href="#">creat account</a></p>
                </div>
                
            </form>
        </div>
    </body>
</html>