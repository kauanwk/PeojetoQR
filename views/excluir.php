<?php
include 'conexao.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idParaExcluir = $_POST['id_para_excluir'];

    $sql = "DELETE FROM cadastroAluno WHERE id=$idParaExcluir";

    if ($conexao->query($sql) === TRUE) {
        echo "Registro excluído com sucesso!";
    } else {
        echo "Erro ao excluir registro: " . $conexao->error;
    }
}

$conexao->close();
?>
