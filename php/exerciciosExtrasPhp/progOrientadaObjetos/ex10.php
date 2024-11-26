<?php

    // Exercício 10: Sistema de Gerenciamento de Funcionários (Herança e Polimorfismo)
    // Crie um sistema para gerenciar diferentes tipos de funcionários.
    
    // Funcionario (Classe Abstrata):
    
    // Propriedades: nome, salário base.
    // Método abstrato: calcularSalario().

    // Gerente:
    
    // Extende Funcionario e implementa calcularSalario() com um bônus adicional.

    // Desenvolvedor:
    // Extende Funcionario e implementa calcularSalario() com acréscimo por produtividade.

    // SistemaDeFolha:

    // Propriedades: lista de funcionários.
    // Métodos:
    // adicionarFuncionario(Funcionario $funcionario): adiciona funcionários à lista.
    // calcularFolha(): calcula e exibe o salário de todos os funcionários.

    abstract class Funcionario{
        protected $nome;
        protected $salarioBase;

        public function getNome(){
            return $this->nome;
        }

        public function __construct($nome, $salarioBase){
            $this->nome = $nome;
            $this->salarioBase = $salarioBase;
        }

        abstract public function calcularSalario();

    }


    class Gerente extends Funcionario{
        private $bonus;

        public function __construct($nome, $salarioBase,$bonus){
            parent:: __construct($nome, $salarioBase);
            $this->bonus = $bonus;
        }

        public function calcularSalario(){
            return $this->salarioBase + $this->bonus;
        }

    }

    class Desenvolvedor extends Funcionario{
        private $acresProdut;

        public function __construct($nome, $salarioBase,$acresProdut){
            parent:: __construct($nome, $salarioBase);
            $this->acresProdut = $acresProdut;

        }

        public function calcularSalario(){
            return $this->salarioBase + $this->acresProdut;
        }
    }


    class SistemaDeFolha{
        private $listaFuncionarios = [];

        public function adicionarFuncionario(Funcionario $funcionario){
            $this->listaFuncionarios [] = $funcionario;
        }


        public function calcularExibirFolha(){
            foreach($this->listaFuncionarios as $funcionario){
                echo 'Salário final do funcionário ' . $funcionario->getNome() . ' = ' . $funcionario->calcularSalario() . '<br>';
            }
        }

    }

    $gerenteCarlos = new Gerente('Carlos', 2000, 300);
    $desenvolverdorAugusto = new Desenvolvedor('Augusto',1500,200);

    $folhaEmpresa = new SistemaDeFolha;
    $folhaEmpresa->adicionarFuncionario($gerenteCarlos);
    $folhaEmpresa->adicionarFuncionario($desenvolverdorAugusto);

    $folhaEmpresa->calcularExibirFolha();