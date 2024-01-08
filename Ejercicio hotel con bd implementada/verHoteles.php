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
            <th>ID</th>
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

        // Conectar a la base de datos
        $conn = new mysqli("localhost", "Carlos", "Adminbd15", "hotelesbd");

        // Verificar la conexión
        if ($conn->connect_error) {
            die("Error de conexión: " . $conn->connect_error);
        }

        // Consultar la tabla de hoteles con filtro
        $query = "SELECT * FROM hoteles WHERE Habitaciones > 0 AND Estrellas > 0 AND Nombre IS NOT NULL AND Poblacion IS NOT NULL AND Direccion IS NOT NULL";
        $result = $conn->query($query);

        // Mostrar los resultados en la tabla
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['id']) . "</td>";
            echo "<td>" . htmlspecialchars($row['Nombre']) . "</td>";
            echo "<td>" . estrellasEmoticonos($row['Estrellas']) . "</td>";
            echo "<td>" . htmlspecialchars($row['Habitaciones']) . "</td>";
            echo "<td>" . htmlspecialchars($row['Poblacion']) . "</td>";
            echo "<td>" . htmlspecialchars($row['Direccion']) . "</td>";
            echo "</tr>";
        }

        // Cerrar la conexión
        $conn->close();
        ?>
    </table>
    <div class="enlaces-container">
        <a href="index.html" class="volver-inicio">Volver al Inicio</a>
        <a href="restaurarBD.php" class="restaurar-bd-button">Restaurar BD</a>
        <a href="añadirHoteles.php" class="anadir-hoteles-link">Añadir Hoteles</a>
        <a href="borrarHoteles.php" class="borrar-hoteles-button">Borrar Hoteles</a>
        <a href="modificarHoteles.php" class="modificar-hoteles-button">Modificar Hoteles</a>
    </div>
</body>

</html>