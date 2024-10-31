<?php
class Endereco {
    private $logradouro;
    private $bairro;
    private $cidade;
    private $estado;
    private $cep;

    // Getters e Setters
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

    public function toJson() {
        return json_encode(get_object_vars($this));
    }
}

class Contato {
    private $tipo;
    private $nome;
    private $valor;

    // Getters e Setters
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

    public function toJson() {
        return json_encode(get_object_vars($this));
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
        $this->endereco = new Endereco();
        $this->contato = new Contato();
    }

    // Getters e Setters
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

    public function toJson() {
        $data = get_object_vars($this);
        $data['endereco'] = json_decode($this->endereco->toJson());
        $data['contato'] = json_decode($this->contato->toJson());
        return json_encode($data);
    }

    public function salvarJson($filePath) {
        $json = $this->toJson();
        file_put_contents($filePath, $json);
    }
}

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

// Salvando o objeto Pessoa em um arquivo JSON
$pessoa->salvarJson("pessoa.json");

// Exibindo JSON gerado
echo $pessoa->toJson();

?>
