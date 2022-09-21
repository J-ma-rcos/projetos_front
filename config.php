<?php
    $db_Host = 'Localhost';
    $db_username = 'root';
    $db_password = '';
    $dbName = 'formulario';

    $conexao = new mysqli($db_Host,$db_username,$db_password,$dbName);

    /*if($conexao->connect_errno){
        echo("erro");
    }else{
        echo("tudo certo");
    }*/

    

?>