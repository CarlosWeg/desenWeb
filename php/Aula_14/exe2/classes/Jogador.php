<?php

    class Jogador{
        private $nome;
        private $posicao;
        private $dataNascimento;

        public function getNome(){
            return $this->nome;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getPosicao(){
            return $this->posicao;
        }

        public function setPosicao($posicao){
            $this->posicao = $posicao;
        }

        public function getDataNascimento(){
            return $this->dataNascimento;
        }

        public function setDataNascimento($dataNascimento){
            $this->dataNascimento = $dataNascimento;
        }

    }