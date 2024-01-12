<?php
session_start();

if (!isset($_SESSION['hora_entrada'])) {
    $_SESSION['hora_entrada'] = time();
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 1</title>
</head>
<body>
    <h1>Bienvenido a la Página 1</h1>
    
    <a href="ej 10 salir.php">Salir</a>
</body>
</html>
