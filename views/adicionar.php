<?php
require_once("./conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$idade = $_POST['idade'];
$senha = $_POST['senha'];


// Use uma declaração preparada para inserir os dados de forma segura
$sql = "INSERT INTO cadastro (nome, email, idade, senha) VALUES (:nome, :email, :idade, :senha)";
$stmt = $conexao->prepare($sql);

// Vincule os valores dos parâmetros com bindValue
$stmt->bindValue(':nome', $nome, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':idade', $idade, PDO::PARAM_INT);
$stmt->bindValue(':senha', $senha, PDO::PARAM_STR);

// Execute a declaração preparada
if ($stmt->execute()) {
  echo "Registro inserido com sucesso!";
} else {
  echo "Erro ao inserir registro: " . $stmt->errorInfo();
}
