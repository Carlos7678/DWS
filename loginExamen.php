<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Conexión a la base de datos (reemplaza los valores con los de tu configuración)
    $servername = "localhost";
    $db_username = "admin";
    $db_password = "admin";
    $db_name = "examenb";

    $conn = new mysqli($servername, $db_username, $db_password, $db_name);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Consulta para verificar el usuario y la contraseña
    $sql = "SELECT * FROM usuario WHERE login = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Usuario y contraseña son válidos
        $_SESSION["username"] = $username;
        $_SESSION["authenticated"] = true;

        echo "Inicio de sesión exitoso. ¡Bienvenido, $username!";
    } else {
        // Usuario o contraseña incorrectos
        echo "Nombre de usuario o contraseña incorrectos. Inténtelo de nuevo.";
    }

    $conn->close();
}
?>
