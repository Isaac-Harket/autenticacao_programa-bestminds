<?php
    //Pega a as informações da vendor
    require_once __DIR__.'/vendor/autoload.php';

    //Pega o caminho do banco de dados
    $PATH = __DIR__.'/database/db.sqlite';

    //Cria a conexão com o banco de dados
    $pdo = new PDO('sqlite:'.$PATH);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Verifica se a conexão foi feita com sucesso
    if(!$pdo) {
        echo 'Oops, erro ao conectar ao banco de dados!';
        die();
    }

    // $query = "CREATE TABLE IF NOT EXISTS 'users' (
    //             'id' INTEGER PRIMARY KEY,
    //             'username' VARCHAR(255),
    //             'password' VARCHAR(255),
    //             'email' VARCHAR(255),
    //             'cpf' VARCHAR(255)
    //         )";

    // $criar_tabela = $pdo->prepare($query);
    // $criar_tabela->execute();
?>