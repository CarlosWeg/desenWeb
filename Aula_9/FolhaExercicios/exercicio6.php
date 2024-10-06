<!DOCTYPE HTML>
<html lang = "PT-BR">

<head>

    <meta charset = "UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6</title>

</head>

<body>

    <form action = "" method = "POST">

        <label for = "maca">Maçã (kg):</label>
        <input type = "number" name = "maca" step = "0.01" required>
        <br>
        <label for = "melancia">Melancia (kg):</label>
        <input type = "number" name = "melancia" step = "0.01" required>
        <br>
        <label for = "laranja">Laranja (kg):</label>
        <input type = "number" name = "laranja" step = "0.01" required>
        <br>
        <label for = "repolho">Repolho (kg):</label>
        <input type = "number" name = "repolho" step = "0.01" required>
        <br>
        <label for = "cenoura">Cenoura (kg):</label>
        <input type = "number" name = "cenoura" step = "0.01" required>
        <br>
        <label for = "batatinha">Batatinha (kg):</label>
        <input type = "number" name = "batatinha" step = "0.01" required>
        <br>
        <input type = "submit" value = "Enviar">

        <?php

            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                require 'funcoes_exercicio6.php';

                $quantidades = [
                    'maca' => $_POST['maca'],
                    'melancia' => $_POST['melancia'],
                    'laranja' => $_POST['laranja'],
                    'repolho' => $_POST['repolho'],
                    'cenoura' => $_POST['cenoura'],
                    'batatinha' => $_POST['batatinha']
                ];

                $precos = [
                    'maca' => 3.50,
                    'melancia' => 2.00,
                    'laranja' => 4.00,
                    'repolho' => 1.50,
                    'cenoura' => 3.00,
                    'batatinha' => 2.50
                ];

                $saldoInicial = 50.00;
                $valorGastoProduto=calcValorGastoProduto($quantidades,$precos);
                $valorGastoTotal=calcValorGastoTotal($valorGastoProduto);
                $Saldo=calcValorSaldo($saldoInicial,$valorGastoTotal);
                imprimirCompra($valorGastoTotal);
                imprimirSaldo($Saldo);
            }

        ?>

    </form>


</body>


</html>