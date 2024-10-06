<?php

    function calcularJurosFinanciamento ($vista,$parc,$valorParc){
        $valorFinanciamento = $parc * $valorParc;

        $juros = $valorFinanciamento - $vista;

        return $juros;
    }

    function imprimirJuros($valor){
        echo"<p>O valor do Juros foi de R$.: " . number_format($valor,2,',','.') . "</p>";
    }

?>