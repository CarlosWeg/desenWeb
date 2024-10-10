<?php
// Conexão
$conn = pg_connect("host=localhost dbname=desenweb user=postgres password=postgres");

if (!$conn) {
    die("Erro na conexão com o banco de dados.");
}

// Query para selecionar
$query = "SELECT PESCODIGO, PESNOME, PESSOBRENOME, PESEMAIL, PESCIDADE, PESESTADO, CREATEDAT FROM TBPESSOA";

// Executando
$result = pg_query($conn, $query);

if (!$result) {
    die("Erro na consulta ao banco de dados.");
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pessoas Cadastradas</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Lista de Pessoas Cadastradas</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Email</th>
                <th>Cidade</th>
                <th>Estado</th>
                <th>Data de Criação</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Iterando sobre os resultados
            while ($row = pg_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['pescodigo']) . "</td>";
                echo "<td>" . htmlspecialchars($row['pesnome']) . "</td>";
                echo "<td>" . htmlspecialchars($row['pessobrenome']) . "</td>";
                echo "<td>" . htmlspecialchars($row['pesemail']) . "</td>";
                echo "<td>" . htmlspecialchars($row['pescidade']) . "</td>";
                echo "<td>" . htmlspecialchars($row['pesestado']) . "</td>";
                echo "<td>" . htmlspecialchars($row['createdat']) . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <?php
    pg_close($conn);
    ?>
</body>
</html>