<?php
session_start();
include 'conexion_be.php';
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' and contrasena= '$contrasena'");
    
if (mysqli_num_rows($validar_login) > 0){
    $fila = mysqli_fetch_assoc($validar_login);
    $id_usuario = $fila['id_usuario'];
    $_SESSION['id_usuario'] = $id_usuario;
    
     echo '
       
        <script>
        alert("Ingreso correctamente. Nombre de usuario: ' .$_SESSION['id_usuario'] .'");
        window.location="../Paginaweb2/index.php";
        </script>
    ';
    

}else{
    echo '
    <script>
        alert("Usuario no existe por favor verifique los datos");
        window.location="index.php";
    </script>
    ';
    exit;
}
?>