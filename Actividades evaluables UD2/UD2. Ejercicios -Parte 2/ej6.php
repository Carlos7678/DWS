<?php
$numeros = [1, 2, 3, 4, -5, 6, 7, 8, 9, 10, 0, -9];
$total = 0;
$contador = 0;

for ($i = 0; $i < count($numeros) && $numeros[$i] >= 0; $i++) {
    $total += $numeros[$i];
    $contador++;
}

$media = $total / $contador;
echo "La media es " . $media;
?>
