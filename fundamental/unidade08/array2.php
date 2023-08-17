<?php
    $_megasena = array(47, 29, 42, 04, 27, 21);

    // Mostrar os números na ordem crescente
    sort($_megasena);

    // Mostrar os números na ordem decrescente
    rsort($_megasena);
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            // Retorna o menor valor do array 
            echo min($_megasena) . "<br>";

            // Retorna o maior valor do array
            echo max($_megasena) . "<br>";
        ?>

        <pre>
        <?php 
            print_r ($_megasena);
        ?>
        </pre>
    </body>
</html>