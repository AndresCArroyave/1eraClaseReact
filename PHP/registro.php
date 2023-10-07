<?php
    //Recibir datos
    $correo = $_POST['correo'];
    $password =$_REQUEST['password'];
    $claveHash = password_hash($password, PASSWORD_BCRYPT);
    $clave = password_hash($password, PASSWORD_DEFAULT);

    echo "Hash 1: {$claveHash} <br> Hash 2: {$clave}";

?>