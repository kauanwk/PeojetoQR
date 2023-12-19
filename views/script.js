function gerarqr() {
  var nome = document.getElementById("nome").value;
  var idade = document.getElementById("idade").value;
  var email = document.getElementById("email").value;
  var inputData = "Nome: " + nome + ", Idade: " + idade + ", E-mail: " + email;
  var GoogleChartAPI =
    "https://chart.googleapis.com/chart?cht=qr&chs=500x500&chl=";
  GoogleChartAPI = GoogleChartAPI + encodeURI(inputData);
  document.querySelector("#QRcodeimag").src = GoogleChartAPI;
  document.getElementById("downloadLink").href = GoogleChartAPI;
  document.getElementById("downloadButton").style.display = "block";

  // Salvar dados no banco de dados
  saveInBD(inputData);
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
