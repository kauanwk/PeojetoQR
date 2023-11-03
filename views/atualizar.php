<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $novoNome = $_POST['novo_nome'];

    $sql = "UPDATE cadastroAluno SET nome='$novoNome' WHERE id=$id";

    if ($conexao->query($sql) === TRUE) {
        echo "Registro atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar registro: " .implode(", ", $conexao->errorInfo());
    }
}