<?php
    include 'conexion.php';

    //Recibir datos
    $correo = $_POST['correo'];
    $password =$_REQUEST['password'];
    $claveHash = password_hash($password, PASSWORD_BCRYPT);
    
    // $sql = "INSERT INTO usuarios VALUES (null, '$correo', '$claveHash')";

    // $enviar = $conectar -> prepare ("INSERT INTO usuarios VALUES (null, ?, ?)");
    

    // $enviar -> execute(array($correo, $claveHash));
    // $enviar -> bindParam(1,$correo);
    // $enviar -> bindParam(2,$claveHash);
    // $enviar -> execute();
    
    $enviar = $conectar -> prepare ("INSERT INTO usuarios VALUES (null, :email, :contra)");
    $enviar -> bindParam('email',$correo);
    $enviar -> bindParam('contra',$claveHash);
    $enviar -> execute();


    header('Location: ../formulario_registro.html');//Enrutar


    

?>