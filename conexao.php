<?php
    $servidor = "aws.connect.psdb.cloud";
    $port = "3306";
    $usuario = "6a7qm57135iikoi47o4n";
    $password = "pscale_pw_Dt8yHwPEFsDxVy6bF5a7YOA8Vxa7Z8dqrFwzbLEYlUS";
    $dbname = "retiro2024";

    $conexao = mysqli_connect($servidor, $usuario, $password, $dbname);
mysqli_set_charset($conexao, "utf8");
     if(!$conexao){
        die("Falha na conexão:".mysqli_connect_error());
     }
     
?>
