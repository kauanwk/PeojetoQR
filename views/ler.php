<?php
include 'conexao.php';

$sql = "SELECT id, nome, email, telefone FROM cadastroAluno";
$result = $conexao->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Nome: " . $row["nome"] . " - Email: " . $row["email"] . " - Telefone: " . $row["telefone"] . "<br>";
    }
} else {
    echo "0 resultados";
}

$conexao->close();
?>
