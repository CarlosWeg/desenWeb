<?php
session_start();
$login_valido = "carlosweege";
$senha_valida = "carlos1234";

if ($_POST['login'] == $login_valido && $_POST['password'] == $senha_valida) {
    $_SESSION['login'] = $_POST['login'];
    $_SESSION['senha'] = $_POST['password'];
    $_SESSION['inicio_sessao'] = date("Y-m-d H:i:s");
    $_SESSION['ultima_requisicao'] = date("Y-m-d H:i:s");
    header("Location: session.php");
    exit();
} else {
    echo "Login ou senha inválidos.";
}
?>