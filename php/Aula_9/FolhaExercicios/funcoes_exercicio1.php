<?php
function somaTresValores($v1, $v2, $v3) {
    return $v1 + $v2 + $v3;
}

function aplicarCores($v1, $v2, $v3, $resultado) {
    if ($v1 > 10) {
        echo "<p style='color: blue;'>Resultado: $resultado</p>";
    } elseif ($v2 < $v3) {
        echo "<p style='color: green;'>Resultado: $resultado</p>";
    } elseif ($v3 < $v1 && $v3 < $v2) {
        echo "<p style='color: red;'>Resultado: $resultado</p>";
    } else {
        echo "<p>Resultado: $resultado</p>";
    }
}
?>