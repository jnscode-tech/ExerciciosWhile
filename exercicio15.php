<?php

/* 15 - Crie um programa que calcule o resultado de 3 elevado à 4 usando um laço while. 
O programa deve multiplicar o número 3 por ele mesmo repetidas vezes até completar as 4 multiplicações, 
simulando o cálculo da potência.*/

$base = 3;
$expoente = 4;
$contador = 1;
$resultado = 1;  

echo "<strong>Resultado de 3 elevado a 4</strong>"."<br>"."<br>";

while($contador <= $expoente){
    $resultado *= $base; // multiplica o resultado pela base
    $contador++;         // incrementa o contador
}

echo "O 3 elevado a 4 é: " . $resultado;

 
?>