<?php

//Exercício 2: Divisão por Zero
//Implemente uma função para realizar uma divisão. Se o divisor for 0, a função deve lançar uma exceção.
//Utilize try-catch para capturar e tratar o erro.

    try{
        $num1 = 10;
        $num2 = 5;

        if($num2 == 0){
            throw new Exception("O divisor é Zero!");
        }

        echo("Resultado da divisão = " . $num1/$num2);
        
    } catch (Exception $erroDivisão){
        echo("Erro de divisão");
    }