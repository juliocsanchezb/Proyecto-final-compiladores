<?php
//conexion
include("../cfg/conexion.php");

  // CONSULTA
  $solicitud = "SELECT * FROM productos where ".$_SESSION['user_id']." = UsuarioId OR ".$_SESSION['user_id']." = 1 ORDER BY Precio ASC";
  $resultado = mysqli_query($conexion, $solicitud);