<?php
// Conecte-se ao banco de dados (substitua as informações do banco de dados conforme necessário)
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "projetoqr";

// Crie a conexão MySQLi
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifique a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Recupere os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$idade = $_POST['idade']; 
$senha = $_POST['senha'];


// Prepare a consulta SQL com valores de espaço reservado
$sql = "INSERT INTO cadastro (nome, email, idade, senha) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

// Vincule os valores dos parâmetros
$stmt->bind_param("ssis", $nome, $email, $idade, $senha);

// Execute a consulta
if ($stmt->execute()) {
    echo "Registro inserido com sucesso!";
} else {
    echo "Erro ao inserir registro: " . $stmt->error;
}

// Feche a declaração e a conexão
$stmt->close();
$conn->close();
?>