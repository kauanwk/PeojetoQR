<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gerador de QR Code</title>
  <link rel="stylesheet" href="qrCode.css">
</head>

<body>

  <form>
    <label for="nome">Nome:</label>
    <input type="text" id="nome" placeholder="Digite seu nome" required>

    <label for="idade">Idade:</label>
    <input type="number" id="idade" placeholder="Digite sua idade" required>

    <label for="email">E-mail:</label>
    <input type="email" id="email" placeholder="Digite seu e-mail" required>

    <button type="button" onclick="gerarqr()">Gerar QR Code</button>
    <a id="downloadLink" download="qrcode.png"><button id="downloadButton" style="display:none">Baixar QR Code</button></a>
  </form>

  <img id="QRcodeimag" alt="QR Code" />

  <script src="script.js"></script>
</body>

</html>