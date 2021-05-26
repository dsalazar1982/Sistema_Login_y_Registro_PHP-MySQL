<?php

$conexion = new mysqli($servidor, $usuario, $clave, $bd);

if ($conexion->connect_error) {
    die("Fallo conexion: " . $conexion->connect_error);
}
echo "Conexion exitosa";
