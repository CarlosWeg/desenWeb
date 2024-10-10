<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 10</title>
</head>
<body>
    
    <?php
    require_once 'funcoes_exercicio10.php';

    $pastas = array(
        "bsn" => array(
            "3a Fase" => array(
                "desenvWeb",
                "bancoDados 1",
                "engSoft 1"
            ),
            "4a Fase" => array(
                "Intro Web",
                "bancoDados 2",
                "engSoft 2"
            )
        )
    );

    mostrarArvore($pastas);
    ?>

</body>
</html>