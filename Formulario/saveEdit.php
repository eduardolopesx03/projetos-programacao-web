<?php
include_once('config.php');

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['genero']; // Considerando que 'sexo' seja um campo ENUM ou VARCHAR
    $data_nascimento = $_POST['data_nascimento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];

    $sqlUpdate = "UPDATE usuarios SET nome=?, senha=?, email=?, telefone=?, sexo=?, data_nasc=?, cidade=?, estado=?, endereco=? WHERE id=?";
    
    $stmt = $conexao->prepare($sqlUpdate);
    $stmt->bindParam(1, $nome);
    $stmt->bindParam(2, $senha);
    $stmt->bindParam(3, $email);
    $stmt->bindParam(4, $telefone);
    $stmt->bindParam(5, $sexo);
    $stmt->bindParam(6, $data_nascimento);
    $stmt->bindParam(7, $cidade);
    $stmt->bindParam(8, $estado);
    $stmt->bindParam(9, $endereco);
    $stmt->bindParam(10, $id);

    $stmt->execute();
}

header('Location: sistema.php');
?>