<?php

// 6 - Crie um programa que use while para mostrar todos os números que são múltiplos de 3 no intervalo de 1 a 30. Apenas os números divisíveis por 3 devem ser exibidos.


$contador=0;

echo "<strong>Múltiplos de 3 de 01 a 30 </strong>"."<br>"."<br>";

while($contador <=30){
    
    if($contador % 3 == 0){

        echo "".$contador."<br>";
     
    }
    $contador++;


}



 
?>