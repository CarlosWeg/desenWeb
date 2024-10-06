<?php

$notas = [8,6,9];

$faltas = [1,0,1,1,1];

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

function calcularFrequencia ($faltas){
    $totalDias = 5;
    $diasPresente = $faltas[0] + $faltas[1] + $faltas [2] + $faltas [3] + $faltas [4];
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

$media = calcularMedia($notas);
$statusNota = verificarAprovacaoNota($media);
$frequencia = calcularFrequencia($faltas);
$statusFrequencia = verificarAprovacaoFrequencia($frequencia);

echo "Média das notas: $media<br>";
echo "Status por nota: $statusNota<br>";
echo "Frequência: $frequencia<br>";
echo "Status por frequência: $statusFrequencia<br>";
?>