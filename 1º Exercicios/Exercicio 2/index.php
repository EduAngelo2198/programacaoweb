<!DOCTYPE html>
<html lang="pt">
    <head>

        <meta charset="UTF-8">
    
        <title>Exercnum1cnum1os</title>

    </head>
    <body>

        <p>Exercicio 2:<br>Crie um algoritmo exiba a tabuada de 0 a 10 de acordo com o número registrado, ex: 4 Saída = 4 X 0 = 0...4 X 10 = 40.</p>

        <?php

            for($num1=1; $num1<=10; $num1++){
            
            echo "Tabuada: " . $num1;

            echo nl2br("\n");

            for($num2=1; $num2<=10; $num2++){

                echo $num1 . "x" . $num2 . " = " . ($num1 * $num2);
                echo nl2br("\n");

            }

            echo nl2br("\n");

        }

        ?>

    </body>
</html>