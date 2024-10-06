<?php

function calcDivisao($numero){
    if ($numero % 2 == 0){
        return true;
    }else{
        return false;
    }

}

function imprimirDivisao($resultado){
    if ($resultado==true) {
        echo"<p>O número é divisível por 2!</p>";
    } else{
        echo"<p>O número NÃO é divisível por 2!</p>";
    }

}

?>