<?php
    //Inicia a sessão do PHP
    session_start();

    //Incluindo as configurações de conexão do banco
    require_once __DIR__.'/config.php';


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

    <!--  Action será enviada a informação para .actions/login.php -->
    <form action="./actions/login.php" method="POST">
        <h1 style="text-align:center">Login</h1>
        <label for="email">Usuário</label>
        <input type="text" name="email" id="email">
        <label for="password">Senha</label>
        <input type="password" name="password" id="password">
        <button type="submit">Entrar</button>
        <a href="./cadastrar.php">Cadastrar</a>
    </form>
</body>
</html>