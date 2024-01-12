<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $validUser = true; 
    $validPassword = true; 

    if ($validUser && $validPassword) {
        $_SESSION["username"] = $username;
        $_SESSION["authenticated"] = true;

        header("Location: ej9 pagina2.php"); 
        exit();
    } else {
        echo "Nombre de usuario o contraseña incorrectos. Inténtelo de nuevo.";
    }
}
?>
