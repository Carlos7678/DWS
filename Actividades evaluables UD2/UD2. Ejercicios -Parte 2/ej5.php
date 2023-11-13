<?php
$numeros = [1, -2, 3, -4, -5, 6, 7, -8, -9, 10, 0,9];
$indice = 0;

while ( $numeros[$indice] != 0) {
    if ($numeros[$indice] > 0) {
        echo $numeros[$indice] . " es positivo<br>";
    } else {
        echo $numeros[$indice] . " es negativo<br>";
    }
    
    $indice++;
}
?>
