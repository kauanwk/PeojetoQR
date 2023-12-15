<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        // Recupere os dados do formulário
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $idade = $_POST['idade'];
        $senha = $_POST['senha'];
        $confirma_senha = $_POST['confirma_senha'];

        // Verifique se as senhas coincidem
        if ($senha != $confirma_senha) {
            throw new Exception("As senhas não coincidem. Por favor, tente novamente.");
        }
        

        // Prepare a consulta SQL com valores de espaço reservado
        $sql = "INSERT INTO cadastro (nome, email, idade, senha) VALUES (?, ?, ?, ?)";
        $stmt = $conexao->prepare($sql);

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
        header("Location: /ProjetoQR/views/login.php");
        exit(); // Certifique-se de sair após o redirecionamento para evitar execução adicional do código
    } catch (Exception $e) {
        // Em caso de erro, redirecione de volta para a página de cadastro com uma mensagem de erro
        session_start();
        $_SESSION['error_message'] = $e->getMessage();
        header("Location: /ProjetoQR/views/cadastro.php");
        exit();
    }
}
?>
