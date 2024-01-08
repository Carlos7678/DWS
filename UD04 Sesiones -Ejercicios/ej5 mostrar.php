<?php
if (isset($_COOKIE["correo_recordado"])) {
    $correo_recordado = $_COOKIE["correo_recordado"];
    
    echo "<h1>Dirección de Correo Recordada:</h1>";
    echo "<p>{$correo_recordado}</p>";
} else {
    echo "<h1>No se ha recordado ninguna dirección de correo.</h1>";
}
?>
