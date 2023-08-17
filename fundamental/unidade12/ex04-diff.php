<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            $_data1 = new DateTime("2024-01-01");
            $_data2 = new DateTime("2023-08-16");
            $_intervalo = $_data1->diff($_data2);
        ?>
        <pre>
            <?php 
                print_r($_intervalo);
            ?>
        </pre>

        
        <?php 
            print_r("Ano: "         . $_intervalo->format("%y") . "<br>");
            print_r("Mês: "         . $_intervalo->format("%m") . "<br>");
            print_r("Dia: "         . $_intervalo->format("%d") . "<br>");
            print_r("Intervalo: "   . $_intervalo->format("%a") . "<br>");

            // Se data1 maior que data2 o valor será exibido com sinal de "-"
            print_r("Intervalo Negativo: " . $_intervalo->format("%r%a") . "<br>");
        ?>
        
    </body>
</html>