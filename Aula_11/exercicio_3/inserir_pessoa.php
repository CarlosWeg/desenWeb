<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $senha = $_POST['password'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    $pessoa = [
        'nome' => $nome,
        'sobrenome' => $sobrenome,
        'email' => $email,
        'senha' => $senha,
        'cidade' => $cidade,
        'estado' => $estado
    ];

    $arquivo = 'pessoas.json';

    if (file_exists($arquivo)) {
        $dados = json_decode(file_get_contents($arquivo), true);
    } else {
        $dados = [];
    }

    $dados[] = $pessoa;
    file_put_contents($arquivo, json_encode($dados, JSON_PRETTY_PRINT));
}
?>
