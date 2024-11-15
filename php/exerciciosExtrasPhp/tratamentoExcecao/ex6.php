<!DOCTYPE HTML>
<html lang = "pt-BR">

<head>

    <meta charset = "UTF-8">
    <title>Exercício</title>

</head>

<body>

    <form action = "" method = "POST">

        <label for = "valor">Insira o valor:</label>
        <input type = "number" name = "valor" step = "0.01" required>

        <label for = "moeda">Insira a moeda de conversão:</label>
        <input type = "text" name = "moeda" step = "0.01" required>

        <input type = "submit" value = "Calcular!">

    </form>


    <?php

    //Crie um script que receba um valor em uma moeda e a moeda para a qual deseja converter (ex.: de USD para BRL).

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $valor = $_POST['valor'];
            $moeda = $_POST['moeda'];
            
            try{

                if($valor<=0){
                    throw new Exception('Insira um valor maior que zero!');
                }

                if (!in_array($moeda,['DOLAR','EURO'])){
                    throw new Exception('Infelizmente não temos como calcular a conversão da moeda ' . $moeda);
                }

                switch ($moeda){
                    case'DOLAR': $resultado = $valor * 5.00; break;
                    case'EURO': $resultado = $valor * 6.00; break;
                }

                echo 'Conversão realizada com sucesso, total: ' . number_format($resultado,2);

            } catch (Exception $e) {
                echo 'Conversão NÃO foi realizada, motivo: ' . $e->getMessage();
            }
        }

    ?>



</body>


</html>