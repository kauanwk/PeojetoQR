<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar os dados do formulário
    $email = $_POST['email'];
    $senha_digitada = $_POST['password'];

    try {
        // Consulta para verificar as credenciais
        $query = "SELECT * FROM cadastro WHERE email = :email AND senha = :senha";
        $stmt = $conexao->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha_digitada);
        $stmt->execute();

        // Verifica se as credenciais são válidas
        if ($stmt->rowCount() > 0) {
            // Recupere os dados do usuário para gerar o QR Code
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
            $nome = $usuario['nome'];
            $idade = $usuario['idade'];
            $email = $usuario['email'];

            // Redirecionamento para qrCode.php passando os dados necessários via URL
            header("Location: /ProjetoQR/views/qrCode.php?nome=$nome&idade=$idade&email=$email");
            exit();
        } else {
            // Credenciais inválidas
            echo "Email ou Senha inválidos. Tente novamente.";
        }
    } catch (PDOException $e) {
        echo "Erro de conexão: " . $e->getMessage();
    } finally {
        // Não é necessário fechar a conexão explicitamente, pois o PHP o fará automaticamente no final do script.
        // $conexao = null;
    }
}
?>

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/login.css">
  <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
  <title>QR Presença</title>
</head>

<body>
  <div class="head">
    <div class="head-img"> <img src="../images/logo.png" alt=""> </div>

    <div class="head-link">
      <h2 onclick="window.location='sobre.php'">Sobre</h2>
      <h2 onclick="window.location='cadastro.php'">Cadastro</h2>
      <h2 onclick="window.location='login.php'">Login</h2>
    </div>

  </div>
  <div class="main">
    <div class="div1">
      <form action="" method="POST">
        <div>
          <H1> Faça seu login </H1>
        </div>
        <div class="container-form">
          <label for="email"> E-mail <svg class="svg-cart" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#e6e6e6">
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
              <g id="SVGRepo_iconCarrier">
                <path d="M2 12C2 8.22876 2 6.34315 3.17157 5.17157C4.34315 4 6.22876 4 10 4H14C17.7712 4 19.6569 4 20.8284 5.17157C22 6.34315 22 8.22876 22 12C22 15.7712 22 17.6569 20.8284 18.8284C19.6569 20 17.7712 20 14 20H10C6.22876 20 4.34315 20 3.17157 18.8284C2 17.6569 2 15.7712 2 12Z" stroke="#dfe0e1" stroke-width="1.5"></path>
                <path d="M6 8L8.1589 9.79908C9.99553 11.3296 10.9139 12.0949 12 12.0949C13.0861 12.0949 14.0045 11.3296 15.8411 9.79908L18 8" stroke="#dfe0e1" stroke-width="1.5" stroke-linecap="round"></path>
              </g>
            </svg></label>
          <input type="email" name="email" id="email" required>
        </div>
        <div class="container-form">
          <label for="password"> Senha <svg class="svg-key" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
              <path d="M0 0h48v48H0z" fill="none"></path>
              <path d="M25.3 20c-1.65-4.66-6.08-8-11.3-8-6.63 0-12 5.37-12 12s5.37 12 12 12c5.22 0 9.65-3.34 11.3-8H34v8h8v-8h4v-8H25.3zM14 28c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4z" fill="#dfe0e1" class="fill-000000"></path>
            </svg> </label>
          <input type="password" name="password" id="password" required>
        </div>
        <div class="button">
          <button>
            Entrar
          </button>
        </div>
      </form>
    </div>

    <div class="div21">
      <img class="img1" src="../images/Enter.png" alt="">
    </div>
  </div>