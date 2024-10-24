<?php
function mostrarArvore($pastas, $nivel = 0) {
    $indentacao = str_repeat('-', $nivel * 2) . ' ';

    foreach ($pastas as $chave => $valor) {
        if (is_array($valor)) {
            echo $indentacao . $chave . "<br>";
            mostrarArvore($valor, $nivel + 1);
        } else {
            echo $indentacao . $valor . "<br>";
        }
    }
}
?>