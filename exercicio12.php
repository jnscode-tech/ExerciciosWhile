<?php
/* 12 - Desenvolva um programa que utilize while para somar apenas os números pares no intervalo de 1 a 20. 
No final, o programa deve mostrar o valor total da soma. */
   
$contador = 1;

echo"<strong>Soma dos pares no intervalo de 01 a 20. </strong>"."<br>"."<br>";

while($contador <=20){

      if($contador %2 == 0){
            $resultado +=$contador; 
 
      }
          $contador++;

} 
     echo $resultado;


?>
