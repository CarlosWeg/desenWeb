<?php

function calcValorGastoProduto($quantidade, $preco) {
    $gastoProduto = [];
    foreach ($quantidade as $item => $qtd) {
        $gastoProduto[$item] = $qtd * $preco[$item];
    }
    return $gastoProduto;
}

function calcValorGastoTotal($gastos) {
    $gastoTotal = 0;
    foreach ($gastos as $gasto) {
        $gastoTotal += $gasto;
    }
    return $gastoTotal;
}

function calcValorSaldo($saldoInicial, $valorGasto) {
    return $saldoInicial - $valorGasto;
}

function imprimirCompra($valorCompra) {
    echo "<p>O valor da compra foi de R$ " . number_format($valorCompra, 2, ',', '.') . "</p>";
}

function verificarSaldo($saldoInicial, $valorGasto) {
    $saldoRestante = $saldoInicial - $valorGasto;

    if ($saldoRestante > 0) {
        echo "<p style='color: blue;'>Joãozinho ainda pode gastar R$ " . number_format($saldoRestante, 2, ',', '.') . "</p>";
    } elseif ($saldoRestante < 0) {
        $valorExcedido = abs($saldoRestante);
        echo "<p style='color: red;'>Joãozinho excedeu o saldo em R$ " . number_format($valorExcedido, 2, ',', '.') . "</p>";
    } else {
        echo "<p style='color: green;'>Joãozinho utilizou todo o saldo disponível de R$ 50,00</p>";
    }
}
?>