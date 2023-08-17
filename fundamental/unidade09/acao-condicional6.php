<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CURSO PHP FUNDAMENTAL</title>
    </head>
    <body>
        <?php
            // Maior que: >
            // Menor que: <
            // Maior ou igual: >=
            // Menor ou igual: <=
            // Diferente: <>
            
            // "e" Lógico: &&
            // "ou" Lógico: ||
        
            $_idade = 18;
            $_sexo = "Feminino";

            if ($_idade >= 18 && $_sexo == "Feminino") {
                echo "Pode entrar na festa.";
            } else {
                echo "Não pode entrar na festa.";
            }
        ?>
    </body>
</html>