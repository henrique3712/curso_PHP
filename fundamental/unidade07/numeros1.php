<?php 
    $_salario = 1100;
    $_meses   = 3;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            // Multiplicacao e Divisao
            echo $_salario * $_meses . "<br>";
            echo $_salario / 2 . "<br>";

            // Exponencial
            echo "Exponencial: " . pow(6,2) . "<br>";

            // Raiz Quadrada
            echo "Raiz quadrada: " . sqrt(36) . "<br>";

            // Números Randômico
            echo "Números randômico: " . rand() .  "<br>";

            // Randômico entre intervalos
            echo "Randômico intervalo: " . rand(5,10) .  "<br>";
            
            // Valor absoluto
            echo "Número absoluto: " . abs(-50);
        ?>
    </body>
</html>