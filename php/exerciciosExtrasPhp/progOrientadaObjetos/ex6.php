<?php

// Exercício 6: ASSOCIAÇÃO Funcionário e Empresa

// Crie duas classes:

// Empresa com o atributo $nome
// Funcionario com os atributos $nome e $empresa

// Na classe Funcionario, implemente:

// Um método para associar um funcionário a uma empresa.
// Um método que retorna: "Funcionário X trabalha na empresa Y".


class Empresa{
    public $nome;

    public function __construct($nome){
        $this->nome = $nome;
    }

}

class Funcionario{
    public $nome;
    private $empresa;

    public function __construct($nome){
        $this->nome = $nome;
    }

    public function setEmpresa(Empresa $empresa){
        $this->empresa = $empresa;
    }
    
    public function getInfo(){
        return 'O funcionario ' . $this->nome . ' trabalha na empresa ' . $this->empresa->nome;
    }
}


$empresa = new Empresa('Carlos Soluções');
$funcionario = new Funcionario('Leonilda');

$funcionario->setEmpresa($empresa);

echo $funcionario->getInfo();