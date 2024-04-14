<?php

    $dbHost = 'localhost';
    $dbUsername = 'postgres';
    $dbPassword = '1234';
    $dbName = 'formulario-eduardo';

    try {
        $conexao = new PDO("pgsql:host=$dbHost;dbname=$dbName", $dbUsername, $dbPassword);

        // Configurar o PDO para lançar exceções em caso de erros
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Se você deseja verificar a conexão bem-sucedida, pode usar a seguinte linha:
        // echo 'Conexão efetuada com sucesso';
    } catch (PDOException $e) {
        echo 'Erro: ' . $e->getMessage();
    }
    
?>