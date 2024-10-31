<?php
    
    class Computador{
        private $status;

        public function __construct(){
            $this->status = "Desligado";
        }

        public function ligar(){
            $this->status = "Ligado";
        }

        public function desligar(){
            $this->status = "Desligado";
        }

        public function estado(){
            return $this->status;
        }
    }