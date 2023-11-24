<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = validarDato($_POST["nombre"]);
    $email = validarDato($_POST["email"]);
    $username = validarDato($_POST["username"]);
    $password = validarDato($_POST["password"]);
    $confirmPassword = validarDato($_POST["confirmPassword"]);
    $siOno = isset($_POST["siOno"]) ? validarDato($_POST["siOno"]) : "";
    $comercial = isset($_POST["Comercial"]);
    $marketing = isset($_POST["Marketing"]);
    $direccion = isset($_POST["Direccion"]);
    $fotoError = "";
    $uploadDirectory = 'uploads/';
    $allowedFileTypes = array('jpg', 'jpeg', 'png');
    $maxFileSize = 5 * 1024 * 1024;

    if ($_FILES['foto']['error'] == UPLOAD_ERR_OK) {
        $uploadedFile = $uploadDirectory . basename($_FILES['foto']['name']);
        $imageFileType = strtolower(pathinfo($uploadedFile, PATHINFO_EXTENSION));

        if (!in_array($imageFileType, $allowedFileTypes)) {
            $fotoError = "Solo se permiten archivos JPG, JPEG y PNG.";
        }
        if ($_FILES['foto']['size'] > $maxFileSize) {
            $fotoError = "El tamaño del archivo no puede ser mayor a 5 MB.";
        }
    } else {
        $fotoError = "Error al subir la foto.";
    }
    if (empty($nombre) || empty($email) || empty($username) || empty($password) || empty($confirmPassword) || empty($siOno) || empty($fotoError)) {
        echo "FORMULARIO ERRONEO (NO ENVIADO):<br>";
        if (empty($nombre)) echo "- El campo 'Nombre' es obligatorio.<br>";
        if (empty($email)) echo "- El campo 'E-mail' es obligatorio.<br>";
        if (empty($username)) echo "- El campo 'Nombre de usuario' es obligatorio.<br>";
        if (empty($password)) echo "- El campo 'Contraseña' es obligatorio.<br>";
        if (empty($confirmPassword)) echo "- El campo 'Confirmar contraseña' es obligatorio.<br>";
        if (empty($siOno)) echo "- Debes seleccionar uan opcion en 'Bloqueado'.<br>";
        if (empty($fotoError)) echo "- $fotoError<br>";
    } else {
        $uploadedFile = $uploadDirectory . basename($_FILES['foto']['name']);
        move_uploaded_file($_FILES['foto']['tmp_name'], $uploadedFile);
        echo "Usuario registrado correctamente.<br>";
        echo "La foto ha sido subida correctamente.<br>";
        echo '<img src="' . $uploadedFile . '" alt="Imagen Subida">';
    }
}

function validarDato($dato)
{
    $dato = trim($dato);
    $dato = stripslashes($dato);
    $dato = htmlspecialchars($dato);
    return $dato;
}
