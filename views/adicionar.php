<?php
$dados = [
  $_POST['nome'],
  $_POST['idade'],
];
$banco = fopen('banco.csv', 'a');
fputcsv($banco, $dados);

header('location:cadastro.php');
