<!DOCTYPE HTML>
<html lang = "pt-br">
<head>

    <meta charset = "UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>

</head>

<body>

    <form action = "" method = "POST">

        <label for = "valor">Valor:</label>
        <input type = "number" name = "valor" required>
        <br>

        <input type = "submit" value ="Enviar">

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            require_once 'funcoes_exercicio2.php'; 
            
            $valor = $_POST['valor'];
            $divisao = calcDivisao($valor);
            imprimirDivisao($divisao);
        }
        ?>

    </form>

</body>