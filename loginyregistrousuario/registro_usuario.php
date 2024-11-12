 <?php

include 'conexion_be.php';

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena) VALUES('$nombre_completo','$correo','$usuario','$contrasena')";

$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    // Obtener el ID del usuario recién insertado
    $id_usuario = mysqli_insert_id($conexion);
    echo '<script> alert("Usuario almacenado correctamente"); window.location= "index.php"; </script>';
} else {
    echo '<script> alert("Inténtalo nuevamente"); window.location= "index.php"; </script>';
}

mysqli_close($conexion);

?>
