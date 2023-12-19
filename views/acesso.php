<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/acesso.css">
  <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">
  <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
  <title>QR Presença</title>
</head>


<body>

  <form>
    <label for="nome">Nome:</label>
    <input type="text" id="nome" placeholder="Digite seu nome" required>

    <label for="idade">Idade:</label>
    <input type="number" id="idade" placeholder="Digite sua idade" required>

    <label for="turma/turno">Turma:</label>
    <input type="turma" id="turma" placeholder="Digite sua turma/turno" required>

    <button type="button" onclick="gerarqr()">Gerar QR Code</button>
    <a id="downloadLink" download="qrcode.png"><button id="downloadButton" style="display:none">Baixar QR Code</button></a>
  </form>

  <img id="QRcodeimag" alt="QR Code" />

  <script src="script.js"></script>
</body>



</html>