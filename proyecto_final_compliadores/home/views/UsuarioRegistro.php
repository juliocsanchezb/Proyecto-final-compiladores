<!DOCTYPE html>
<html lang='es'>

<head>
  <meta charset='UTF-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <title>Crear</title>

  <!-- Bootstrap -->
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6' crossorigin='anonymous'>

  <!-- font awesome -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css' integrity='sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=' crossorigin='anonymous' />

  <!-- Google fonts -->
  <link rel='preconnect' href='https://fonts.gstatic.com'>
  <link href='https://fonts.googleapis.com/css2?family=Roboto&display=swap' rel='stylesheet'>

  <style>
    html {
      height: 100%;
    }

    body {
      font-family: 'Roboto', sans-serif;

      background:  #23a6d5;
      background-size: 400% 400%;
    }

    
  </style>

</head>

<body class='h-100'>

  <div class='row h-100 mx-0'>

    <div class='col-lg-5 col-md-8 col-sm-10 col-11 bg-white border  rounded-3 shadow px-md-5 py-5  mx-auto my-auto'>

      <form method="POST" action="../controllers/UsuarioCrear.php">

        Nombre: <br> <input class="mt-2 form-control" type="text" name="nombre"> <br>
        Contraseña: <br> <input class="mt-2 form-control" type="password" step="any" name="password"> <br>
        Correo: <br> <input class="mt-2 form-control" type="email" step="any" name="email">

        <div class='text-center'>
          <input class="btn btn-primary btn-lg mt-4 col-12" type="submit" name="ENVIAR" value="Registrarse">
          <a class="btn  btn-lg mt-3 col-12" href="../index.php">Volver </a>
        </div>

      </form>

    </div>
  </div>
</body>

</html>