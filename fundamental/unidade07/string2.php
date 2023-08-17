<?php 
    $_nome = "Curso PHP Fundamental";
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        <?php

            // strlen - Retorna a quantidade de letras.
            echo strlen($_nome) . "<br>";
            
            // stripos  - Retorna a posição da primeira ocorrência da letra.
            echo stripos($_nome, "P") . "<br>";  

            // strripos - Retorna a posição última ocorrência da letra.
            echo strripos($_nome, "P") . "<br>";  
            
            // strtolower - converte para letras minúsculas.
            echo strtolower($_nome) . "<br>";

            // strtoupper - converte para letras maiúsculas.
            echo strtoupper($_nome) . "<br>";
        

            // SUBSTR_COUNT - Conta quantas ocorreram
            // de um texto ou string
            // Faz diferença Maiúsculas e minúsculas.
            echo SUBSTR_COUNT($_nome, "P") . "<br>";
        
        ?>       
        
    </body>
</html>