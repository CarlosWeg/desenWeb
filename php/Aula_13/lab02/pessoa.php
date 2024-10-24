<?php

class Pessoa {
    private $nome;
    private $sobreNome;
    private $dataNascimento;
    private $cpfCnpj;
    private $telefone;
    private $endereco;
    private $tipo;

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setsobreNome($sobreNome) {
        $this->sobreNome = $sobreNome;
    }

    public function setdataNascimento($dataNascimento) {
        $this->dataNascimento = $dataNascimento;
    }

    public function setCpfCnpj($cpfCnpj) {
        $this->cpfCnpj = $cpfCnpj;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function getNomeCompleto() {
        return $this->nome . " ". $this->sobreNome;

    }

    public function getIdade(){
        if (isset($this->dataNascimento)){
            idade = $this->dataNascimento->date_diff(dataNascimento)
            return $idade->y;
        }
    }

}

?>