<?php
// Conecte-se ao banco de dados (substitua as informações do banco de dados conforme necessário)
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "projetoqr";

//caso não funcione use o workbench

try {
    // Crie a conexão PDO
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $senha);
    
    // Defina o modo de erro do PDO como exceção
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Recupere os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $idade = $_POST['idade']; 
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); // Use password_hash() para criptografar a senha
    
    // Prepare a consulta SQL com valores de espaço reservado
    $sql = "INSERT INTO cadastro (nome, email, idade, senha) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    
    // Vincule os valores dos parâmetros
    $stmt->bindParam(1, $nome);
    $stmt->bindParam(2, $email);
    $stmt->bindParam(3, $idade);
    $stmt->bindParam(4, $senha);
    
    // Execute a consulta
    $stmt->execute();
    
    // Armazene a mensagem de sucesso em uma sessão
    session_start();
    $_SESSION['success_message'] = "Registro inserido com sucesso!";
    
    // Redirecione para /ProjetoQR/views/index.php
    header("Location: /ProjetoQR/views/index.php");
    exit(); // Certifique-se de sair após o redirecionamento para evitar execução adicional do código
} catch (PDOException $e) {
    echo "Erro ao inserir registro: " . $e->getMessage();
}


?>