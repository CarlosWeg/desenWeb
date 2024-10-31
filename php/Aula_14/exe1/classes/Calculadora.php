<?php

    class Calculadora{

        public function somar($num1,$num2){
            return $num1 + $num2;
        }

        public function subtrair($num1,$num2){
            return $num1-$num2;
        }

        public function multiplicar($num1,$num2){
            return $num1*$num2;
        }

        public function dividir($num1,$num2){
            if ($num2 == 0) {
                return"Divisão por zero!";
            } else{
                return $num1 /  $num2;
            }
        }

    }