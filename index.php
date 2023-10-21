<?php
    include "PHP/conexion.php";
    $datos = $conectar ->  query("SELECT * FROM usuarios");


    /*while($dato = $datos->fetch()){
        echo $dato ['correo']. " " .$dato['contraseña']. "<br>";
    }*/

    /*foreach($datos as $i){
        echo $i ['correo']. " " .$i['contraseña']. "<br>";
    }*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/bootstrap.css">
    <link rel="stylesheet" href="CSS/styles.css">                             
</head>
<body class="row vh-100 justify-content-center">
    <div class="container p-5">
        <h1 class="text-white text-center">DATOS</h1>
        <table class="table table-dark">
  <thead>
    <tr>
        
      <th scope="col">ID</th>
      <th scope="col">CORREO</th>
      <th scope="col">PASSWORD</th>
      <th scope="col">ACCIONES</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($datos as $i){?>
    <tr>
      <th scope="row"><?php echo $i['id_usuario']; ?></th>
      <td><?php echo $i['correo']; ?></td>
      <td><?php echo $i['contraseña']; ?></td>
      <td><a class="btn btn-primary" href="PHP/editar.php?id=<?php echo $i['id_usuario']; ?>">Editar</a></td>
      <td><a class="btn btn-danger" href="PHP/eliminar.php?id=<?php echo $i['id_usuario']; ?>">Borrar</a></td>
    </tr>
    <?php } ?>  

  </tbody>
</table>
       
    </div>







    <script src="JS/bootstrap.js"></script>
</body>
</html>