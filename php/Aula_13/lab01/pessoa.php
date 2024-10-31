<?php

class Pessoa {
    private $nome;
    private $sobreNome;

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setSobreNome($sobreNome) {
        $this->sobreNome = $sobreNome;
    }

    public function getNomeCompleto() {
        return $this->nome . " " . $this->sobreNome;
    }
}

?>