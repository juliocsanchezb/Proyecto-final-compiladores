<?php
ob_start();
?>

<?php

session_start();

?>

<?php

//conexion
include("../cfg/conexion.php");

//captar las variables
$nombre = $_POST['nombre'];
$password = $_POST['password'];


if (!empty($_POST['nombre']) && !empty($_POST['password'])) {
    
    // CONSULTA
    $solicitud = "SELECT * FROM usuarios WHERE usuario='$nombre'";
    $resultado = mysqli_query($conexion, $solicitud);

    if (!$resultado) {
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
           <div class='text-center'>
           <p class='h4'>El nombre de usuario no existe porfavor registrarse</p>
           </div>
            <div class='text-center'>
            <a type='button' class='btn btn-primary btn-lg mt-4 col-12' href='../views/UsuarioLogin.php'>Volver a intentar</a>
            </div>

            </div>
            </div>

            </body>
            </html>


            ";
        exit();
    }
    // En el caso de que haya registros:
    while ($fila = mysqli_fetch_array($resultado)) {

        $dbpassword = $fila['Password'];

        //Si la contraseña introducida es igual a la encriptada de la db:
        if (password_verify($password, $dbpassword)) {


            //Si los datos del login son correctos, almacénalo en una variable de sesión 
            $_SESSION['user_id'] = $fila['id'];

            header("location: Leer.php");
        }
    }

    //En el caso de que no sea correcta:

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
           <div class='text-center'>
           <p class='h4'>Los datos introducidos son incorrectos</p>
           </div>
            <div class='text-center'>
            <a type='button' class='btn btn-primary btn-lg mt-4 col-12' href='../views/UsuarioLogin.php'>Volver a intentar</a>
            </div>

            </div>
            </div>

            </body>
            </html>


            ";
}

?>

<?php
ob_end_flush();
?>
