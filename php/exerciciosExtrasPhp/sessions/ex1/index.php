<?php

// Exercício 1: Criar uma página de login simples

// Crie um formulário de login com campos para o nome de usuário e senha.
// Se as credenciais forem válidas, armazene o nome de usuário na sessão e redirecione o usuário para uma página de boas-vindas.
// Se o usuário já estiver logado, mostre uma mensagem de boas-vindas com o nome do usuário.

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    if ($usuario === 'admin' && $senha === '1234'){
        $_SESSION['usuario'] = $usuario;
        header('Location: sucesso.php');
    } else{
        echo'Credenciais inválidas!';
    }
}
?>

<!DOCTYPE HTML>
<html lang = "pt-br">

<head>

    <meta charset = "UTF-8">
    <title>Exercício</title>

</head>

<body>

    <form method = "POST">

        <label for = "usuario">Informe o usuário:</label>
        <input type = "text" name = "usuario">

        <label for = "senha">Informe a senha:</label>
        <input type = "password" name = "senha">

        <input type = "submit" value = "Enviar!">

    </form>


</body>

</html>