<!DOCTYPE html>
<html lang = "pt-br">

<head>

    <meta charset = "UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7</title>

</head>

<body>

    <h2>Cálculo de Juros</h2>
    <p>Sabendo que o esse carro custa R$ 22.500,00 a vista, mas foi pago em 60 parcelas de R$ 489,65. Deseja calcular o JUROS?</p>

    <form action = "" method = "POST">

        <input type = "submit" value = "Calcular Juros">

    </form>

    <?php

        if ($_SERVER["REQUEST_METHOD"]=="POST"){
            require 'funcoes_exercicio7.php';

            $valorAVista = 22500;
            $parcelas = 60;
            $valorParcela = 489.65;

            $valorJuros = calcularJurosFinanciamento ($valorAVista,$parcelas,$valorParcela);
            imprimirJuros($valorJuros);
        }
    ?>



</body>