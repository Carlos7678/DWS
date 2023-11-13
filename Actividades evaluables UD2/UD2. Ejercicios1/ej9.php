<?php
$precio = 25.5;
$unidades = 65;
define("iva", 0.21);

echo "Precio del producto = " . $precio . "€<br>";
echo "Unidades adquiridas = " . $unidades . "<br>";

$importeBase = $precio * $unidades;
echo "Importe base de la factura = " . $importeBase . "€<br>";

$importeIva = $importeBase * iva; 
echo "Importe del IVA = " . $importeIva . "€<br>";

$importeTotal = $importeBase + $importeIva;
echo "Importe total = " . $importeTotal . "€<br>";
?>
