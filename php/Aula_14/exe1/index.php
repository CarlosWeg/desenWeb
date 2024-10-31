<?php

    require_once 'classes/Calculadora.php';
    require_once 'classes/Computador.php';

    $calc = new Calculadora();
    echo "Soma: " . $calc->somar(5,10) . "<br>";
    echo "Subtração: " . $calc->subtrair(10,8) . "<br>";
    echo "Multiplicação: " . $calc->multiplicar(2,45) . "<br>";
    echo "Divisão: " . $calc->dividir(10,2) . "<br>";

    $pc = new Computador();
    $pc->ligar();
    echo "Status: " . $pc->estado() . "<br>";
    $pc->desligar();
    echo "Status: " . $pc->estado() . "<br>";