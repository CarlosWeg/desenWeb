<?php

// Exercício 1: Classe Conta Bancária
// Objetivo: Criar uma classe simples para gerenciar uma conta bancária.
// Requisitos:

// Crie uma classe ContaBancaria com os atributos privados:

// número da conta
// nome do titular
// saldo

// Implemente métodos para:

// depositar dinheiro
// sacar dinheiro
// verificar saldo

// O saldo não pode ficar negativo
// Todos os depósitos e saques devem ser validados

    class ContaBancaria{
        private $numeroConta;
        private $nomeTitular;
        private $saldo;


        public function __construct($numeroConta, $nomeTitular, $saldoInicial){

            if (empty($numeroConta) || empty($nomeTitular)){
                throw new InvalidArgumentException('Número da conta e nome do titular é OBRIGATÓRIO');
            }

            if ($saldoInicial <0){
                throw new InvalidArgumentException('O saldo inicial NÃO pode ser negativo');
            }

            $this->numeroConta = $numeroConta;
            $this->nomeTitular = $nomeTitular;
            $this->saldo = $saldoInicial;
        }

        public function getNumeroConta(){
            return $this->numeroConta;
        }

        public function getNomeTitular(){
            return $this->nomeTitular;
        }

        public function depositarDinheiro($valor){
            if ($valor < 0){
                throw new InvalidArgumentException('O valor de depósito não pode ser negativo');
            }
            $this->saldo+=$valor;
            return true;
        }

        public function sacarDinheiro($valor){
            if ($valor<=0){
                throw new InvalidArgumentException('O valor de saque deve ser MAIOR');
            }

            if ($valor>$this->saldo){
                throw new InvalidArgumentException('O valor de saque é MAIOR que o saldo');
            }

            $this->saldo-=$valor;
        }

        public function verificarSaldo(){
            return $this->saldo;
        }
    }

try{
    $conta001 = new ContaBancaria(1,'Roberto',1500);
    $conta001->depositarDinheiro(500);
    $conta001->sacarDinheiro(50);
    echo 'Informações Conta: <br>';
    echo 'Número da conta= ' . $conta001->getNumeroConta() . '<br>';
    echo 'Nome do Títular= ' . $conta001->getNomeTitular() . '<br>';
    echo 'Saldo= ' . $conta001->verificarSaldo() . '<br>';
} catch (Exception $e){
    echo 'Erro: ' . $e->getMessage() .'<br>';
}