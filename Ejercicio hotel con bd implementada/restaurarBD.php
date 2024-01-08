<?php
$servername = "localhost"; 
$username = "Carlos";     
$password = "Adminbd15"; 
$dbname = "hotelesbd"; 

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Script SQL
$sql = "
    DROP TABLE IF EXISTS hoteles;
    CREATE TABLE hoteles (
        id INT AUTO_INCREMENT PRIMARY KEY,
        Nombre VARCHAR(255) NOT NULL,
        Estrellas INT NOT NULL,
        Habitaciones INT NOT NULL,
        Poblacion VARCHAR(255) NOT NULL,
        Direccion VARCHAR(255) NOT NULL,
        UNIQUE (id)
    );
    INSERT INTO hoteles (Nombre, Estrellas, Habitaciones, Poblacion, Direccion) VALUES
    ('Bellagio Las Vegas', 5, 3933, 'Las Vegas, Nevada 89109', '3600 Las Vegas Boulevard South'),
    ('Commodore Hotel Busan', 4, 500, 'Busan, Corea del Sur', '151 Junggu-ro, Jung-gu'),
    ('Excalibur Hotel & Casino', 3, 3991, 'Las Vegas, Nevada 89109', '3850 Las Vegas Boulevard South'),
    ('Hotel Las Arenas Balneario Resort', 5, 253, 'Valencia, España', 'Eugenia Viñes 22-24, 46011'),
    ('Hotel Burj Al Arab', 7, 202, 'Dubai, Emiratos Árabes Unidos', 'Umm Suqeim 3'),
    ('Four Seasons Hotel George-V', 5, 244, 'Paris, Francia', '31 Av. George V'),
    ('Hotel Chicote', 4, 456, 'Rio de Janeiro, Brasil', 'Gran Via'),
    ('Hotel Rey Vinicius jr II', 5, 500, 'Rio de Janeiro, Brasil', '5600, Avenida Pele VI');
";

// Ejecutar script
if ($conn->multi_query($sql) === TRUE) {
    echo '<script>alert("Script ejecutado correctamente");</script>';
} else {
    echo '<script>alert("Error al ejecutar el script: ' . $conn->error . '");</script>';
}

// Cerrar conexión
$conn->close();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Restaurar base de datos</title>
    <link rel="stylesheet" href="css/verHoteles.css" />
</head>

<body>
    <?php ?>
    <h1 class="titulo">HOTELAND.COM</h1>
    <br><br><br><br>
    <div class="enlaces-container">
    <a href="index.html" class="volver-inicio">Volver al Inicio</a>
</div>
    <br><br>
</body>

</html>