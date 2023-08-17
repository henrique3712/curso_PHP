<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CURSO PHP FUNDAMENTAL</title>
    </head>
    <body>
        <?php 
            $_dia = "Sábado";
            switch ($_dia) {
                case "Segunda":
                    echo "Hoje é Segunda.";
                    break;
                
                case "Terça":
                    echo "Hoje é Terça.";
                    break;
                
                case "Quarta":
                    echo "Hoje é Quarta.";
                    break;
                
                case "Quinta":
                    echo "Hoje é Quinta.";
                    break;
                    
                case "Sexta":
                    echo "Hoje é Sexta.";
                    break;
                    
                default:
                    echo "É final de semana!";                
            }       
        ?>
    </body>
</html>