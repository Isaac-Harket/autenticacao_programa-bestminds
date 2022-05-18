<?php
    // Inicia a sessão do PHP
    session_start();

    // Incluindo as configurações de conexão do banco
    require_once __DIR__.'../../config.php';

    //Cria as variaveis que vão receber as informações do formulário
    $email = $_POST['email'];
    $password = $_POST['password'];

    //Cria a variavel de consulta, que busca as informações do usuario no banco
    $sql = "SELECT * FROM users WHERE email = ? AND password = ?";

    //Prepara a consulta
    $query = $pdo->prepare($sql);

    //pega os parametros da consulta
    $query->bindValue(1, $email);
    $query->bindValue(2, $password);

    //Executa a consulta
    $query->execute();

    //Pega os dados/resultado da consulta
    $data = $query->fetch(PDO::FETCH_ASSOC);

    //Verifica se a consulta retornou algum resultado
    if($data) {
        //Cria a sessão de usuario, que vai ser usada para verificar se o usuario está logado
        $_SESSION['user'] = $data;

        //Redireciona para a pagina dashboard
        header('Location: ../dashboard.php');
    } else {

        //Redireciona para a pagina de login
        echo "
            <script>
                alert('Usuário não encontrado');
                window.location.href = '../index.php';
            </script>
        ";
    }

?>