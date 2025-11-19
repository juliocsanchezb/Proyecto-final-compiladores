<?php
ob_start();
?>

<?php session_start(); ?>

<?php

//captar las variables
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$id = $_POST['id'];

include("../cfg/conexion.php");

//solicitud
$solicitud = "UPDATE productos SET Nombre='$nombre', Precio='$precio' WHERE id=$id";

//enviar solicitud
$resultado = mysqli_query($conexion, $solicitud);

//ir a Leer.php
header("location: ../views/Leer.php");

?>

<?php
ob_end_flush();
?>