<?php
    require_once "pessoa.php";

    $objetoPessoa = new Pessoa();
    $objetoPessoa->setNome("Carlos");
    $objetoPessoa->setsobreNome("Weege");

    echo $objetoPessoa->getNomeCompleto();
?>