<?php

// Exercício 5: Veículos

// Crie uma classe Veiculo com:

// Atributos: $marca, $modelo (protegidos).
// Método: detalhes(), que exibe marca e modelo.
// Depois, crie classes filhas:

// Carro, com um método adicional dirigir(), que retorna "Dirigindo o carro".
// Moto, com um método adicional pilotar(), que retorna "Pilotando a moto".
// Instancie objetos de Carro e Moto, e chame os métodos.

class Veiculo{
    protected $marca;
    protected $modelo;

    public function __construct($marca,$modelo){
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    public function getInfo(){
        return 'Marca: ' . $this->marca. ' Modelo: ' . $this->modelo;
    }

}

class Carro extends Veiculo{
    public function dirigir(){
        return 'Dirigindo o carro da marca ' . $this->marca . ' Modelo: ' . $this->modelo;
    }
}

class Moto extends Veiculo{
    public function pilotar(){
        return 'Pilotando a moto da marca ' . $this->marca . ' Modelo: ' . $this->modelo;
    }
}

$carro = new Carro('Toyota','Supra');
echo $carro->dirigir();

echo'<br>';

$moto = new Moto('Honra','CBR');
echo $moto->pilotar();