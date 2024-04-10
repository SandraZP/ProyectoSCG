<?php
$server = "localhost"; // Especificamos el puerto 3307 aquí
$db = "sistema_escolar";
$user = "root";
$pass = "Manchas2015";
// Create connection
$conexion = new mysqli($server, $user, $pass, $db);
// Check connection
if ($conexion->connect_errno) {
    die("Connection failed: " . $conexion->connect_error); // Usamos $conexion->connect_error en lugar de $conexion->connect_errno
} else {
    echo "Conectado"; // Cambiamos "conectado" a "Conectado" para consistencia
}
?>
