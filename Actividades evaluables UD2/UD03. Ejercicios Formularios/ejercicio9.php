<?php
function validarDatos($datos) {
    $datos = trim($datos);
    $datos = stripslashes($datos);
    $datos = htmlspecialchars($datos);
    return $datos;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombreApellidos = validarDatos($_POST["NombreApellidos"]);
    $email = validarDatos($_POST["Email"]);
    $username = validarDatos($_POST["username"]);
    $password = validarDatos($_POST["password"]);
    $confirmPassword = validarDatos($_POST["confirmPassword"]);
    $siOno = isset($_POST["siOno"]) ? validarDatos($_POST["siOno"]) : "";
    $departamentos = isset($_POST["comercial"]) || isset($_POST["marketing"]) || isset($_POST["direccion"]);

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

    if (empty($nombreApellidos) || empty($email) || empty($username) || empty($password) || empty($confirmPassword) || empty($siOno) || !$departamentos || !empty($fotoError)) {
        echo "Se encontraron errores en el formulario:<br>";
        if (empty($nombreApellidos)) echo "- El campo 'Nombre y apellidos' es obligatorio.<br>";
        if (empty($email)) echo "- El campo 'Email' es obligatorio.<br>";
        if (empty($username)) echo "- El campo 'Nombre de usuario' es obligatorio.<br>";
        if (empty($password)) echo "- El campo 'Contraseña' es obligatorio.<br>";
        if (empty($confirmPassword)) echo "- El campo 'Confirmar contraseña' es obligatorio.<br>";
        if (empty($siOno)) echo "- Debes seleccionar 'SI' o 'NO' en 'Bloqueado'.<br>";
        if (!$departamentos) echo "- Debes seleccionar al menos un departamento.<br>";
        if (!empty($fotoError)) echo "- $fotoError<br>";
    } else {
        $uploadedFile = $uploadDirectory . basename($_FILES['foto']['name']);
        move_uploaded_file($_FILES['foto']['tmp_name'], $uploadedFile);

        echo "Usuario registrado correctamente.<br>";
        echo "La foto ha sido subida correctamente.<br>";
        echo '<img src="' . $uploadedFile . '" alt="Imagen Subida">';
    }
}
?>
