<?php
include "conexao.php";
include "inscrever.html";

$nome = $_POST['NomeCompleto'];
$dataNasc = $_POST['DataNascimento'];
$cpf = $_POST['cpf'];
$sexo = $_POST['sexo'];
$estCivil = $_POST['eCivil'];
$fone = $_POST['fone'];
$email = $_POST['email'];
$endereco = $_POST['Endereço'];
$bairro = $_POST['Bairro'];
$cidade = $_POST['Cidade'];
$cep = $_POST['cep'];
$estado = $_POST['Estado'];
$iasd = $_POST['Iasd'];



$sql= "INSERT INTO cadastro (nome, dataNasc, cpf, sexo, estCivil, fone, email, endereco, bairro, cidade, cep, estado, iasd) 
        VALUES ('$nome', '$dataNasc', '$cpf', '$sexo', '$estCivil', '$fone', '$email', '$endereco', '$bairro', '$cidade', '$cep', '$estado', '$iasd')";
       if (mysqli_query($conexao, $sql)){
            echo "<script>alert('Cadastro concluido com sucesso!!')</script>";
            (header('location:index.html'));
       }
    
         else{
             echo  "<script>alert('CPF ja cadastrado!')</script>";
             (header('Location:Retiro2023.index,html '.$_SERVER['REQUEST_URI']));
             
         }
         
         mysqli_close($conexao);
         

      
 