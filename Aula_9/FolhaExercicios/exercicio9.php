<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 9</title>
</head>
<body>
    
    <form action="" method="POST">
        <label>Escolha o número de parcelas:</label>
        <select name="parcelas" required>
            <option value="24">24 vezes</option>
            <option value="36">36 vezes</option>
            <option value="48">48 vezes</option>
            <option value="60">60 vezes</option>
        </select>
        <br><br>
        <button type="submit">Calcular</button>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            require_once 'funcoes_exercicio9.php';
            $parcelas = $_POST['parcelas'];
            $valor_vista = 8654.00;
            
            $valor_parcela = calcularParcelasCompostos($parcelas, $valor_vista);
            imprimirResultado($parcelas, $valor_parcela);
        }
    ?>
</body>
</html>