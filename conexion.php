<?php

include("configuracion.php");

// Se crea la conexión
$conexion = new mysqli($servidor, $usuario, $clave, $bd);

// Verifica la conexión
if ($conexion->connect_error) {
    die("Fallo conexion: " . $conexion->connect_error);
}
//echo "Conexion exitosa";
