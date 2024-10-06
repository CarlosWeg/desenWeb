<!DOCTYPE HTML>
<html lang = "pt-br">

<head>

    <meta charset = "UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>    

</head>

<body>

    <form action = "" method = "POST">

        <label for="lado">Lado do Quadrado (m)</label>
        <input type = "number" name = "lado" required>
        <br>
        <input type = "submit" value = "Calcular">

    </form>

    <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            require 'funcoes_exercicio3.php';

            $lado = $_POST['lado'];
            $area = calcArea($lado);
            imprimirArea($lado,$area);
        }

    ?>

</body>

</html>