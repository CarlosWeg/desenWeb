<?php
// Conexão
$conn = pg_connect("host=localhost dbname=desenweb user=postgres password=postgres");

if (!$conn) {
    die("Erro na conexão com o banco de dados.");
}
$search = $_POST['search'] ?? '';

if ($search) {
    // Query com filtro
    $query = "SELECT PESCODIGO, PESNOME, PESSOBRENOME, PESEMAIL, PESCIDADE, PESESTADO, CREATEDAT 
              FROM TBPESSOA 
              WHERE PESNOME ILIKE $1";
    $result = pg_query_params($conn, $query, array('%' . $search . '%'));
} else {
    // Query sem filtro
    $query = "SELECT PESCODIGO, PESNOME, PESSOBRENOME, PESEMAIL, PESCIDADE, PESESTADO, CREATEDAT FROM TBPESSOA";
    $result = pg_query($conn, $query);
}

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

    <form method="POST" action="">
        <label for="search">Buscar por nome:</label>
        <input type="text" id="search" name="search" value="<?php echo htmlspecialchars($search); ?>" placeholder="Digite o nome">
        <button type="submit">Buscar</button>
    </form>

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
                echo "<td>" . htmlspecialchars($row['pesemail'] ?? 'N/A') . "</td>"; 
                echo "<td>" . htmlspecialchars($row['pescidade']) . "</td>";
                echo "<td>" . htmlspecialchars($row['pesestado']) . "</td>";
                echo "<td>" . htmlspecialchars($row['createdat']) . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <?php
    // Fechar a conexão
    pg_close($conn);
    ?>
</body>
</html>