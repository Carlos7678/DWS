<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    
    if ($username === "usuario" && $password === "clave") {
        setcookie("usuario_validado", true, 0, "/");
        
        header("Location: ej6 menu.php");
        exit();
    } else {
        echo "<h1>Nombre de usuario o contraseña incorrectos. Inténtalo de nuevo.</h1>";
    }
}
?>
