<?php
session_start();

if (isset($_SESSION['hora_entrada'])) {
    $hora_salida = time();
    $tiempo_transcurrido = $hora_salida - $_SESSION['hora_entrada'];
    $tiempo_transcurrido_formateado = date("i:s", $tiempo_transcurrido);
    echo "<h1>Has estado en la página durante: $tiempo_transcurrido_formateado</h1>";
    session_destroy();
} else {
    header("Location: ej 10 tiempo.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 2</title>
</head>
<body>
</body><br>
<a href="ej 10 tiempo.php">Volver</a>
</html>