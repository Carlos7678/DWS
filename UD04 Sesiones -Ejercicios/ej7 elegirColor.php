<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ej7 estilos.css">
    <title>Seleccionar Color</title>
</head>
<body>
    <h1>Seleccionar Color de Fondo</h1>

    <form action="ej7 mostrarColor.php" method="post">
        <label for="colorSelector">Selecciona un color:</label>
        <select name="selectedColor" id="colorSelector">
            <option value="red">Rojo</option>
            <option value="blue">Azul</option>
            <option value="green">Verde</option>   
        </select>

        <button type="submit" name="submit">Enviar</button>
        <button type="submit" name="delete">Eliminar Color</button>
    </form>

    <script src="ej7 scriptColor.js"></script>
</body>
</html>

