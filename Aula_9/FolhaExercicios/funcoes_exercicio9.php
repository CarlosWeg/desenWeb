<?php
function calcularParcelasCompostos($parcelas, $valor_vista) {
    $taxa_base = 2.0;
    $incremento_taxa = 0.3;
    $juros = $taxa_base + (($parcelas - 24) / 12 * $incremento_taxa);
    $juros = $juros / 100;
    $montante = $valor_vista * pow((1 + $juros), $parcelas / 12);
    return $montante / $parcelas;
}

function imprimirResultado($parcelas, $valor_parcela) {
    echo "<p>Para $parcelas vezes, o valor de cada parcela será R$ " . number_format($valor_parcela, 2, ',', '.') . "</p>";
}
?>