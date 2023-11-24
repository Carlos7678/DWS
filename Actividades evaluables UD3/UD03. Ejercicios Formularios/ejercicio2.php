<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="ejercicio2.css">
</head>

<body>
    <h1>Mega-Calculadora</h1>
    <form action="ejercicio2.php" method="POST">
        <label for="num1">Número 1:</label>
        <input type="text" id="num1" name="num1" required><br>
        <label for="num2">Número 2:</label>
        <input type="text" id="num2" name="num2" required><br>

        <label>Operación:
            <input type="radio" id="sumar" name="operacion" val checked> +
            <input type="radio" id="restar" name="operacion" value="restar"> -
            <input type="radio" id="multiplicar" name="operacion" value="multiplicar"> *
            <input type="radio" id="dividir" name="operacion" value="dividir"> /
        </label><br>


        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operacion = $_POST["operacion"];
        if (is_numeric($num1) && is_numeric($num2)) {
            switch ($operacion) {
                case "sumar":
                    $resultado = $num1 + $num2;
                    break;
                case "restar":
                    $resultado = $num1 - $num2;
                    break;
                case "multiplicar":
                    $resultado = $num1 * $num2;
                    break;
                case "dividir":
                    $resultado = $num2 != 0 ? $num1 / $num2 : "Error: División por cero";
                    break;
                default:
                    $resultado = "Error: Operación no válida";
            }

            echo "<p>Resultado: $resultado</p>";
        } else {
            echo "<p class='error'>Por favor, ingrese números.</p>";
        }
    }
    ?>
</body>

</html>