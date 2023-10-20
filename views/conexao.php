<?php
$servername = "localhost";
$username = "root";
$password = "35432324";
$database = "projetoqr";

$conexao = new mysqli($servername, $username, $password, $database);

if ($conexao->connect_error) {
    die("Conexão falhou: " . $conexao->connect_error);
} 
return $conexao;
?>
