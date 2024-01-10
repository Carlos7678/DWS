<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['submit'])) {
        $selectedColor = $_POST['selectedColor'];
        setcookie('backgroundColor', $selectedColor, time() + (86400 * 1), "/"); // Cookie válida por 1 día
        header('Location: ej7 mostrarColor.php');
        exit();
    } elseif (isset($_POST['delete'])) {
        setcookie('backgroundColor', '', time() - 3600, "/"); // Caducar la cookie
        header('Location: ej7 elegirColor.php');
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ej7 estilos2.css">
    <title>Color Seleccionado</title>
</head>
<body>
    <?php
    $backgroundColor = isset($_COOKIE['backgroundColor']) ? $_COOKIE['backgroundColor'] : '';
    
    if ($backgroundColor) {
        echo '<div style="background-color:' . $backgroundColor . '; height: 100vh; width: 100%;">';
        echo '<h1>Color seleccionado: ' . $backgroundColor . '</h1>';
        echo '<p>Color seleccionado: ' . $backgroundColor . '</p>';
        echo '<button><a href="ej7 elegirColor.php">Volver a la Página Inicial</a></button>';
        echo '</div>';
    } else {
        echo '<p>No se ha seleccionado ningún color.</p>'; 
        echo '<button><a href="ej7 elegirColor.php">Volver a la Página Inicial</a></button>';
    }
    ?>
    <script src="ej7 scriptColor.js"></script>
</body>
</html>
