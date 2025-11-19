<?php
ob_start();
?>

<?php
session_start();
?>


<?php
//conexion
include("../cfg/conexion.php");
include("../controllers/VerProductos.php");
//comprueba si existe. isset es si existe
if (isset($_SESSION['user_id'])) {



  echo " <!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Lista</title>

    <!-- Bootstrap -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6' crossorigin='anonymous'>

    <!-- font awesome -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css'
    integrity='sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=' crossorigin='anonymous' />

    <!-- Google fonts -->
    <link rel='preconnect' href='https://fonts.gstatic.com'>
    <link href='https://fonts.googleapis.com/css2?family=Roboto&display=swap' rel='stylesheet'>
    
    <style>
    html{ 
      height: 100%;}
    body{
        font-family: 'Roboto', sans-serif;

        background:  #23a6d5;
        background-size: 400% 400%;
    }
        
    </style>

</head>
<body class='h-100'>

<div class='row h-100 mx-0'>  

<div class='col-lg-5 col-md-8 col-sm-10 col-11 bg-white border  rounded-3 shadow px-md-5 py-5  mx-auto my-auto'>

";




  // VACIADO DE DATOS
  echo "<div class='table-responsive'> <table class='table'> 
<thead>
<tr>
<th scope='col'>Nombre</th>  
<th scope='col'>Precio</th>
<th scope='col'>Modificar</th>
<th scope='col'>Eliminar</th>
</tr> 
</thead><tbody>";

  while ($fila = mysqli_fetch_array($resultado)) {
    echo "<tr>";
    echo "<td>" . $fila['Nombre'] . "</td>";
    echo "<td>" . $fila['Precio'] . "</td>";
    echo "<td> <a href='./ActualizarFormulario.php?id=" . $fila['id'] . " '> <div class=''> <i class='fas fa-pen'></i> </div> </td>";
    echo "<td> <a href='../controllers/eliminar.php?id=" . $fila['id'] . " '> <div class=' text-danger'> <i class='fas fa-trash-alt'></i></div> </td>";
    echo "</tr>";
  }
  echo "</tbody></table> </div>

  <div class='text-center'>
  <a type='button' class='btn btn-primary btn-lg mt-4 col-12' href='./Crear.php'>Añadir producto</a>
  </div>

  <div class='text-center'>
  <a type='button' class='btn btn-primary btn-lg mt-4 col-12' href='./UsuarioLogout.php'>Cerrar sesión</a>
  </div>

</div>
</div>

</body>
</html>


";
} else {
  header("location: SesionNoIniciada.php");
}

?>

<?php
ob_end_flush();
?>