<?php
    //Inicia a sessão do PHP
    session_start();

    //Incluindo as configurações de conexão do banco
    require_once 'config.php';

    //Verifico se existe uma sessão de usuario logada
    if(!isset($_SESSION['user'])) {
        //Redireciono para a pagina de login
        header('Location: index.php');
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
    <!-- Mensagem de bem vindo, mostro o nome do usuario dentro da sessão -->
    <h1>Bem Vindo <?php echo $_SESSION['user']['username'] ?>!!!</h1>
</body>
</html>