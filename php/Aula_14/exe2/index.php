<?php
require_once 'classes/Time.php';
require_once 'classes/Jogador.php';

// Criando o time
$time = new Time();
$time->setNome("Time de Futebol");
$time->setAnoFundacao(1900);

// Criando jogadores
$jogador1 = new Jogador();
$jogador1->setNome("Jogador 1");
$jogador1->setPosicao("Atacante");
$jogador1->setDataNascimento("1990-01-01");

$jogador2 = new Jogador();
$jogador2->setNome("Jogador 2");
$jogador2->setPosicao("Defensor");
$jogador2->setDataNascimento("1992-02-02");

// Adicionando jogadores ao time
$time->adicionarJogador($jogador1);
$time->adicionarJogador($jogador2);

// Exibindo informações do time
echo "Nome do Time: " . $time->getNome() . "<br>";
echo "Ano de Fundação: " . $time->getAnoFundacao() . "<br>";
echo "Jogadores:<br>";

foreach ($time->getJogadores() as $jogador) {
    echo "Nome: " . $jogador->getNome() . "<br>";
    echo "Posição: " . $jogador->getPosicao() . "<br>";
    echo "Data de Nascimento: " . $jogador->getDataNascimento() . "<br>";
}
?>
