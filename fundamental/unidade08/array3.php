<?php
    $_salada = array("Laranja", "Uva", "Abacate");
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            // Verifica se existe o item dentro do array 
            echo "Existe um elemento? " . in_array("Laranja", $_salada) . "<br>";

            // Retorna a posição do item dentro do array
            echo "Existe um elemento? " . array_search("Abacate", $_salada) . "<br>";
        ?>
    </body>
</html>