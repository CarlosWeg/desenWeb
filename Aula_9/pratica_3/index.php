<?php

require_once 'funcoes.php';

$notas = [8,6,9];
$faltas = [1,0,1,1,1];

$media = calcularMedia($notas);
$statusNota = verificarAprovacaoNota($media);
$frequencia = calcularFrequencia($faltas);
$statusFrequencia = verificarAprovacaoFrequencia($frequencia);

echo "Média das notas: $media<br>";
echo "Status por nota: $statusNota<br>";
echo "Frequência: $frequencia<br>";
echo "Status por frequência: $statusFrequencia<br>";

?>