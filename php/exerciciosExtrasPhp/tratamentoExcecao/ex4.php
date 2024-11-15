<!DOCTYPE html>
<html lang = "pt-BR">
<head>

    <meta charset = "UTF-8">
    <title>Exercicio</title>

</head>

<body>

    <form action = "" method = "POST">

        <label for = "senha">Insira a senha:</label>
        <input type = "password" name = "senha" required>

        <input type = "submit" value = "Enviar">

    </form>

    <?php

    // Validação de Senha
    
    // Crie um formulário onde o usuário insira uma senha. O código deve validar os seguintes critérios:

    // A senha deve ter pelo menos 8 caracteres.
    // Deve conter pelo menos um número.
    // Deve conter pelo menos uma letra maiúscula.

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $senha = $_POST['senha'];

            try{
                if (strlen($senha)<8){
                    throw new Exception('A senha deve ter pelo menos 8 caracteres.');
                }

                if (!preg_match('/[A-Z]/', $senha)) {
                    throw new Exception('A senha não contém letra maiúscula');
                }

                if (!preg_match('/[0-9]/', $senha)) {
                    throw new Exception('A senha não contém número(s)');
                }

                echo('Senha válida!');

            }   catch(Exception $e){
            echo ('Erro durante a validação de senha:' . $e->getMessage());
            }

        }

    ?>

</body>