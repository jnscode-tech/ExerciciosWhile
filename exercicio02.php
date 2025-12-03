<?php

// 2 - Faça um programa que use while para mostrar somente os números pares no intervalo de 1 a 20. O programa deve verificar, dentro do laço, se o número atual é par antes de exibi-lo. 


$contador = 0;

echo"<strong>Números pares no intervalo de 01 a 20. </strong>"."<br>"."<br>";

while($contador <=20){
    
    if($contador % 2 == 0){

        echo "".$contador."<br>";
     
    }
    $contador++;



}

 
?>