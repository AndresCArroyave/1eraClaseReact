<?php
    include 'conexion.php';

    //Recibir datos
    $correo = $_POST['correo'];
    $password =$_REQUEST['password'];
    $claveHash = password_hash($password, PASSWORD_BCRYPT);
    
    $sql = "INSERT INTO usuarios VALUES (null, '$correo', '$claveHash')";

    $conectar -> query($sql);

    header('Location: ../index.html');


    

?>