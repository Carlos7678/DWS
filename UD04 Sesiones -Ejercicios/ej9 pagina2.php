<?php
session_start();

if (isset($_SESSION["authenticated"]) && $_SESSION["authenticated"] === true) {
    $username = $_SESSION["username"];

    echo "Bienvenido, $username. Sus variables de sesión son:<br>";
    echo "Nombre de usuario: $username<br>";
} else {
    header("Location: ej9 index.php");
    exit();
}
?>