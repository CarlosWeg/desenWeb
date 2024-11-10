<?php
$pastas = array(
    "bsn" => array(
        "3a Fase" => array(
            "desenvWeb",
            "bancoDados 1",
            "engSoft 1"
        ),
        "4a Fase" => array(
            "Intro Web",
            "bancoDados 2",
            "engSoft 2"
        )
    )
);

function exibirArvore($itens, $nivel = 1) {
    foreach ($itens as $chave => $valor) {
        // Verifica se a chave é uma string
        if (is_array($valor)) {
            echo str_repeat("-", $nivel) . " " . $chave . "<br>";
            exibirArvore($valor, $nivel + 1);
        } else {
            // Imprime o valor
            echo str_repeat("-", $nivel) . " " . $valor . "<br>";
        }
    }
}

exibirArvore($pastas);

?>