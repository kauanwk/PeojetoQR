<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gerador de QR Code</title>
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
  </form>

  <img id="QRcodeimag" alt="QR Code" />

  <script>
  function gerarqr() {
    var nome = document.getElementById("nome").value;
    var idade = document.getElementById("idade").value;
    var email = document.getElementById("email").value;
    var inputData = "Nome: " + nome + ", Idade: " + idade + ", E-mail: " + email;
    var GoogleChartAPI =
      "https://chart.googleapis.com/chart?cht=qr&chs=500x500&chl=";
    var GoogleChartAPI = GoogleChartAPI + encodeURI(inputData);
    document.querySelector("#QRcodeimag").src = GoogleChartAPI;

    console.log(GoogleChartAPI);
  }
  </script>

</body>

</html>