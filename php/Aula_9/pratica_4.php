<?php

function calcularValorComDesconto($valor, $desconto) {
    if (!is_numeric($valor) || !is_numeric($desconto)) {
        throw new Exception("Os parâmetros devem ser numéricos.");
    }
    
    if ($valor < 0 || $desconto < 0) {
        throw new Exception("O valor e o desconto devem ser maiores que zero.");
    }

    if ($desconto > 100) {
        throw new Exception("O desconto não pode ser maior que 100%.");
    }

    $valorFinal = $valor - ($valor * ($desconto / 100));
    return $valorFinal;
}

try {
    // Verifica se os parâmetros foram passados via Query String
    if (isset($_REQUEST['valor']) && isset($_REQUEST['desconto'])) {
        $valor = $_REQUEST['valor'];
        $desconto = $_REQUEST['desconto'];

        // Chama a função para calcular o valor final com desconto
        $valorFinal = calcularValorComDesconto($valor, $desconto);

        // Exibe o valor final calculado
        echo "Valor original: R$ $valor<br>";
        echo "Desconto: $desconto%<br>";
        echo "Valor final com desconto: R$ $valorFinal<br>";
    } else {
        throw new Exception("Parâmetros 'valor' e 'desconto' são obrigatórios.");
    }
} catch (Exception $e) {
    // Tratamento de erro e exibição da mensagem de exceção
    echo "Erro: " . $e->getMessage();
}

?>