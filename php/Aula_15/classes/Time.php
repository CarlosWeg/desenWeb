<?php

class Time {
    public string $nome;
    public int $anoFundacao;
    public array $jogadores = [];

    public function __construct(string $nome, int $anoFundacao) {
        $this->nome = $nome;
        $this->anoFundacao = $anoFundacao;
    }

    public function addJogador(Jogador $jogador): void {
        $this->jogadores[] = $jogador;
    }

    public function getJogadores(): array {
        return $this->jogadores;
    }
}
