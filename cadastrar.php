<?php
    //Inicia a sessão do PHP
    session_start();

    //Incluindo as configurações de conexão do banco
    require_once 'config.php';

    //Verifico se existe uma sessão de usuario logada
    if(isset($_SESSION['user'])) {

        //Redireciono para a pagina dashboard
        header('Location: dashboard.php');
    }
?>

<!-- HTML da página -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link rel="stylesheet" href="./assets/style.css">
</head>
<body>

    <!-- Action será enviada para o arquivo .actions/cadastrar.php -->
    <form action="./actions/cadastrar.php" method="POST">
        <h1 style="text-align: center;">Cadastro de Usuário</h1>
        <label for="username">Usuário</label>
        <input required type="text" name="username" id="username">
        <label for="email">E-mail</label>
        <input required type="text" name="email" id="email">
        <label for="cpf">CPF</label>
        <input required type="text" name="cpf" id="cpf">
        <label for="password">Senha</label>
        <input required type="password" name="password" id="password">
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>