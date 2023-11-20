<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7 - Resultado</title>
</head>
<body>
    <h1>Resultado del Formulario</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<p>Nombre: " . $_POST["fname"] . "</p>";
        echo "<p>Sexo: " . (isset($_POST["operacion"]) ? $_POST["operacion"] : "No especificado") . "</p>";
        echo "<p>Edad: " . $_POST["edad"] . "</p>";
        echo "<p>Peso: " . $_POST["peso"] . " kg</p>";
        echo "<p>Estado Civil: " . (isset($_POST["EstadoCivil"]) ? $_POST["EstadoCivil"] : "No especificado") . "</p>";

        echo "<p>Aficiones:</p>";
        if (isset($_POST["aficion1"])) echo "<p>- Cine</p>";
        if (isset($_POST["aficion2"])) echo "<p>- Literatura</p>";
        if (isset($_POST["aficion3"])) echo "<p>- Tebeos</p>";
        if (isset($_POST["aficion4"])) echo "<p>- Deporte</p>";
        if (isset($_POST["aficion5"])) echo "<p>- Música</p>";
        if (isset($_POST["aficion6"])) echo "<p>- Televisión</p>";
    }
    ?>
</body>
</html>
