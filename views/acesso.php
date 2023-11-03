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
  <?php
  include 'conexao.php';

  // Consulta SQL para obter os dados dos alunos na tabela 'user'
  $sql = "SELECT nome, email, idade FROM user";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
          $nome = $row["nome"];
          $email = $row["email"];
          $idade = $row["idade"];

          // Crie uma instância do gerador de QR code para cada aluno
          echo "<div class='container1'>";
          echo "<div class='imagem'>";
          echo "<img src='' alt=''>";
          echo "</div>";
          echo "<div>";
          echo "<h3>$nome</h3>";
          echo "</div>";
          echo "<div>";
          echo "<h3>$email</h3>";
          echo "</div>";
          echo "</div>";

          echo "<div class='container2'>";
          echo "<div id='qrcode-$nome'></div>";
          echo "</div>";

          echo "<script>";
          echo "var qrcodeContainer$nome = document.getElementById('qrcode-$nome');";
          echo "var qrcode$nome = new QRCode(qrcodeContainer$nome, {";
          echo "text: 'Nome: $nome\\nEmail: $email\\nIdade: $idade',";
          echo "width: 128,";
          echo "height: 128";
          echo "});";
          echo "</script>";
      }
  } else {
      echo "Nenhum aluno encontrado no banco de dados.";
  }

  $conn->close();
  ?>
</body>

</html>