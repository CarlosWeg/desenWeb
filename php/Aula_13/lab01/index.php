<?php
require_once "pessoa.php";

$objetoPessoa = new Pessoa();
$objetoPessoa->setNome("Carlos");
$objetoPessoa->setSobreNome("Weege");

echo $objetoPessoa->getNomeCompleto();
?>
