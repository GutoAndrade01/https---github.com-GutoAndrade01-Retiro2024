<?php
    $servidor = "aws.connect.psdb.cloud";
    $port = "3306";
    $usuario = "6m991bmfifwuaptqj7mu";
    $password = "pscale_pw_LCi6u4vYe1enmkikQj3dVqNTJRfKbq6nNmGP50A25kf";
    $dbname = "retiro2024";

    $conexao = mysqli_connect($servidor, $usuario, $password, $dbname);
mysqli_set_charset($conexao, "utf8");
     if(!$conexao){
        die("Falha na conexão:".mysqli_connect_error());
     }
     
?>