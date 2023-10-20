<?php
include 'conexao.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];
  
    $sql = "INSERT INTO cadastroAluno (nome, email, telefone) VALUES ('$nome', '$email', '$telefone')";

    
    if ($conexao->query($sql) === TRUE) {
        echo "Registro inserido com sucesso!";
    } else {
        echo "Erro ao inserir registro: " . $conexao->error;
    }
}


$conexao->close();
?>
