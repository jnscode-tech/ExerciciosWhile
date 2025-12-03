
<?php

/* 8 - Crie um programa que utilize while para exibir todos os números ímpares no intervalo de 1 a 15. 
O programa deve verificar se o número atual é ímpar antes de mostrá-lo. */

$contador = 0;

echo"<strong> Números ímpares no intervalo de 01 a 15. </strong>"."<br>"."<br>";

while($contador <=15){
     if($contador%3==0){
         echo "Número ímpar".":". $contador."<br>";

     }

    $contador++;
}


 
?>