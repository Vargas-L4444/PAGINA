<?php
// Configuración de la conexión a la base de datos
$host = 'localhost:3308';
$user = 'root';
$password = '';
$database = 'formulario';

// Crear conexión
$conex = new mysqli($host, $user, $password, $database);

// Verificar conexión
if ($conex->connect_error) {
    die('Error de conexión: ' . $conex->connect_error);
}
?>