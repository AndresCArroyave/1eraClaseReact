<?php

include "conexion.php";
$id = $_GET['id'];
$dato = $conectar->query("SELECT * FROM usuarios WHERE id_usuario='$id'");
$datos = $dato->fetch();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/bootstrap.css">
    <link rel="stylesheet" href="../CSS/styles.css">                             
</head>
<body class="row vh-100 justify-content-center align-items-center">
    <div class="col-auto bordes">
        <h1>EDITAR DATOS</h1>
        <form action="actualizar.php" method="POST">
            <div class="mb-3">
              <input type="email" class="form-control" name="correo" value="<?php echo $datos['correo']; ?>">
            </div>
            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" class="form-control" name="password" value="<?php echo $datos['contraseña']; ?>">
            </div>
            <input type="hidden" class="form-control" name="id" value="<?php echo $datos['id_usuario']; ?>">
            <button type="submit" class="btn btn-outline-primary text-black">editar</button>
          </form>
    </div>







    <script src="JS/bootstrap.js"></script>
</body>
</html>