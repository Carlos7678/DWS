<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];
    if ($usuario === 'admin' && $clave === 'secretito') {
        $_SESSION['usuario'] = $usuario;
    } else {
        echo "Acceso denegado. Credenciales incorrectas.";
        exit;
    }
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Información del Usuario</title>
</head>
<body>
    <h1>Información del Usuario</h1>
    
    <?php
    if (isset($_SESSION['usuario'])) {
        if ($_SESSION['usuario'] === 'admin') {
            echo "¡Bienvenido, Lider! Esta es la información del usuario.";
        } else {
            echo "Acceso denegado. No tienes permiso para acceder al panel de administración.";
        }
    } else {
        echo "Acceso denegado. Por favor, inicia sesión primero.";
    }
    ?>
</body>
</html>
