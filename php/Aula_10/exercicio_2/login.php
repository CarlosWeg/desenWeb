<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $current_time = date('Y-m-d H:i:s');
    
    if ($login && $senha) {
        $_SESSION['login'] = $login;
        $_SESSION['senha'] = $senha;
        $_SESSION['inicio_sessao'] = $current_time;
        $_SESSION['ultima_requisicao'] = $current_time;
        
        // Se a opção "lembrar-me" estiver marcada, cria cookies
        if (isset($_POST['lembrar'])) {
            setcookie('user_login', $login, time() + (86400 * 30), "/"); // 30 dias
            setcookie('user_time', $current_time, time() + (86400 * 30), "/");
        }
        
        header('Location: dashboard.php');
        exit();
    } else {
        header('Location: index.html');
        exit();
    }
}
?>