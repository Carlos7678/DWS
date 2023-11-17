<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="ejercicio2.css">
</head>

<body>
    <h1>Mega-Calculadora V2</h1>
    <form action="ejercicio3.php" method="POST">
        <label for="num1">Número 1:</label>
        <input type="text" id="num1" name="num1" required><br>
        <label for="num2">Número 2:</label>
        <input type="text" id="num2" name="num2" required><br>

        <label>Operación:
            <input type="radio" id="sumar" name="operacion" value="sumar" checked> +
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
            try {
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
                        if ($num2 == 0) {
                            throw new Exception("PROHIBIDO:División por cero no permitida.");
                        }
                        $resultado = $num1 / $num2;
                        break;
                    default:
                        throw new Exception("Operación PROHIBIDA.");
                }

                echo "<p>Resultado: $resultado</p>";
            } catch (Exception $e) {
                echo "<p class='error'>Error: " . $e->getMessage() . "</p>";
            }
        } else {
            echo "<p class='error'>Por favor, ingrese números válidos.</p>";
        }
    }
    ?>
</body>
</html>