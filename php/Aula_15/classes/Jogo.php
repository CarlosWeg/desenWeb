<?php

class Jogo {
    public Time $timeA;
    public Time $timeB;
    public array $gols = [];

    public function __construct(Time $timeA, Time $timeB) {
        $this->timeA = $timeA;
        $this->timeB = $timeB;
    }

    public function addGol(Gol $gol): void {
        $this->gols[] = $gol;
    }

    public function getNomeTimeVencedor(): string {
        $golsTimeA = 0;
        $golsTimeB = 0;

        foreach ($this->gols as $gol) {
            if (in_array($gol->jogador, $this->timeA->getJogadores(), true)) {
                $golsTimeA++;
            } elseif (in_array($gol->jogador, $this->timeB->getJogadores(), true)) {
                $golsTimeB++;
            }
        }

        if ($golsTimeA > $golsTimeB) {
            return $this->timeA->nome;
        } elseif ($golsTimeB > $golsTimeA) {
            return $this->timeB->nome;
        } else {
            return "Empate";
        }
    }
}
