<?php

// Exercício 8: Relacionamento e Polimorfismo
//Animal e Som!

// Crie uma classe abstrata Animal com:

// Atributo $nome (protegido).
// Método abstrato emitirSom().

// Crie classes concretas:

// Cachorro, que implementa emitirSom() como "Au au".
// Gato, que implementa emitirSom() como "Miau".

// Crie uma classe Zoologico com:

// Método adicionarAnimal(Animal $animal).
// Método mostrarSons()

// Teste criando objetos de Cachorro e Gato, adicionando-os ao zoológico e mostrando os sons.


abstract class Animal{
    protected $nome;

    abstract public function emitirSom();

}

class Cachorro extends Animal{
    public function emitirSom(){
        return 'Faz Au Au!';
    }
}

class Gato extends Animal{
    public function emitirSom(){
        return 'Faz Miau';
    }
}

class Zoologico{
    private $animais = [];


    public function adicionarAnimal(Animal $animal){
        $this->animais[] = $animal;
    }

    public function mostrarSons(){
        foreach($this->animais as $animal){
            echo $animal->emitirSom() . '<br>';
        }
    }
}


$cachorro = new Cachorro("Rex");
$gato = new Gato("Mingau");

$zoologico = new Zoologico();
$zoologico->adicionarAnimal($cachorro);
$zoologico->adicionarAnimal($gato);

$zoologico->mostrarSons();