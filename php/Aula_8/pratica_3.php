<?php

$SALARIO1 = 1000;
$SALARIO2 = 2000;


$SALARIO2 = $SALARIO1;

$SALARIO2++;

$SALARIO1 += $SALARIO1 * 0.10;

echo("Valor salário 1: $SALARIO1 , Valor salário 2: $SALARIO2");

echo'<hr>';


if ($SALARIO1>$SALARIO2){

    echo "O Valor da variável 1 é maior que o valor da variável 2";
}

else if ($SALARIO1<$SALARIO2){

    echo "O Valor da variável 2 é maior que o valor da variável 1";

}


else{
    echo "Os valores são iguais.";
}

?>