<?php

$SALARIO1 = 1000;
$SALARIO2 = 2000;


for ($i=1;$i<=100;$i++){
    $SALARIO1++;

    if ($i == 50){
        break;
    }
}

if ($SALARIO1<$SALARIO2){
    echo "Salário 1 = $SALARIO1";
}

?>