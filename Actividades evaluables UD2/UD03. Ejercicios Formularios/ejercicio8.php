<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $textoValidar = $_POST["textoValidar"];
    $validacion = $_POST["Validacion"];

    switch ($validacion) {
        case "E-mail":
            if (filter_var($textoValidar, FILTER_VALIDATE_EMAIL)) {
                echo "Eso NO es un correo electrónico válido.";
            } else {
                echo "Eso SI es un es un correo electrónico válido.";
            }
            break;

            case "DNI":
                if (preg_match("/^[0-9]{8}[A-Za-z]$/", $textoValidar)) {
                    echo "DNI ESPAÑOL VÁLIDO";
                } else {
                    echo "DNI ESPAÑOL NO VÁLIDO.";
                }
                break;

        case "Números":
            if (ctype_digit($textoValidar)) {
                echo "SOLO SON NÚMEROS.";
            } else {
                echo "NO SON SOLO NÚMEROS.";
            }
            break;

        default:
            
            if (ctype_alpha($textoValidar)) {
                echo "SOLO ES TEXTO.";
            } else {
                echo "NO ES SOLO TEXTO";
            }
            break;
    }
}
?>