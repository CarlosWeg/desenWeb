<?php

$SALARIO1 = 1000;
$SALARIO2 = 2000;

$SALARIO2 = $SALARIO1;

$SALARIO2++;

$SALARIO1 = $SALARIO1 * 1.10;

echo "Valor Salário 1: " . $SALARIO1 . " e Valor Salário 2: " . $SALARIO2 . "<br>";

// Prática 3
if ($SALARIO1 > $SALARIO2) {
    echo "O Valor da variável 1 é MAIOR que o valor da variável 2 <br>";
} elseif ($SALARIO1 < $SALARIO2) {
    echo "O Valor da variável 1 é MENOR que o valor da variável 2 <br>";
} else {
    echo "Os valores são iguais <br>";
}

?>