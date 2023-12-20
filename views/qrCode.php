<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/qrCode.css">
  <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
  <title>QR Presença</title>
</head>

<body>
  <div class="head">
    <div class="head-img">
      <img src="../images/logo.png" alt="">
    </div>
  </div>
  <div class="head-lin">
    <h2 onclick="window.location='index.php'">Sair</h2>
  </div>
  <div class="main">
    <div class="div1">
      <form action="processa_qrCode.php" method="POST">
        <div>
          <h1>Questionário de Presença</h1>
        </div>
        <div class="container-form">
          <label for="nome">Nome:</label>
          <input name="nome" type="text" id="nome" placeholder="Digite seu nome completo..." required>
        </div>
        <div class="container-form">
          <label for="idade">Idade:</label>
          <input name="idade" type="number" id="idade" placeholder="Coloque sua idade..." required>
        </div>
        <div class="container-form">
          <label for="turma">Turma:</label>
          <input name="turma" type="text" id="turma" placeholder="Digite sua turma..." required>
        </div>
        <div class="container-form">
          <label for="turno">Turno:</label>
          <input name="turno" type="text" id="turno" placeholder="Digite seu turno..." required>
        </div>
        <div class="button">
          <button type="button" onclick="gerarqr()">Gerar QR Code</button>
          <button id="downloadButton" style="display:none" onclick="baixarQR()">Baixar QR Code</button>
        </div>
      </form>
    </div>
  </div>
  <img id="QRcodeimag" alt="QR Code" />
  <script src="script.js"></script>
</body>

</html>