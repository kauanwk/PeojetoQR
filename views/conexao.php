<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database = "projetoQR";

$conexao = new mysqli($servername, $username, $password, $database);

if ($conexao->connect_error) {
    die("Conexão falhou: " . $conexao->connect_error);
} 
return $conexao;
?>
