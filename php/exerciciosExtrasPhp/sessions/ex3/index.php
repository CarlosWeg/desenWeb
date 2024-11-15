<?php

    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        array_push($_SESSION['carrinho'],$_POST['produto']);
    }

    if (isset($_SESSION['carrinho'])){

        echo 'Itens no carrinho: <br>';

        foreach ($_SESSION['carrinho'] as $produto){
            echo $produto . '<br>';
        }
    } else{
        $_SESSION['carrinho'] = array();
    }


?>
<!DOCTYPE HTML>
<html lang = "pt-BR">

<head> 
    <meta charset = "UTF-8">
    <title>Exercicio</title>
</head>

<body>

    <form method = "POST">


        <label for = "produto">Insira o produto que você gostaria de adicionar ao carrinho:</label>
        <input type = "text" name = "produto">
        
        <input type = "submit" value = "adicionar">

        <a href = "limpar.php">Limpar carrinho</a>

    </form>


</body>


</html>