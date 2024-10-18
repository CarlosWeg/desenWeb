<?php

class Pessoa {
    private $sobreNome;

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setsobreNome($sobreNome) {
        $this->sobreNome = $sobreNome;
    }

    public function getNomeCompleto() {
        return $this->nome . " ". $this->sobreNome;

    }

}


?>