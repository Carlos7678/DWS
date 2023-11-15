<?php
$facturas = [
    ['Codigo'=>456, 'cantL'=>500, 'precioL'=>2.5],
    ['Codigo'=>698, 'cantL'=>300, 'precioL'=>5.3],
    ['Codigo'=>745, 'cantL'=>250, 'precioL'=>3.5],
    ['Codigo'=>784, 'cantL'=>1000, 'precioL'=>9],
    ['Codigo'=>10, 'cantL'=>478, 'precioL'=>7],
];

$FacturasMayor600 = 0;
$FacturacionTotal = 0;
$cantidadLitrosArticulo1 = 0;

foreach($facturas as $factura) {
    if($factura['cantL'] * $factura['precioL'] > 600) {
        $FacturasMayor600++;
    }

    if ($factura["Codigo"] == 10) { // Cambiado a 10 porque en tu array el código 1 es 10
        $cantidadLitrosArticulo1 += $factura["cantL"];
    }

    $FacturacionTotal += $factura['cantL'] * $factura['precioL'];
}

echo "Facturacion total = " . $FacturacionTotal . "€";
echo "<br>Cantidad vendida del articulo 1 = " . $cantidadLitrosArticulo1 . "L";
echo "<br> Facturas emitidas de más de 600 euros = " . $FacturasMayor600;
?>
