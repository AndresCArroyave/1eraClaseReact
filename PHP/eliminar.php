<?php

include "conexion.php";
$id = $_GET['id'];
//echo "<center><h1>'$id'</h1></center>";
$conectar->query("DELETE FROM usuarios WHERE id_usuario='$id'");
header("Location: ../index.php")

?>