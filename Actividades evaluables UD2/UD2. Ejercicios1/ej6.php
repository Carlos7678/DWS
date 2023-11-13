<?php
$num1=7;
$num2=17;
 
echo "num1 = ".$num1;
echo "<br>";
echo "num2 = ".$num2;
echo "<br>";

$resultadoComparacion = $num1 <=> $num2;

if ($resultadoComparacion == 0) {
    echo "num1 es igual que num2";
} elseif ($resultadoComparacion == -1) {
    echo "num1 es menor que num2";
} elseif ($resultadoComparacion == 1) {
    echo "num1 es mayor que num2";
}
?>