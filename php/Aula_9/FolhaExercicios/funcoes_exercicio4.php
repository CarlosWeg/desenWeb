<?php
function calcularAreaRetangulo($ladoA, $ladoB) {
    return $ladoA * $ladoB;
}

function imprimirResultado($ladoA, $ladoB, $area) {
    $areaFormatada = number_format($area, 2, ',', '.');
    $ladoAFormatado = number_format($ladoA, 2, ',', '.');
    $ladoBFormatado = number_format($ladoB, 2, ',', '.');

    if ($area > 10) {
        echo "<h1>A área do retângulo de lados $ladoAFormatado e $ladoBFormatado metros é $areaFormatada metros quadrados.</h1>";
    } else {
        echo "<h3>A área do retângulo de lados $ladoAFormatado e $ladoBFormatado metros é $areaFormatada metros quadrados.</h3>";
    }
}
?>
