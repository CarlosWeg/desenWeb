<?php

$nomeProfessores = array ("Julian","Marco","Sandro","Cleber,","Fernando");
$nomeDisciplinas = array ("Engenharia de Software", "Banco de Dados II", "Administração e Sistemas", "Programação WEB", "Estrutura de Dados II");

for ($i=0;$i<5;$i++){
    echo "Disciplina $nomeDisciplinas[$i] , Professor $nomeProfessores[$i]";
    echo '<br>';
}

?>