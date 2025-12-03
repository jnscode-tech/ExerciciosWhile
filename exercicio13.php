<?php
/* 13 - Faça um programa que inicie o contador em 2 e, usando while, exiba os números: 2, 4, 6, 8... até chegar ao número 20. 
O contador deve ser incrementado de 2 em 2. */
   
$contador = 0;

echo "<strong> Números pares até o 20 pulando de 2 em 2. </strong>"."<br>"."<br>";

while($contador <=20){

      if($contador %2 == 0)
      {
          echo $contador."<br>";
          $contador += 2;
           
      }

} 
    

?>
