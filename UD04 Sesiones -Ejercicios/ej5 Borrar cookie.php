<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    
    if (isset($_POST["recordar"])) {
        setcookie("correo_recordado", $email, time() + (30 * 24 * 60 * 60), "/");
    }
}

header("Location: ej5 mostrar.php");
exit();
?>
