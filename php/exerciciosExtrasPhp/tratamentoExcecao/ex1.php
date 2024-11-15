<?php

//Exercício 1: Tratamento Básico
// Crie um programa que solicita ao usuário um número. Se o número fornecido não for maior que 0, lance uma exceção com a mensagem: "Número inválido!".
//Trate essa exceção e exiba a mensagem no navegador.

    try{
        $numero =2;

        if ($numero<=0){
            throw new Exception("Número Inválido!");
        }
        echo("Número = " . $numero );
    } catch(Exception $erroGerado){
        echo("Erro gerado:" . $erroGerado->getMessage());
    }