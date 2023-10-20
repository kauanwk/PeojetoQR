<?php
$dados = [
  $_POST['nome'],
  $_POST['idade'],
  $_POST['email'],
  $_POST['senha'],
  $_POST['telefone']
];
$banco = fopen('banco.csv', 'a');
fputcsv($banco, $dados);

header('location:cadastro.php');
