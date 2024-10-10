<?php
session_start();
if (!isset($_SESSION['login']) || !isset($_SESSION['inicio_sessao'])) {
    echo "<script>alert('Os dados da sessão foram perdidos.'); window.location.href='login.html';</script>";
    exit();
}
$_SESSION['ultima_requisicao'] = date("Y-m-d H:i:s");
$inicio = strtotime($_SESSION['inicio_sessao']);
$duracao = time() - $inicio;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessão</title>
</head>
<body>
    <p>Login: <?php echo $_SESSION['login']; ?></p>
    <p>Início da sessão: <?php echo $_SESSION['inicio_sessao']; ?></p>
    <p>Última requisição: <?php echo $_SESSION['ultima_requisicao']; ?></p>
    <p>Tempo de sessão: <?php echo gmdate("H:i:s", $duracao); ?></p>
    <form action="logout.php" method="post">
        <button type="submit">Sair</button>
    </form>
</body>
</html>