<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];

    if (is_numeric($num1) && is_numeric($num2)) {
        $result = $num1 * $num2;
        echo "<h1>El resultado de la multiplicacion es : $result</h1>";
    } else {
        echo "<h1>Por favor, ingresa numeros.</h1>";
    }
}
?>
