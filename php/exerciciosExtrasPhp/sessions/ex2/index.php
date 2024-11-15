<?php

// Exercício 2: Sistema de contador de visitas

// Crie uma página que rastreia quantas vezes um usuário a visitou.
// Armazene o número de visitas em uma variável de sessão e atualize-a a cada acesso.

session_start();

if (!isset($_SESSION['visitas'])) {
    $_SESSION['visitas'] = 0;
}
$_SESSION['visitas']++;

echo "Você visitou esta página " . $_SESSION['visitas'] . " vezes.";
?>

<!DOCTYPE HTML>
<html lang = "pt-br">

<head>
    <meta charset = "UTF-8">
    <title>Exercício</title>
<head>

<body>

    <a href="reset.php">Resetar contador</a>


</body>

</html>