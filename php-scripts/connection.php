<?php
include_once "credentials.php";
$data = generatePasskey('sql');
$connection = new mysqli("localhost", $data[0], $data[1], $data[2]);
if ($connection->connect_error) {
    die("La conexión a la base de datos falló: " . $connection->connect_error);
} #else {
    #echo ("Conexión establecida"); # Confirmación de conexión
#}
?>