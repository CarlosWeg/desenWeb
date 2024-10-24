<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
</head>
<body>
    <form action="" method="POST">
        <label for="ladoA">Lado A (m):</label>
        <input type="number" name="ladoA" step="0.01" required>
        <br>
        <label for="ladoB">Lado B (m):</label>
        <input type="number" name="ladoB" step="0.01" required>
        <br>
        <input type="submit" value="Calcular">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            require_once 'funcoes_exercicio4.php';

            $ladoA = $_POST['ladoA'];
            $ladoB = $_POST['ladoB'];

            $area = calcularAreaRetangulo($ladoA, $ladoB);
            imprimirResultado($ladoA, $ladoB, $area);
        }
    ?>
</body>
</html>
