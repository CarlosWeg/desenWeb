<?php

class Jogador {
    public string $nome;
    public string $posicao;
    public DateTime $dataNascimento;

    public function __construct(string $nome, string $posicao, DateTime $dataNascimento) {
        $this->nome = $nome;
        $this->posicao = $posicao;
        $this->dataNascimento = $dataNascimento;
    }
}
