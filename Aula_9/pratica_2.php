<?php
$pastas = array(
    array(
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
    foreach ($itens as $valor) {
        if (is_array($valor)) {
            // Subpastas
            exibirArvore($valor, $nivel + 1);
        } else {
            // Arquivos ou pastas
            echo str_repeat("-", $nivel) . " " . $valor . "<br>";
        }
    }
}

exibirArvore($pastas);
?>