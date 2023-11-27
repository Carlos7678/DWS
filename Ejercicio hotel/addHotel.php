<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $estrellas = $_POST["estrellas"];
    $habitaciones = $_POST["habitaciones"];
    $ciudad = $_POST["ciudad"];
    $direccion = $_POST["direccion"];

    $file = fopen("hoteles.csv", "r");
    $hotelExiste = false;

    while (($line = fgetcsv($file)) !== false) {
        if ($line[0] === $nombre) {
            $hotelExiste = true;
            break;
        }
    }

    fclose($file);

    if (!$hotelExiste) {
        $nuevoHotel = [$nombre, $estrellas, $habitaciones, $ciudad, $direccion];

        $file = fopen("hoteles.csv", "a");
        if ($file) {
            fputcsv($file, $nuevoHotel);
            fclose($file);

            header("Location: añadirHoteles.html");
            exit;
        } else {
            header("Location: añadirHoteles.html?error=file_open_error");
            exit;
        }
    } else {
        header("Location: añadirHoteles.html?error=hotel_existente");
        exit;
    }
} else {

    header("Location: añadirHoteles.html");
    exit;
}
