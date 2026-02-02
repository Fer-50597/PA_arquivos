<?php
$server = "localhost";
$user = "root";
$password = "root";
$database = "cadastro";
$port = "3307";

$conn = new mysqli($server, $user, $password, $database, $port);

if($conn->connect_error){
    echo "ERRO";
}
else{
    echo "CONECTADO COM SUCESSO!!";
}

?>