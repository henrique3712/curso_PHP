<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            // Determinar timezone
            date_default_timezone_set("Brazil/East");
            $_agora = getdate();
            
            // Criar elementos
            $_segundo   = $_agora["seconds"];
            $_minuto    = $_agora["minutes"];
            $_hora      = $_agora["hours"];

            $_dia       = $_agora["mday"];
            $_mes       = $_agora["mon"];
            $_ano       = $_agora["year"];

            // Mostrar na tela
            echo $_hora . ":" . $_minuto . ":" . $_segundo . " - " . $_dia . "/" . $_mes . "/" . $_ano;
            
        ?>
    </body>
</html>