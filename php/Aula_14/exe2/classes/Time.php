<?php
require_once 'Jogador.php';

class Time {
    private $nome;
    private $anoFundacao;
    private $jogadores = [];

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getAnoFundacao() {
        return $this->anoFundacao;
    }

    public function setAnoFundacao($anoFundacao) {
        $this->anoFundacao = $anoFundacao;
    }

    public function getJogadores() {
        return $this->jogadores;
    }

    public function adicionarJogador(Jogador $jogador) {
        $this->jogadores[] = $jogador;
    }
}
?>
