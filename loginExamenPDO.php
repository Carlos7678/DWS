<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Configuración de la base de datos (reemplaza los valores con los de tu configuración)
    $servername = "localhost";
    $db_username = "admin";
    $db_password = "admin";
    $db_name = "examenb";

    try {
        // Crear una conexión a la base de datos usando PDO
        $pdo = new PDO("mysql:host=$servername;dbname=$db_name", $db_username, $db_password);
        
        // Configurar el modo de error para lanzar excepciones en lugar de advertencias
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Consulta para verificar el usuario y la contraseña usando parámetros preparados para prevenir inyección SQL
        $sql = "SELECT * FROM usuario WHERE login = :username AND password = :password";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute();

        // Verificar si se encontraron resultados
        if ($stmt->rowCount() > 0) {
            // Usuario y contraseña son válidos
            $_SESSION["username"] = $username;
            $_SESSION["authenticated"] = true;

            echo "Inicio de sesión exitoso. ¡Bienvenido, $username!";
        } else {
            // Usuario o contraseña incorrectos
            echo "Nombre de usuario o contraseña incorrectos. Inténtelo de nuevo.";
        }
    } catch (PDOException $e) {
        // Capturar y manejar errores de la base de datos
        die("Error de conexión: " . $e->getMessage());
    }

    // Cerrar la conexión
    $pdo = null;
}
?>
