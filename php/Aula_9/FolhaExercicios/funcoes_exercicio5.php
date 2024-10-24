<?php
function calcularAreaTriangulo($base, $altura) {
    return ($base * $altura) / 2;
}

function imprimirResultado($base, $altura, $area) {
    // Formatação
    $baseFormatada = number_format($base, 2, ',', '.');
    $alturaFormatada = number_format($altura, 2, ',', '.');
    $areaFormatada = number_format($area, 2, ',', '.');

    echo "<p>A área do triângulo retângulo com base $baseFormatada metros e altura $alturaFormatada metros é $areaFormatada metros quadrados.</p>";
}
?>