<?php
include 'conexion.php';

// Recibir datos
$id = $_POST['id'];
$correo = $_POST['correo'];
$password = $_POST['password'];
$claveHash = password_hash($password, PASSWORD_BCRYPT);

try {
    // Preparar la consulta con los marcadores de posición
    $enviar = $conectar->prepare("UPDATE usuarios SET correo = :correo, contraseña = :contra WHERE id_usuario = :id");

    // Enlazar los valores a los marcadores de posición
    $enviar->bindParam(':correo', $correo);
    $enviar->bindParam(':contra', $claveHash);
    $enviar->bindParam(':id', $id);

    // Ejecutar la consulta
    $enviar->execute();

    header('Location: ../index.php'); // Redirigir
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>