function gerarqr() {
  var nome = document.getElementById("nome").value;
  var idade = document.getElementById("idade").value;
  var turma = document.getElementById("turma").value;
  var turno = document.getElementById("turno").value;

  var inputData =
    "Nome: " +
    nome +
    ", Idade: " +
    idade +
    ", Turma: " +
    turma +
    ", Turno: " +
    turno;

  var GoogleChartAPI =
    "https://chart.googleapis.com/chart?cht=qr&chs=500x500&chl=";
  GoogleChartAPI = GoogleChartAPI + encodeURI(inputData);

  document.querySelector("#QRcodeimag").src = GoogleChartAPI;
  document.getElementById("downloadButton").style.display = "block";

  // Salvar dados no banco de dados
  saveInBD(inputData);
}

function baixarQR() {
  var imagemQR = document.getElementById("QRcodeimag").src;
  var linkDownload = document.createElement("a");
  linkDownload.href = imagemQR;
  linkDownload.download = "QRCode.png"; // Nome do arquivo a ser baixado
  linkDownload.click();
}

function saveInBD(data) {
  fetch("https://seuservidor.com/api/salvar-dados", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify({ data: data }),
  })
    .then((response) => response.json())
    .then((result) => {
      console.log("Dados salvos no banco de dados:", result);
    })
    .catch((error) => {
      console.error("Erro ao salvar dados no banco de dados:", error);
    });
}
