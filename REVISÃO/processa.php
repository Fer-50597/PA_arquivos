<?php

include("connection.php");

$nome  = $_POST['nome'];
$cpf = $_POST['cpf'];
$data_nasc = $_POST['data_nasc'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$senha_criptografada = md5("senha");

$sql = "INSERT INTO usuario(nome, cpf, data_nasc, email, senha) VALUES ('$nome, '$cpf', '$email', '$data_nasc', '$senha_criptografada')";

if(mysqli_query($conn, $sql)){
    return true;
}
else{
    return false;
}

?>