<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/welcome_page.css">
  <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">

  <title>QR Presença</title>
</head>

<body>
  <div class="head">
    <div class="head-img"> <img src="../images/logo.png" alt=""> </div>

    <div class="head-link">
      <h2 onclick="window.location='/ProjetoQR/views/sobre.php'">
        <a href="/ProjetoQR/views/sobre.php"></a> Sobre
      </h2>
      <h2 onclick="window.location='/ProjetoQR/views/cadastro.php'">
        <a href="/ProjetoQR/views/cadastro.php"></a>Cadastro
      </h2>

      <h2 onclick="window.location='login.php'"> Login </h2>
    </div>
  </div>

  <div class="main">
    <div class=main-text>
      <h1 class="simplifique"> Simplifique </h1>
      <h1 class="presença"> Sua presença </h1>
      <p> Olá estudantes, facilitem o acesso aos <br>
        registros de presenças com apenas um <br>
        simples gesto: apontar e registrar </p>

      <div class="botao">
        <button onclick="window.location=''"> Entrar </button>
      </div>
    </div>

    <div class=main-img>
      <img class="branco" src="../images/zip.png" alt="">
      <img class="person" src="../images/bonecos.png" alt="">
      <!-- <img class="person2" src="../images/boneco1.png" alt="">-->
    </div>
  </div>

  <?php
  
  ?>
</body>

</html>