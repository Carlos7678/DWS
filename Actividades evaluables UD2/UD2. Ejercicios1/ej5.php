<?php
$num1=7;
$num2=17;
 
echo "num1 = ".$num1;
echo "<br>";
echo "num2 = ".$num2;
echo "<br>";

if ($num1 > $num2) {
    echo "El numero mayor es ".$num1 ;
  } elseif ($num2 > $num1) {
    echo "El numero mayor es ".$num2 ;
  } else {
    echo "No hay numero mayor";
  }
?>