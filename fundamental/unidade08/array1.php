<?php 
    $_salada = array("Maçã", "Abacaxi", "Laranja");
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            echo $_salada[0] . "<br>";
            echo $_salada[1] . "<br>";
            echo $_salada[2] . "<br>";
            $_salada[] = "Abacate";
            $_salada[] = "Morango";

            echo $_salada[3] . "<br>";
            echo $_salada[4] . "<br>";

            echo count($_salada) . "<br>";
        ?>

        <pre>
        <?php 
            print_r($_salada)
        ?>
        </pre>
    </body>
</html>