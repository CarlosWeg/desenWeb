<?php
function calcularParcelasSimples($parcelas, $valor_vista) {
    //Fórmula Juros Simples: J=P×i×t
    //Fómula Montante total (capital inicial mais os juros): M=P+J=P×(1+i×t)
    $taxa_base = 1.5;
    $incremento_taxa = 0.5;
    $juros = $taxa_base + (($parcelas - 24) / 12 * $incremento_taxa);
    $juros = $juros / 100;
    $montante = $valor_vista * (1 + $juros * ($parcelas / 12));
    return $montante / $parcelas;
}

function imprimirResultado($parcelas, $valor_parcela) {
    echo "<p>Para " . $parcelas . " vezes, o valor de cada parcela será R$ " . number_format($valor_parcela, 2, ',', '.') . "</p>";
}
?>