<?php

class Endereco {
    private $logradouro;
    private $bairro;
    private $cidade;
    private $estado;
    private $cep;
    
    public function getLogradouro() {
        return $this->logradouro;
    }
    
    public function setLogradouro($logradouro) {
        $this->logradouro = $logradouro;
    }
    
    public function getBairro() {
        return $this->bairro;
    }
    
    public function setBairro($bairro) {
        $this->bairro = $bairro;
    }
    
    public function getCidade() {
        return $this->cidade;
    }
    
    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }
    
    public function getEstado() {
        return $this->estado;
    }
    
    public function setEstado($estado) {
        $this->estado = $estado;
    }
    
    public function getCep() {
        return $this->cep;
    }
    
    public function setCep($cep) {
        $this->cep = $cep;
    }
}

class Contato {
    private $tipo;
    private $nome;
    private $valor;
    
    public function getTipo() {
        return $this->tipo;
    }
    
    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }
    
    public function getNome() {
        return $this->nome;
    }
    
    public function setNome($nome) {
        $this->nome = $nome;
    }
    
    public function getValor() {
        return $this->valor;
    }
    
    public function setValor($valor) {
        $this->valor = $valor;
    }
}

class Pessoa {
    private $nome;
    private $sobrenome;
    private $dataNascimento;
    private $cpfcnpj;
    private $tipo;
    private $telefone;
    private $endereco;
    private $contato;
    
    public function __construct() {
        $this->inicializaClasse();
    }
    
    public function getNome() {
        return $this->nome;
    }
    
    public function setNome($nome) {
        $this->nome = $nome;
    }
    
    public function getSobrenome() {
        return $this->sobrenome;
    }
    
    public function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }
    
    public function getDataNascimento() {
        return $this->dataNascimento;
    }
    
    public function setDataNascimento($dataNascimento) {
        $this->dataNascimento = $dataNascimento;
    }
    
    public function getCpfcnpj() {
        return $this->cpfcnpj;
    }
    
    public function setCpfcnpj($cpfcnpj) {
        $this->cpfcnpj = $cpfcnpj;
    }
    
    public function getTipo() {
        return $this->tipo;
    }
    
    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }
    
    public function getTelefone() {
        return $this->telefone;
    }
    
    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }
    
    public function getEndereco() {
        return $this->endereco;
    }
    
    public function setEndereco(Endereco $endereco) {
        $this->endereco = $endereco;
    }
    
    public function getContato() {
        return $this->contato;
    }
    
    public function setContato(Contato $contato) {
        $this->contato = $contato;
    }
    
    public function getNomeCompleto() {
        return $this->nome . ' ' . $this->sobrenome;
    }
    
    public function getIdade() {
        $dataNascimento = new DateTime($this->dataNascimento);
        $hoje = new DateTime();
        $idade = $hoje->diff($dataNascimento);
        return $idade->y;
    }
    
    private function inicializaClasse() {
        $this->endereco = new Endereco();
        $this->contato = new Contato();
    }
}

// Uso:
$pessoa = new Pessoa();
$pessoa->setNome("Carlos");
$pessoa->setSobrenome("Weege");
$pessoa->setDataNascimento("1990-01-01");
$pessoa->setCpfcnpj("123.456.789-00");
$pessoa->setTipo(1);
$pessoa->setTelefone("(11) 99999-9999");

$endereco = new Endereco();
$endereco->setLogradouro("Rua das Flores");
$endereco->setBairro("Centro");
$endereco->setCidade("Rio do Sul");
$endereco->setEstado("SC");
$endereco->setCep("01234-567");
$pessoa->setEndereco($endereco);

$contato = new Contato();
$contato->setTipo(1);
$contato->setNome("Email");
$contato->setValor("carlosweege@email.com");
$pessoa->setContato($contato);

?>