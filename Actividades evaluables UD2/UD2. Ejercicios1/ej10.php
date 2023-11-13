<?php
$codigo = 1;
$nombre = "Tom";
$apellidos = "Smith";
$puesto = "Vendedor";
$sueldo = 75000;
$edad = 26;
$num_hijos = 0;
$sucursal = "New York";


echo "Sueldo inicial = " . $sueldo . "€";

$retencion = 0;

// Retencion 1
if ($puesto == "Vendedor" && $sueldo > 70000) {
    $retencion += $sueldo * 0.1;
} else {
    $retencion += $sueldo * 0.2;
}

// Retencion 2
if ($edad > 50 || $num_hijos > 2) {
    $retencion += $sueldo * 0.05;
} else {
    $retencion += $sueldo * 0.1;
}

// Retencion 3
if ($sueldo > 50000 && $sueldo < 80000) {
    $retencion += $sueldo * 0.05;
} else {
    $retencion += $sueldo * 0.12;
}

// Retencion 4
if ($num_hijos == 1 || $num_hijos == 2) {
    $retencion += $sueldo * 0.1;
} else {
    $retencion += $sueldo * 0.05;
}

// Retencion 5
if ($sueldo > 80000 || $num_hijos == 0) {
    $retencion += $sueldo * 0.15;
} else {
    $retencion += $sueldo * 0.05;
}

$sueldo_final = $sueldo - $retencion;
echo "<br>Sueldo final = " . $sueldo_final . "€";
?>
