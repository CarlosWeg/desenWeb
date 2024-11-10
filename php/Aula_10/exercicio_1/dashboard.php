<?php
session_start();

// Verifica se usuário está logado
if (!isset($_SESSION['login'])) {
    header('Location: index.html');
    exit();
}

// Atualiza hora da última requisição
$antiga_requisicao = new DateTime($_SESSION['ultima_requisicao']);
$_SESSION['ultima_requisicao'] = date('Y-m-d H:i:s');

// Calcula tempo de sessão
$inicio = new DateTime($_SESSION['inicio_sessao']);
$agora = new DateTime();
$tempo_sessao = $inicio->diff($agora);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <meta charset="UTF-8">
</head>
<body>
    <h2>Bem-vindo(a), <?php echo htmlspecialchars($_SESSION['login']); ?>!</h2>
    
    <h3>Informações da Sessão:</h3>
    <ul>
        <li>Login: <?php echo htmlspecialchars($_SESSION['login']); ?></li>
        <li>Senha: <?php echo str_repeat('*', strlen($_SESSION['senha'])); ?></li>
        <li>Início da sessão: <?php echo $_SESSION['inicio_sessao']; ?></li>
        <li>Última requisição: <?php echo $_SESSION['ultima_requisicao']; ?></li>
        <li>Tempo de sessão: 
            <?php 
            echo $tempo_sessao->h . ' horas, ';
            echo $tempo_sessao->i . ' minutos e ';
            echo $tempo_sessao->s . ' segundos';
            ?>
        </li>
    </ul>

    <a href="logout.php">Sair</a>
</body>
</html>