<?php

class Calculadora {
    public static function sumar($a, $b) {
        return $a + $b;
    }

    public static function restar($a, $b) {
        return $a - $b;
    }

    public static function multiplicar($a, $b) {
        return $a * $b;
    }

    public static function dividir($a, $b) {
        if ($b != 0) {
            return $a / $b;
        } else {
            throw new Exception("No es posible dividir por cero");
        }
    }
}

$resultadoSuma = Calculadora::sumar(5, 3);
$resultadoResta = Calculadora::restar(8, 2);
$resultadoMultiplicacion = Calculadora::multiplicar(4, 6);

try {
    $resultadoDivision = Calculadora::dividir(10, 2);
    echo "Suma: $resultadoSuma, Resta: $resultadoResta, Multiplicación: $resultadoMultiplicacion, División: $resultadoDivision";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

?>
