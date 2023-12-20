<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/modificarHoteles.css">
    <title>Modificar Hotel</title>
</head>
<body>
    <h1 class="titulo">Modificar Hotel en HOTELAND.COM</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Procesar el formulario
        $idHotel = isset($_POST['idHotel']) ? $_POST['idHotel'] : '';

        // Conexión a la base de datos (actualiza los valores según tu configuración)
        $servername = "localhost";
        $username = "Carlos";
        $password = "Adminbd15";
        $dbname = "hotelesbd";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("La conexión a la base de datos falló: " . $conn->connect_error);
        }

        // Consulta SQL para obtener la información actual del hotel por ID
        $selectSql = "SELECT * FROM hoteles WHERE ID = $idHotel";
        $result = $conn->query($selectSql);

        if ($result->num_rows > 0) {
            $hotel = $result->fetch_assoc();

            // Mostrar formulario de modificación
            ?>
            <form action="modificarHoteles.php" method="post" onsubmit="return confirm('¿Seguro que deseas modificar el hotel?');">
                <input type="hidden" name="idHotel" value="<?php echo $idHotel; ?>">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" value="<?php echo $hotel['Nombre']; ?>" required>

                <label for="estrellas">Estrellas:</label>
                <input type="number" id="estrellas" name="estrellas" min="1" max="5" value="<?php echo $hotel['Estrellas']; ?>" required>

                <label for="habitaciones">Habitaciones:</label>
                <input type="number" id="habitaciones" name="habitaciones" min="1" value="<?php echo $hotel['Habitaciones']; ?>" required>

                <label for="ciudad">Ciudad:</label>
                <input type="text" id="ciudad" name="ciudad" value="<?php echo $hotel['Poblacion']; ?>" required>

                <label for="direccion">Dirección:</label>
                <input type="text" id="direccion" name="direccion" value="<?php echo $hotel['Direccion']; ?>" required>

                <button type="submit">Modificar Hotel</button>
            </form>
            <?php

            // Procesar la actualización
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Procesar el formulario de modificación
                $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
                $estrellas = isset($_POST['estrellas']) ? $_POST['estrellas'] : '';
                $habitaciones = isset($_POST['habitaciones']) ? $_POST['habitaciones'] : '';
                $ciudad = isset($_POST['ciudad']) ? $_POST['ciudad'] : '';
                $direccion = isset($_POST['direccion']) ? $_POST['direccion'] : '';

                // Sentencia preparada para actualizar la información del hotel
                $updateSql = "UPDATE hoteles SET Nombre = ?, Estrellas = ?, Habitaciones = ?, Poblacion = ?, Direccion = ? WHERE ID = ?";

                $stmt = $conn->prepare($updateSql);
                $stmt->bind_param("siissi", $nombre, $estrellas, $habitaciones, $ciudad, $direccion, $idHotel);

                if ($stmt->execute()) {
                    // Aquí podrías redirigir al usuario a otra página o realizar otras acciones después de la actualización.
                    // header('Location: otraPagina.php');
                } else {
                    echo "Error al modificar el hotel: " . $stmt->error;
                }

                $stmt->close();
            }

        } else {
            echo "No existe ningún hotel con el ID $idHotel.";
        }

        $conn->close();
    }
    ?>

    <form action="modificarHoteles.php" method="post">
        <label for="idHotel">ID del Hotel a Modificar:</label>
        <input type="number" id="idHotel" name="idHotel" required>
        <button type="submit">Buscar Hotel</button>
    </form>

    <br><br>
    <div class="enlaces-container">
        <a href="index.html" class="volver-inicio">Volver al Inicio</a>
        <span class="button-space"></span> 
        <a href="verHoteles.php" class="ver-hoteles-link">Ver Hoteles</a>
        <span class="button-space"></span> 
        <a href="añadirHoteles.php" class="añadir-hoteles-button">Añadir Hoteles</a>
        <span class="button-space"></span> 
        <a href="restaurarBD.php" class="restaurar-bd-button">Restaurar BD</a>
        <span class="button-space"></span> 
        <a href="borrarHoteles.php" class="borrar-hoteles-button">Borrar Hoteles</a>
    </div>
</body>
</html>
