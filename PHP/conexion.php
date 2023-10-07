<?php
    $servidor = 'localhost';
    $BD = 'formulario';
    $usuario = 'root';
    $password = '';

    $conectar = new PDO("mysql: server=$servidor; dbname=$BD", $usuario, $password);

    

?>