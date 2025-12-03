
<?php

/* 11 - Crie um programa usando while em que o contador começa representando o código da letra A (65 na tabela ASCII).
 A cada repetição, o código deve ser convertido para letra e exibido, até chegar à letra J. */

$contador = 65;


echo"<strong> Exibir de A a J - Tabela ASCII </strong>"."<br>"."<br>";

echo "Decimal "."|"." Tabela ASCII "."<br>";

while($contador <= 74){
        echo " "."$contador"."   |    ".chr($contador)."<br>";
           $contador++;

     }
  
?>

