<?php
ob_start();
?>

<?php session_start(); ?>

<?php

include("../cfg/conexion.php");

$id = $_GET['id'];

$solicitud = "SELECT * FROM productos WHERE id=$id"; //solo el de este id

$resultado = mysqli_query($conexion, $solicitud);

?>

<!DOCTYPE html>
<html lang='es'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Actualizar</title>

    <!-- Bootstrap -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6' crossorigin='anonymous'>

    <!-- Google fonts -->
    <link rel='preconnect' href='https://fonts.gstatic.com'>
    <link href='https://fonts.googleapis.com/css2?family=Roboto&display=swap' rel='stylesheet'>

    <style>
        html {
            height: 100%;
        }

        body {
            font-family: 'Roboto', sans-serif;

            background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
        }

       
    </style>

</head>

<body class='h-100'>

    <div class='row h-100 mx-0'>

        <div class='col-lg-5 col-md-8 col-sm-10 col-11 bg-white border  rounded-3 shadow px-md-5 py-5  mx-auto my-auto'>

            <div class="">

                <!-- Abrimos un formulario -->
                <form method="POST" action="../controllers/ActualizarRegistro.php">
                    <!-- Lo enviamos a otro php -->

                    <?php
                    while ($fila = mysqli_fetch_array($resultado)) { // Recorremos el array del resultado

                        // $fila['Nombre'] es el nombre del id indicado en la sentencia sql
                        echo "Nombre: <input class='mt-2 form-control' type='text'; name='nombre' value='" . $fila['Nombre'] . "'> <br> ";
                        echo "Precio: <input class='mt-2 form-control' type='number' step='any'; name='precio' value='" . $fila['Precio'] . "'> ";

                        echo "<input type='hidden'; name='id' value=' " . $id . " '> <br> ";
                    }
                    ?>

                    <div class='text-center'>
                        <input class="btn btn-primary btn-lg mt-4 col-12" type="submit" name="ENVIAR" value="Actualizar">
                        <input class="btn  btn-lg mt-3 col-12" type="submit" name="ENVIAR" value="Volver">
                    </div>


                </form>

            </div>

        </div>
    </div>
</body>

</html>

<?php
ob_end_flush();
?>