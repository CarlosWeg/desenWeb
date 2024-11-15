<!DOCTYPE html>
<html lang = "pt-br">
<head>

    <title>Exercício</title>
    <meta charset = "UTF-8">

</head>
<body>

        <form action = "" method = "POST">

            <label for = "num1">Insira um número:</label>
            <input type = "number" name = "num1">

            <label for = "num2">Insira um número:</label>
            <input type = "number" name = "num2">

            <select name = "operacao">

                <option value = "+">+</option>
                <option value = "-">-</option>
                <option value = "/">/</option>
                <option value = "*">*</option>

            </select>

            <input type = "submit" value = "Enviar!">

        </form>

        <?php

        //Crie um script PHP que receba dois números (num1 e num2) e uma operação (+, -, *, /) de um formulário.

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $operacao = $_POST['operacao'];

                try{
                    if (($num2 == 0) && ($operacao == '/')){
                        throw new Exception('Divisão por zero não é possível.');
                    }

                    if (!in_array($operacao,['+','-','*','/'])){
                        throw new Exception('Operação Inválida!');
                    }

                    switch ($operacao) {

                        case '+': $resultado = $num1 + $num2; break;
                        case '-': $resultado = $num1-$num2; break;
                        case '/': $resultado = $num1 / $num2; break;
                        case '*': $resultado = $num1 * $num2; break;
                    }

                    echo('Resultado da operação utilizando os dois números: ' . number_format($resultado));


                } catch(Exception $e){
                    echo('Erro ao realizar a operação: ' . $e->getMessage());
                }

            }

        ?>

</body>


</html>