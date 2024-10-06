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
        <input type="number" name="base" required>
        <br>
        <label for="altura">Altura (m):</label>
        <input type="number" name="altura" required>
        <br>
        <input type="submit" value="Calcular">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            require 'funcoes_exercicio5.php';
            $base = $_POST['base'];
            $altura = $_POST['altura'];
            calcularAreaTriangulo($base, $altura);
        }
    ?>
</body>
</html>