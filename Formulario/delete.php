<?php
if (!empty($_GET['id'])) {
    include_once('config.php');

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM usuarios WHERE id = :id";
    $stmtSelect = $conexao->prepare($sqlSelect);
    $stmtSelect->bindParam(':id', $id, PDO::PARAM_INT);
    $stmtSelect->execute();

    if ($stmtSelect->rowCount() > 0) {
        $sqlDelete = "DELETE FROM usuarios WHERE id = :id";
        $stmtDelete = $conexao->prepare($sqlDelete);
        $stmtDelete->bindParam(':id', $id, PDO::PARAM_INT);

        if ($stmtDelete->execute()) {
            // Registro deletado com sucesso
        } else {
            // Trate o erro conforme necessário
            echo 'Erro ao deletar o registro.';
        }
    }
}

header('Location: sistema.php');
exit(); // Certifique-se de sair após o redirecionamento
?>