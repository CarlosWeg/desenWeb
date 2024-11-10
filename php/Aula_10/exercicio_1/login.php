<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    
    if ($login && $senha) {
        $_SESSION['login'] = $login;
        $_SESSION['senha'] = $senha;
        $_SESSION['inicio_sessao'] = date('Y-m-d H:i:s');
        $_SESSION['ultima_requisicao'] = date('Y-m-d H:i:s');
        
        header('Location: dashboard.php');
        exit();
    } else {
        header('Location: index.html');
        exit();
    }
}
?>