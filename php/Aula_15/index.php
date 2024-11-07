<?php

spl_autoload_register(function ($class) {
    require_once __DIR__ . "/classes/{$class}.php";
});

$timeA = new Time("Time A", 1990);
$timeB = new Time("Time B", 2000);

$jogador1 = new Jogador("Jogador 1", "Atacante", new DateTime("1995-05-01"));
$jogador2 = new Jogador("Jogador 2", "Meio-Campo", new DateTime("1998-07-10"));
$jogador3 = new Jogador("Jogador 3", "Atacante", new DateTime("1992-03-15"));

$timeA->addJogador($jogador1);
$timeB->addJogador($jogador2);
$timeB->addJogador($jogador3);

$jogo = new Jogo($timeA, $timeB);

$jogo->addGol(new Gol(15, $jogador1)); // Gol do time A
$jogo->addGol(new Gol(30, $jogador2)); // Gol do time B
$jogo->addGol(new Gol(45, $jogador1)); // Gol do time A

echo "Time vencedor: " . $jogo->getNomeTimeVencedor();