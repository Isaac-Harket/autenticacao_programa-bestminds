<?php
    //Inicia a sessão do PHP
    require_once __DIR__.'../../config.php';
    
    //Cria as variaveis que vão receber as informações do formulário
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];

    //Cria a variavel de consulta, que salva as informações do usuario no banco
    $sql = "INSERT INTO users (username, password, email, cpf) VALUES (?, ?, ?, ?)";
    //Prepara a consulta
    $query = $pdo->prepare($sql);

    //pega os parametros da consulta
    $query->bindValue(1, $username);
    $query->bindValue(2, $password);
    $query->bindValue(3, $email);
    $query->bindValue(4, $cpf);

    //Executa a inserção
    $query->execute();

    //Verifica se a query foi executada com sucesso
    if($query) {

        //Redireciona para a pagina de login com uma mensagem de sucesso
        echo "
            <script>
                alert('Usuário cadastrado com sucesso!');
                window.location.href = '../index.php';
            </script>
        ";
    } else {

        //Redireciona para a pagina de login com uma mensagem de erro
        echo "
            <script>
                alert('Erro ao cadastrar o usuário!');
                window.location.href = '../index.php';
            </script>
        ";
    }
?>