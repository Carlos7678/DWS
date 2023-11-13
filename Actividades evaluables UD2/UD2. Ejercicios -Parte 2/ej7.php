<?php
$numeros = [1, 2, 3, 4, -5, 6, 7, 8, 9, 10, 0, -9];
$totalPositivos = 0;
$totalNegativos = 0;
$contadorPositivos = 0;
$contadorNegativos = 0;
$contadorCeros = 0;

for ($i = 0; $i < count($numeros); $i++) {
    if ($numeros[$i] > 0) {
        $totalPositivos += $numeros[$i];
        $contadorPositivos++;
    } elseif ($numeros[$i] < 0) {
        $totalNegativos += $numeros[$i];
        $contadorNegativos++;
    } else {
        $contadorCeros++;
    }
}

$mediaPositivos = $contadorPositivos > 0 ? $totalPositivos / $contadorPositivos : 0;
$mediaNegativos = $contadorNegativos > 0 ? $totalNegativos / $contadorNegativos : 0;

echo "La media de positivos es " . $mediaPositivos;
echo "<br>La media de negativos es " . $mediaNegativos;
echo "<br>Habia/n " . $contadorCeros . " cero/s";
?>
