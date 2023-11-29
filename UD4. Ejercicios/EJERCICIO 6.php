<?php

class Calculadora {
    private static $primerNumero = 8;

    public static function sumar($segundoNumero) {
        return self::$primerNumero + $segundoNumero;
    }

    public static function restar($segundoNumero) {
        return self::$primerNumero - $segundoNumero;
    }

    public static function multiplicar($segundoNumero) {
        return self::$primerNumero * $segundoNumero;
    }

    public static function dividir($segundoNumero) {
        if ($segundoNumero != 0) {
            return self::$primerNumero / $segundoNumero;
        } else {
            throw new Exception("No es posible dividir por cero");
        }
    }
}

$resultadoSuma = Calculadora::sumar(3);
$resultadoResta = Calculadora::restar(2);
$resultadoMultiplicacion = Calculadora::multiplicar(6);

try {
    $resultadoDivision = Calculadora::dividir(2);
    echo "Suma: $resultadoSuma, Resta: $resultadoResta, Multiplicación: $resultadoMultiplicacion, División: $resultadoDivision";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

?>
