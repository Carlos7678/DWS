<?php
$limite=100;
$numAleatorio=rand(1, $limite);
 
echo "Numero aleatorio = ".$numAleatorio;
echo "<br>";
echo $numAleatorio %2==0 ?"El numero es par.":"El numero es impar";
?>