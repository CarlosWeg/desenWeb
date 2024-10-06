<?php

function calcularMedia($notas){
    $totalNotas = 3;
    $soma = $notas[0] + $notas[1] + $notas [2];
    return $soma/$totalNotas;
}

function verificarAprovacaoNota($media){
    if ($media>=7){
        return "Aprovado";
    } else
        return "Reprovado";
}

function calcularFrequencia($faltas){
    $totalDias = 5;
    $diasPresente = $faltas[0] + $faltas[1] + $faltas[2] + $faltas [3] + $faltas [4];
    return ($diasPresente / $totalDias) * 100;
}

function verificarAprovacaoFrequencia($frequencia){
    if ($frequencia > 70){
        return "Aprovado";
    }
    else{
        return "Reprovado";
    }
}

?>