<?php
$banco = fopen("banco.csv", "r");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php while (($linha = fgetcsv($banco)) !== false) : ?>

  <?php endwhile ?>

  <h2>Adicionar</h2>
  <form class="formes" action="adicionar.php" method="POST">
    <div>
      <label>Nome:</label>
      <input name="nome" type="text" placeholder="Escreva seu nome...">
    </div>
    <div>
      <label>idade:</label>
      <input name="idade" type="number" placeholder="Coloque sua idade...">
    </div>
    <button>Adicionar</button>
  </form>
</body>

</html>