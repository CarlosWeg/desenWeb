<?php

    function calcArea($valor){
        $resultado = $valor * $valor;

        return $resultado;
    }

    function imprimirArea($valor,$resultado){
        echo "<p>A área do quadrado de lado " . $valor . " metros é " . $resultado . " metros quadrados.</p>";
    }

?>