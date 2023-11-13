<?php
$salario=2560;

 
echo "salario = ".$salario;
echo "<br>";

if ($salario<800) {
    $incremento=$salario*0.2;
    $salario+=$incremento;
    echo "Salario incrementado un 20% <br>";
} elseif ($salario>1200) {
    echo "Salario disminuido un 15% <br>";
    $decremento=$salario*15/100;
    $salario-=$decremento;
}
echo "El salario ha pasado a ser ".$salario;
?>