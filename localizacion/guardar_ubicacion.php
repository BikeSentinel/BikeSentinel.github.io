<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $latitud = $_POST['latitud'];
    $longitud = $_POST['longitud'];
    $id_moto = $_SESSION['id_moto'];
    var_dump($id_moto);

    // Conecta a la base de datos (ajusta los detalles de conexión según tu configuración)
    $conexion = new mysqli("localhost", "id21493948_sebastianluna", "Sebastian3007.", "id21493948_motocicletas");

    // Verifica la conexión
    if ($conexion->connect_error) {
        die("Conexión fallida: " . $conexion->connect_error);
    }

    // Realiza la inserción en la base de datos
    $sql = "INSERT INTO UbicacionMotos (id_moto, latitud, longitud) VALUES ('$id_moto', '$latitud', '$longitud')";

    if ($conexion->query($sql) === TRUE) {
        $respuesta = array("latitud" => $latitud, "longitud" => $longitud);
        echo json_encode($respuesta);
        echo '
            <script>
                alert("Geolocation");
                window.location="../geolocalizacion2/geolocalizacion.php";
            </script>
    ';
        exit; // Termina la ejecución del script después de enviar la respuesta
    } else {
        echo "Error al guardar la ubicación: " . $conexion->error;
    }

    // Cierra la conexión a la base de datos
    $conexion->close();
}

// Si llegamos a este punto, es una solicitud GET para obtener las ubicaciones almacenadas
$conexion = new mysqli("localhost", "id21493948_sebastianluna", "Sebastian3007.", "id21493948_motocicletas");

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
//"SELECT * FROM UbicacionMotos WHERE id_moto= '$id_moto'"
$sql = "SELECT * FROM UbicacionMotos " ;
$resultado = $conexion->query($sql);

$ubicaciones = array();

while ($fila = $resultado->fetch_assoc()) {
    $ubicaciones[] = $fila;
}

echo json_encode($ubicaciones);

$conexion->close();
?>
