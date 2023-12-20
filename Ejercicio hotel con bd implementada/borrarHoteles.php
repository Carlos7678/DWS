<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/borrarHoteles.css">
    <title>Borrar Hotel</title>
</head>
<body>
    <h1 class="titulo">Borrar Hotel en HOTELAND.COM</h1>

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

        // Consulta SQL para verificar si el hotel con el ID proporcionado existe
        $checkSql = "SELECT * FROM hoteles WHERE ID = $idHotel";
        $result = $conn->query($checkSql);

        if ($result->num_rows > 0) {
            // El hotel existe, proceder con la eliminación
            $deleteSql = "DELETE FROM hoteles WHERE ID = $idHotel";

            if ($conn->query($deleteSql) === TRUE) {
                echo "Hotel con ID $idHotel ha sido borrado correctamente.";
            } else {
                echo "Error al borrar el hotel: " . $conn->error;
            }
        } else {
            // El hotel con el ID proporcionado no existe
            echo "No existe ningún hotel con el ID $idHotel.";
        }

        $conn->close();
    }
    ?>

    <form action="borrarHoteles.php" method="post">
        <label for="idHotel">ID del Hotel a Borrar:</label>
        <input type="number" id="idHotel" name="idHotel" required>

        <button type="submit">Borrar Hotel</button>
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
        <a href="modificarHoteles.php" class="modificar-hoteles-button">Modificar Hoteles</a>
    </div>
</body>
</html>

