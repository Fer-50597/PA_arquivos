<?php

include("connection.php");

$nome  = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$data_nasc = $_POST['data_nasc'];
$senha = $_POST['senha'];

$senha_criptografada = md5("senha");

$sql = "INSERT INTO usuario(nome, cpf, email, data_nasc, senha) VALUES ('$nome, '$cpf', '$data_nasc', '$email', '$senha_criptografada')";

if(mysqli_query($conn, $sql)){
    return true;
}
else{
    return false;
}

?>