<!DOCTYPE html>
<html lang="pt">
    <head>

        <meta charset="UTF-8">
    
        <title>Exercicios</title>

    </head>
    <body>

        <p>Exercicio 1:<br>Crie um algoritmo que verifique se um número é positivo, negativo ou igual a zero. A saída deve ser: "Valor Positivo", "Valor Negativo" ou "Igual a Zero".</p>

        
            <?php
                //Entre com o número
                $num = 123
            ?>

            <p><?php 
            
                if($num < 0) //abrir 1º if (verificar se é negativo)
                {
            ?>

                   <p>Número negativo</p>

            <?php        
                }//fechar 1º if

                else if($num > 0){ //abrir 2º if (verificar se é positivo)
            ?>

                    <p>Numero positivo</p>

            <?php
                }//fechar 2º if

                else{ //verificar se é igual a 0
            ?>     

                <p>Valor = 0</p>
                
            <?php
                }
            
            ?>

    </body>
</html>