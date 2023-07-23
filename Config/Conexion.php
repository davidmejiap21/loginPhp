<?php
// Configuración de la conexión con la base de datos MySQL
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "login";

    $conexion = new mysqli($host, $user, $pass, $db);

    if (!$conexion) {
        echo "Conexion fallida";
    }
?>