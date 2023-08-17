<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>        
        <?php
            $_nome = isset($_POST["nome"]) ? $_POST["nome"] : "Sem definição";

            $_email = isset($_POST["email"]) ? $_POST["email"] : "Sem definição";

            echo "nome: " . $_nome . "<br>";
            echo "email: " . $_email;
        ?>
    </body>
</html>