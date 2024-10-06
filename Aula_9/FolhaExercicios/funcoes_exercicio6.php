<?php

    function calcValorGastoProduto($quantidade, $preco) {
        $gastoProduto = [];
        foreach ($quantidade as $item => $qtd) {
            $gastoProduto[$item] = $qtd * $preco[$item];
        }
        return $gastoProduto;
    }

    function calcValorGastoTotal($produto){
        $gastoTotal=0;
        foreach ($produto as $gasto){
            $gastoTotal+=$gasto;
        }
        return $gastoTotal;
    }

    function calcValorSaldo($saldoComeco,$valorGasto){
        $saldoAposCompra = $saldoComeco - $valorGasto;
        return $saldoAposCompra;
    }

    function imprimirCompra($valorCompra){
        echo"<p>O valor da COMPRA é R$.:" . number_format($valorCompra, 2, ',', '.') . "</p>";
    }
    
    function imprimirSaldo($valorSaldo){
        echo"<p>O valor do SALDO é  R$.:" . number_format($valorSaldo, 2, ',', '.') . "</p>";
    }
    

?>