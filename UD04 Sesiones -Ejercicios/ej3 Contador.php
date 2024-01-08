<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Visitas</title>
</head>
<body>
    <h1>Bienvenido a la Página</h1>

    <?php
    function contarVisitas() {
        $cookie_name = "visitas";
        $cookie_value = 1;

        if(isset($_COOKIE[$cookie_name])) {
            $cookie_value = $_COOKIE[$cookie_name] + 1;
        }
        setcookie($cookie_name, $cookie_value, time() + (365 * 24 * 60 * 60), "/");
    }

    contarVisitas();

    if(isset($_COOKIE["visitas"])) {
        echo "<hr><h2>Has visitado esta página " . $_COOKIE["visitas"] . " veces.</h2>";
    } else {
        echo "<hr><h2>Primera visita. Bienvenido.</h2>";
    }
    ?>

    <h3>Refresca la página para actualizar el contador.</h3>
</body>
</html>