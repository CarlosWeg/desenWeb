<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1 - Soma de três valores</title>
</head>
<body>
    <form action="" method="POST">
        <label for="valor1">Valor 1:</label>
        <input type="number" name="valor1" required>
        <br>
        <label for="valor2">Valor 2:</label>
        <input type="number" name="valor2" required>
        <br>
        <label for="valor3">Valor 3:</label>
        <input type="number" name="valor3" required>
        <br>
        <input type="submit" value="Calcular">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            require 'funcoes_exercicio1.php';
            $valor1 = $_POST['valor1'];
            $valor2 = $_POST['valor2'];
            $valor3 = $_POST['valor3'];
            $resultado = somaTresValores($valor1, $valor2, $valor3);
            aplicarCores($valor1, $valor2, $valor3, $resultado);
        }
    ?>
</body>
</html>
