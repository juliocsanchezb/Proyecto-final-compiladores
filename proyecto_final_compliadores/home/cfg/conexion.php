<?php
$host = '127.0.0.1:1414'; 
$user = 'root';
$password = '';
$db = 'compiladoresfinal';

$conexion = new mysqli($host, $user, $password, $db); // Aquí se hace la conexion

//Esto es para comprobar si conecta
/*  if($conexion->connect_error){
     echo 'conexión fallida' . $conn->connect_error;  
     exit;
 }
 echo 'Te has conectado correctamente a MYSQL.'; 
 */