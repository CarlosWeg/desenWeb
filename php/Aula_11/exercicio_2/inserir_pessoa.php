<?php
// Conexão
$conn = pg_connect("host=localhost dbname=desenweb user=postgres password=postgres");

if (!$conn) {
    die("Erro na conexão com o banco de dados.");
}

// Dados
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'] ?? null;
$email = $_POST['email'] ?? null;
$password = $_POST['password'] ?? null;
$cidade = $_POST['cidade'] ?? null;
$estado = $_POST['estado'] ?? null;

// Query de inserção
$query = "INSERT INTO TBPESSOA (PESNOME, PESSOBRENOME, PESEMAIL, PESPASSWORD, PESCIDADE, PESESTADO) 
          VALUES ($1, $2, $3, $4, $5, $6)";

// Executando a query
$result = pg_query_params($conn, $query, array($nome, $sobrenome, $email, $password, $cidade, $estado));

if ($result) {
    echo "Pessoa cadastrada com sucesso!";
} else {
    echo "Erro ao cadastrar a pessoa.";
}

// Fechando a conexão
pg_close($conn);
?>