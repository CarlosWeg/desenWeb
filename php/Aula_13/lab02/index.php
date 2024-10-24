<?php
    require_once "pessoa.php";

    $objetoPessoa = new Pessoa();
    $objetoPessoa->setNome("Carlos");
    $objetoPessoa->setsobreNome("Weege");
    $objetoPessoa->setCpfCnpj("000.000.000-00")
    $objetoPessoa->setTelefone("47999999999")
    $objetoPessoa->setEndereco("Rua Tocantins")
    $objetoPessoa->setTipo(1);

    echo $objetoPessoa->getNomeCompleto();
    
?>