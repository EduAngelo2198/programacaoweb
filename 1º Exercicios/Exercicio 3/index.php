<!DOCTYPE html>
<html lang="pt">
    <head>

        <meta charset="UTF-8">
    
        <title>Exercnum1cnum1os</title>

    </head>
    <body>

        <p>Exercicio 3:<br>Crie um algoritmo que faça o cálculo fatorial de um número, exiba o resultado na tela. Ex: Entrada = 3 Processamento: (3 * 2) * 1 Saída: 6</p>

        <?php

            $num = 6;

            echo "Fatorial de " . $num;

            for($fat = $num - 1; $fat > 0; $fat--){

                $num = $num * $fat;

            }

            echo " é igual a: " . $num;
            
        ?>

    </body>
</html>