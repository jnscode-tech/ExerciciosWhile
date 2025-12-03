<?php

// 4 - Crie um programa que utilize while para somar todos os números de 1 até 100. Durante o laço, o programa deve acumular o valor total em uma variável e ao final exibir o resultado.


$contador=0;

echo "<strong>Soma de 1 a 100 </strong>"."<br>"."<br>";

while($contador<=100){

    //$resultado = $resultado + $contador; Mesma a coisa da linha debaixo
   
    $resultado +=$contador;

    $contador++;
}

echo "<strong> Resultado da soma dos 100 primeiros números: </strong> ".$resultado."<br>";

 
?>