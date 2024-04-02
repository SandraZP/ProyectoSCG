<?php
$host = 'localhost';
$user = 'root';
$db = 'escuela';
$pass = 'Manchas2015';

try {
    $pdo = new PDO('mysql:host=' . $host . ';port=3307;dbname=' . $db . ';charset=utf8', $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
} catch (PDOException $e) { 
    // Aquí, en lugar de solo imprimir el mensaje de error, puedes lanzar la excepción nuevamente o manejarla de alguna manera
    throw new PDOException('Error al conectar a la base de datos: ' . $e->getMessage()); 
}
?>


