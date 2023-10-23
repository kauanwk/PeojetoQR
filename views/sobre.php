<!DOCTYPE html>
<html>

<head>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/welcome_page.css">
  <title><?php echo $pageTitle; ?></title>
</head>

<body>
  <?php
$pageTitle = "Sobre nós";

if (isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER'])) {
  $previousPage = $_SERVER['HTTP_REFERER'];
} else {
  $previousPage = '/ProjetoQR/views/default.php';
}

?>

  <div class="container">
    <div class="butao">
      <a href="<?php echo $previousPage; ?>">Voltar</a>
    </div>

    <div class="tela">
      <h1>Sobre o ProjetoQR</h1>
    </div>

    <div class="sobre">
      <p class="p-sobre">
        Projetado foi feito pelos alunos do Instituto Federal de Educação, Ciência e Tecnologia de Pernambuco IFPE do campus Igarassu.
        Do curso técnico de IPI 2º período, na disciplina de projeto e prática do professor Alexadre, criado na data 01/09/2023.
        O foco do projeto é facilitar a vida dos outros kkk.
        Alunos desenvolvedores do nosso projeto: Emanuel, Kauã Felix, André, José Lucas, Vinicius, Guilherme, Galego.
      </p>
    </div>

    <img class="tamanhoimg" src="../images/winners.gif" alt="">
  </div>

</body>

</html>