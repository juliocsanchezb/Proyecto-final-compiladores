<?php
ob_start();
?>

<?php session_start(); ?>

<?php

session_start();

//conexion
include("../cfg/conexion.php");

$UsuarioId = $_SESSION['user_id'];
if (isset($UsuarioId)) {
    if (isset($_POST['ENVIAR']) && strcasecmp(($_POST['ENVIAR']),'Volver') == 0 ) {
        header("location: ../views/Leer.php");
        exit();
    }
    //captar las variables
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];

    //meterlas en un registro, en la tabla
    $solicitud = "INSERT INTO productos(Nombre, Precio, UsuarioId) VALUES('$nombre', '$precio', $UsuarioId )";

    //enviar la sentencia sql
    $resultado = mysqli_query($conexion, $solicitud);

    // que reaparezca la misma página al terminar
    header("location: ../views/Leer.php");
} else {
    header("location: ../views/SesionNoIniciada.php");
}

?>

<?php
ob_end_flush();
?>
