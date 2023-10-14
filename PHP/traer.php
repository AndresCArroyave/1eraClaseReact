<?php
    include "conexion.php";
    $sql = $conectar ->  query("SELECT * FROM usuarios");

    while($dato = $sql->fetch()){
        echo $dato ['correo']. " " .$dato['contraseña']. "<br>";
    }

?>