<?php
    $servidor = "aws.connect.psdb.cloud";
    $port = "3306";
    $usuario = "er76stjpgs42sg3pgc0l";
    $password = "pscale_pw_DpLeXOpSXc7kupfNQ6AaC8N9cFJZuK728FgSlNQxA8T";
    $dbname = "retiro2024";

    $conexao = mysqli_connect($servidor, $usuario, $password, $dbname);
mysqli_set_charset($conexao, "utf8");
     if(!$conexao){
        die("Falha na conexão:".mysqli_connect_error());
     }
     
?>
