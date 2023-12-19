function gerarqr() {
  var nome = document.getElementById("nome").value;
  var idade = document.getElementById("idade").value;
  var email = document.getElementById("email").value;
  var inputData = "Nome: " + nome + ", Idade: " + idade + ", E-mail: " + email;
  var GoogleChartAPI =
    "https://chart.googleapis.com/chart?cht=qr&chs=500x500&chl=";
  var GoogleChartAPI = GoogleChartAPI + encodeURI(inputData);
  document.querySelector("#QRcodeimag").src = GoogleChartAPI;

  document.getElementById("downloadLink").href = GoogleChartAPI;
  document.getElementById("downloadButton").style.display = "block";
}
