<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício</title>
</head>
<body>
    <form action="" method="POST">
        <label for="nome">Insira o nome:</label> 
        <input type="text" name="nome" required>

        <label for="email">Insira o e-mail:</label>
        <input type="email" name="email" required>

        <label for="idade">Insira a idade:</label>
        <input type="number" name="idade" required>

        <input type="submit" value="Enviar">
    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $idade = $_POST['idade'];

        try{

            if(strlen($nome) < 3){
                throw new Exception('Nome com menos de 3 caracteres.');
            }

            if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
            throw new Exception('Erro no formato do e-mail.');
            }

            if ($idade<0){
                throw new Exception('Erro na idade: Menor que zero');
            }
        } catch(Exception $e){
            echo ('Erro na validação dos dados. ' . $e->getMessage());
            }
    }

    ?>
</body>
</html>