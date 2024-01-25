<?php

$servername = "localhost";
$username = "Carlos";
$password = "Adminbd15";
$dbname = "hotelesbd";

function obtenerTodosLosHoteles() {
    global $servername, $username, $password, $dbname;

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        return ["success" => false, "message" => "La conexión a la base de datos falló"];
    }

    $sql = "SELECT * FROM hoteles";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $hoteles = [];
        while ($row = $result->fetch_assoc()) {
            $hoteles[] = $row;
        }

        $conn->close();
        return ["success" => true, "hoteles" => $hoteles];
    } else {
        $conn->close();
        return ["success" => false, "message" => "No se encontraron hoteles"];
    }
}

function obtenerHotelPorId($id) {
    global $servername, $username, $password, $dbname;

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        return ["success" => false, "message" => "La conexión a la base de datos falló"];
    }

    $sql = "SELECT * FROM hoteles WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $conn->close();
        return ["success" => true, "hotel" => $row];
    } else {
        $conn->close();
        return ["success" => false, "message" => "Hotel no encontrado"];
    }
}

function borrarHotelPorId($id) {
    global $servername, $username, $password, $dbname;

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        return ["success" => false, "message" => "La conexión a la base de datos falló"];
    }

    $sql = "DELETE FROM hoteles WHERE id = $id";
    
    if ($conn->query($sql) === TRUE) {
        $conn->close();
        return ["success" => true, "message" => "Hotel borrado correctamente"];
    } else {
        $conn->close();
        return ["success" => false, "message" => "Error al borrar el hotel: " . $conn->error];
    }
}

function insertarNuevoHotel($nombre, $estrellas, $habitaciones, $ciudad, $direccion) {
    global $servername, $username, $password, $dbname;

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        return ["success" => false, "message" => "La conexión a la base de datos falló"];
    }

    $sql = "INSERT INTO hoteles (Nombre, Estrellas, Habitaciones, Poblacion, Direccion) 
            VALUES ('$nombre', $estrellas, $habitaciones, '$ciudad', '$direccion')";

    if ($conn->query($sql) === TRUE) {
        $conn->close();
        return ["success" => true, "message" => "Hotel añadido correctamente"];
    } else {
        $conn->close();
        return ["success" => false, "message" => "Error al añadir el hotel: " . $conn->error];
    }
}

function modificarHotelPorId($id, $nombre, $estrellas, $habitaciones, $ciudad, $direccion) {
    global $servername, $username, $password, $dbname;

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        return ["success" => false, "message" => "La conexión a la base de datos falló"];
    }

    $existingHotel = obtenerHotelPorId($id);

    if (!$existingHotel) {
        $conn->close();
        return ["success" => false, "message" => "No existe ningún hotel con el ID $id"];
    }

    $updateSql = "UPDATE hoteles SET Nombre = ?, Estrellas = ?, Habitaciones = ?, Poblacion = ?, Direccion = ? WHERE ID = ?";

    $stmt = $conn->prepare($updateSql);
    $stmt->bind_param("siissi", $nombre, $estrellas, $habitaciones, $ciudad, $direccion, $id);

    if ($stmt->execute()) {
        $conn->close();
        return ["success" => true, "message" => "Hotel modificado correctamente"];
    } else {
        $conn->close();
        return ["success" => false, "message" => "Error al modificar el hotel: " . $stmt->error];
    }
}


if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $hotelId = $_GET['id'] ?? null;

    if (!empty($hotelId)) {
        $response = obtenerHotelPorId($hotelId);
    } else {
        $response = obtenerTodosLosHoteles();
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
    $estrellas = isset($_POST['estrellas']) ? $_POST['estrellas'] : 0; 
    $habitaciones = isset($_POST['habitaciones']) ? $_POST['habitaciones'] : 0; 
    $ciudad = isset($_POST['ciudad']) ? $_POST['ciudad'] : '';
    $direccion = isset($_POST['direccion']) ? $_POST['direccion'] : '';

    $response = insertarNuevoHotel($nombre, $estrellas, $habitaciones, $ciudad, $direccion);
} elseif ($_SERVER["REQUEST_METHOD"] == "DELETE") {
    parse_str(file_get_contents("php://input"), $deleteParams);
    $hotelId = $deleteParams['id'] ?? null;

    if (!empty($hotelId)) {
        $response = borrarHotelPorId($hotelId);
    } else {
        $response = ["success" => false, "message" => "ID no especificado"];
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "PUT") {
    parse_str(file_get_contents("php://input"), $putParams);
    $hotelId = $putParams['id'] ?? null;
    $nombre = $putParams['nombre'] ?? '';
    $estrellas = $putParams['estrellas'] ?? 0;
    $habitaciones = $putParams['habitaciones'] ?? 0;
    $ciudad = $putParams['ciudad'] ?? '';
    $direccion = $putParams['direccion'] ?? '';

    if (!empty($hotelId)) {
        $response = modificarHotelPorId($hotelId, $nombre, $estrellas, $habitaciones, $ciudad, $direccion);
    } else {
        $response = ["success" => false, "message" => "ID no especificado"];
    }
}


header('Content-Type: application/json');
echo json_encode($response, JSON_PRETTY_PRINT);
exit();

?>
