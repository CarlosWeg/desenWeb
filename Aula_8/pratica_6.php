<?php

$dados = [
    ["disciplina" => "Matemática", "faltas" => 5, "media" => 8.5],
    ["disciplina" => "Português", "faltas" => 2, "media" => 9],
    ["disciplina" => "Geografia", "faltas" => 10, "media" => 6],
    ["disciplina" => "Educação Física", "faltas" => 2, "media" => 8]
];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tabela de Faltas e Média</title>
</head>
<body>

    <h2>Tabela de Faltas e Média por Disciplina</h2>

    <table border = "1">
        <tr>
            <th>Disciplina</th>
            <th>Faltas</th>
            <th>Média</th>
        </tr>

        <?php

        foreach ($dados as $linha) {
            echo "<tr>";
            echo "<td>{$linha['disciplina']}</td>";
            echo "<td>{$linha['faltas']}</td>";
            echo "<td>{$linha['media']}</td>";
            echo "</tr>";
        }
        ?>

    </table>

</body>
</html>