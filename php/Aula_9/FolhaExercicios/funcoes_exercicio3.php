<?php

    function calcArea($valor){
        $resultado = $valor * $valor;

        return $resultado;
    }

    function imprimirArea($valor, $resultado) {
        $areaFormat = number_format($resultado, 2, ',', '.');
        echo "<p>A área do quadrado de lado " . number_format($valor, 2, ',', '.') . " metros é " . $areaFormat . " metros quadrados.</p>";
    }

?>