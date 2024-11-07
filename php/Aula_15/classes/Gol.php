<?php

class Gol {
    public int $tempo;
    public Jogador $jogador;

    public function __construct(int $tempo, Jogador $jogador) {
        $this->tempo = $tempo;
        $this->jogador = $jogador;
    }
}
