<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
    <link rel="stylesheet" href="ej8 estilos.css">
</head>

<body>
    <div id="baner">
        <p>Aceptas las cookies?</p>
        <button id="aceptar-cookie">Aceptar</button>
        <a href="https://blog.didomi.io/es/ley-de-cookies-en-espana-todo-lo-que-necesitas-saber">Más información sobre la ley</a>
    </div>
    <script>
        <?php
        if (!isset($_COOKIE['cookie_aceptada'])) {
            echo "document.getElementById('baner').style.display = 'block';";
        }
        ?>
        document.getElementById('aceptar-cookie').addEventListener('click', function() {
            <?php
            setcookie('cookie_aceptada', 'true', time() + (365 * 24 * 60 * 60), '/');
            ?>
            document.getElementById('baner').style.display = 'none';
            alert('Gracias');
        });
    </script>
</body>

</html>