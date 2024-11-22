<?php

// Exercício 3: Sistema de Funcionários
// Objetivo: Criar uma hierarquia de classes para diferentes tipos de funcionários

// Crie uma classe abstrata Funcionario com:

// nome
// CPF
// salário base

// Crie as classes:

// Vendedor (com comissão)
// Gerente (com bônus)
// Desenvolvedor (com nível)

// Cada tipo deve ter seu próprio cálculo de salário
// Implemente um método para exibir os dados de cada funcionário

abstract class Funcionario {
    protected $nome;
    protected $cpf;
    protected $salarioBase;

    public function __construct($nome, $cpf, $salarioBase) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->salarioBase = $salarioBase;
    }

    abstract public function calculaSalarioFinal();

    public function getInfo() {
        return [
            'nome' => $this->nome,
            'cpf' => $this->cpf,
            'salarioBase' => $this->salarioBase,
            'salarioFinal' => $this->calculaSalarioFinal()
        ];
    }
}

class Vendedor extends Funcionario {
    private $comissao;
    private $vendasMes;

    public function __construct($nome, $cpf, $salarioBase, $comissao) {
        parent::__construct($nome, $cpf, $salarioBase);
        $this->comissao = $comissao;
        $this->vendasMes = 0;
    }

    public function registrarVenda($valor) {
        if ($valor < 0) {
            throw new Exception("Valor da venda não pode ser negativo.");
        }
        $this->vendasMes += $valor;
    }

    public function calculaSalarioFinal() {
        return $this->salarioBase + ($this->vendasMes * ($this->comissao / 100));
    }
}

class Gerente extends Funcionario {
    private $bonus;

    public function __construct($nome, $cpf, $salarioBase, $bonus) {
        parent::__construct($nome, $cpf, $salarioBase);
        $this->bonus = $bonus;
    }

    public function calculaSalarioFinal() {
        return $this->salarioBase + $this->bonus;
    }
}

class Desenvolvedor extends Funcionario {
    private $nivel;
    private $bonusNivel = [
        'junior' => 0,
        'pleno' => 200,
        'senior' => 500
    ];

    public function __construct($nome, $cpf, $salarioBase, $nivel) {
        parent::__construct($nome, $cpf, $salarioBase);
        $this->nivel = $nivel;
    }

    public function calculaSalarioFinal() {
        if (!isset($this->bonusNivel[$this->nivel])) {
            throw new Exception("Nível inválido: {$this->nivel}");
        }
        return $this->salarioBase + $this->bonusNivel[$this->nivel];
    }
}

try{
    $funcionarioVendedor = new Vendedor('Junior','123.456.789-90',1500,5);
    $funcionarioVendedor->registrarVenda(500);
    print_r($funcionarioVendedor->getInfo());
    echo '<br>';

    $funcionarioGerente = new Gerente('Keyla','987.654.321-10',3000,500);
    print_r($funcionarioGerente->getInfo());
    echo '<br>';

    $funcionarioDesenvolvedor = new Desenvolvedor('Carlos','654.867.312-20',5000,'senior');
    print_r($funcionarioDesenvolvedor->getInfo());
    echo '<br>';

} catch (Exception $e){
    echo 'Erro: '. $e->getMessage();
}