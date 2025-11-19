<?php

    session_start();

    session_unset(); // para quitar esta sesión

    session_destroy(); // para destruir esta sesión

    header("location: ../index.php");
?>