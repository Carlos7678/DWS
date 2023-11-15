<?php
$edades = [10, 12, 13, 20, 19];
$altura = [120, 122, 130, 190, 185];
$mediaAltura = 0;
$mediaEdad = 0;
$mayor18 = 0;
$mayor175 = 0;

for ($i = 0; $i < count($edades); $i++) {
    if ($edades[$i] > 18) {
        $mayor18++;
    }

    if ($altura[$i] > 175) {
        $mayor175++;
    }

    $mediaAltura += $altura[$i];
    $mediaEdad += $edades[$i];
}

$mediaAltura /= count($altura);
$mediaEdad /= count($edades);

echo "Media edad = " . $mediaEdad . " años <br>";
echo "Media altura = " . $mediaAltura . " cm  <br>";
echo "Niños con edad mayor de 18 = " . $mayor18 . "<br>";
echo "Niños con altura mayor a 175 = " . $mayor175 ;
?>
