<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/añadirHoteles.css">
    <title>Añadir Hotel</title>
</head>
<body>
    <h1 class="titulo">Añadir Hoteles en HOTELAND.COM</h1>

    <?php
    // Conexión a la base de datos (actualiza los valores según tu configuración)
    $servername = "localhost";
    $username = "Carlos";
    $password = "Adminbd15";
    $dbname = "hotelesbd";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("La conexión a la base de datos falló: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Procesar datos del formulario
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
        $estrellas = isset($_POST['estrellas']) ? $_POST['estrellas'] : 0; // Valor predeterminado
        $habitaciones = isset($_POST['habitaciones']) ? $_POST['habitaciones'] : 0; // Valor predeterminado
        $ciudad = isset($_POST['ciudad']) ? $_POST['ciudad'] : '';
        $direccion = isset($_POST['direccion']) ? $_POST['direccion'] : '';

        // Consulta SQL para insertar los datos en la base de datos
        $sql = "INSERT INTO hoteles (Nombre, Estrellas, Habitaciones, Poblacion, Direccion) 
                VALUES ('$nombre', $estrellas, $habitaciones, '$ciudad', '$direccion')";

        if ($conn->query($sql) === TRUE) {
            $conn->close();
            // Redirigir a añadirHoteles.php directamente
            header('Location: añadirHoteles.php?success=true');
            exit(); // Añade esta línea para asegurar que se detenga la ejecución después de la redirección
        } else {
            echo "Error al añadir el hotel: " . $conn->error;
        }
    }
    $conn->close();
    ?>

    <form action="añadirHoteles.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="estrellas">Estrellas:</label>
        <input type="number" id="estrellas" name="estrellas" min="0" max="5" required>

        <label for="habitaciones">Habitaciones:</label>
        <input type="number" id="habitaciones" name="habitaciones" min="0" required>

        <label for="ciudad">Ciudad:</label>
        <input type="text" id="ciudad" name="ciudad" required>

        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" required>

        <button type="submit">Añadir Hotel</button>
    </form>

    <br><br>
    <div id="mensajeExitoContainer" class="enlaces-container">
        <a href="index.html" class="volver-inicio">Volver al Inicio</a>
        <span class="button-space"></span> 
        <a href="verHoteles.php" class="ver-hoteles-link">Ver Hoteles</a>
        <span class="button-space"></span> 
        <a href="restaurarBD.php" class="restaurar-bd-button">Restaurar BD</a>
        <span class="button-space"></span> 
        <a href="borrarHoteles.php" class="borrar-hoteles-button">Borrar Hoteles</a>
        <span class="button-space"></span> 
        <a href="modificarHoteles.php" class="modificar-hoteles-button">Modificar Hoteles</a>
    </div>

    <script>

        function updateSuccessMessage() {
            var urlParams = new URLSearchParams(window.location.search);
            var successParam = urlParams.get('success');
            var mensajeExitoContainer = document.getElementById('mensajeExitoContainer');

            if (successParam === 'true') {
                mensajeExitoContainer.innerHTML = '<p class="mensaje-exito">Hotel añadido correctamente</p>';
            }
        }


        window.onload = function() {
            showSuccessMessage();
            updateSuccessMessage();
        };
    </script>
</body>
</html>
