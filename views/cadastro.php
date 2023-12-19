<?php
session_start();
if (isset($_SESSION['success_message'])) {
  echo '<p class="success">' . $_SESSION['success_message'] . '</p>';
  unset($_SESSION['success_message']);
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/cadastro.css">
  <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
  <title>Cadastro</title>
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
      <form action="adicionar.php" method="POST">
        <div>
          <h1>Cadastro</h1>
        </div>
        <div class="container-form">
          <label for="nome">Nome:</label>
          <input name="nome" type="text" id="nome" placeholder="Escreva seu nome completo...">
        </div>
        <div class="container-form">
          <label for="idade">Idade:</label>
          <input name="idade" id="idade" placeholder="Coloque sua idade...">
        </div>
        <div class="container-form">
          <label for="email">E-mail:</label>
          <input name="email" id="email" placeholder="Digite seu e-mail...">
        </div>
        <div class="container-form">
          <label for="telefone">Telefone:</label>
          <input name="telefone" id="telefone" type="text" placeholder="Digite seu telefone...">
        </div>
        <div class="container-form">
          <label for="senha">Senha:</label>
          <input name="senha" id="senha" type="password" placeholder="Digite sua senha...">
        </div>
        <div class="container-form">
          <label for="confirma_senha">Confirme a Senha:</label>
          <input name="confirma_senha" id="confirma_senha" type="password" placeholder="Confirme sua senha...">
        </div>
        <div class="button">
          <button>Adicionar</button>
        </div>
      </form>
    </div>
    <div class="div21">
      <img class="img1" src="../images/cadastro.png" alt="">
    </div>
  </div>
</body>

</html>