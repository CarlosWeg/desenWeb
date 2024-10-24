<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
</head>
<body>
    <form action="" method="POST">
        <label for="base">Base (m):</label>
        <input type="number" name="base" step="0.01" required>
        <br>
        <label for="altura">Altura (m):</label>
        <input type="number" name="altura" step="0.01" required>
        <br>
        <input type="submit" value="Calcular">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            require_once 'funcoes_exercicio5.php';

            $base = $_POST['base'];
            $altura = $_POST['altura'];

            // Cálculo da área
            $area = calcularAreaTriangulo($base, $altura);

            // Exibição do resultado
            imprimirResultado($base, $altura, $area);
        }
    ?>
</body>
</html>