<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Ver Hoteles</title>
    <link rel="stylesheet" href="css/verHoteles.css" />
</head>

<body>
    <h1 class="titulo">Listado de hoteles en HOTELAND.COM</h1>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Estrellas</th>
            <th>Habitaciones</th>
            <th>Ciudad</th>
            <th>Dirección</th>
        </tr>
        <?php
        function estrellasEmoticonos($numeroEstrellas)
        {
            $emoticono = "⭐";
            return str_repeat($emoticono, $numeroEstrellas);
        }

        $file = fopen("hoteles.csv", "r");
        while (($line = fgetcsv($file)) !== false) {
            echo "<tr>";
            foreach ($line as $key => $cell) {
                if ($key === 1) {
                    echo "<td>" . estrellasEmoticonos((int)$cell) . "</td>";
                } else {
                    echo "<td>" . htmlspecialchars($cell) . "</td>";
                }
            }
            echo "</tr>";
        }
        fclose($file);
        ?>
    </table>
    <div class="enlaces-container">
        <a href="index.html" class="volver-inicio">Volver al Inicio</a>
        <a href="restaurarBD.php" class="restaurar-bd-button">Restaurar BD</a>
        <a href="añadirHoteles.html" class="anadir-hoteles-link">Añadir Hoteles</a>
        <a href="borrarHoteles.html" class="borrar-hoteles-button">Borrar Hoteles</a>
        <a href="modificarHoteles.html" class="modificar-hoteles-button">Modificar Hoteles</a>
</body>

</html>