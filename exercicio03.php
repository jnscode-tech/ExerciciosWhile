<?php

//3 - Desenvolva um programa que, usando um laço while, exiba a tabuada completa do número 5, indo do multiplicador 1 até o multiplicador 10. 


$tabuada=5;
$contador=0;

echo "<strong>A TABUADA DO 5 </strong>"."<br>"."<br>";

while($contador<=10){
    //$soma = $soma + $contador; Mesma a coisa da linha debaixo
    $resultado =$tabuada * $contador;


    echo "5 X ".$contador."= ".$resultado. "<br>";
    $contador++;
}



 
?>