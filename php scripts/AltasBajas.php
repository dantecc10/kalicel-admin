<?php
include "php scripts/Conexión.php";

$id = $_GET['id'];
$cantidad = $_GET['cantidad'];
$operación = strval($_GET['operación']);

switch ($operación) {
    case 'alta':
        $nuevaCantidad = ($cantidad + 1);
        break;
    case 'baja':
        $nuevaCantidad = ($cantidad - 1);
        break;

    default:
        header("location: FallaSwitchActualización.php");
        break;
}

$consulta = ("UPDATE `displays` SET `cantidad_display` = '$nuevaCantidad' WHERE `id_display`= '" . $id . "'");

$resultado = mysqli_query($conexión, $consulta) or die("No se ejecutó la çonsulta de actualización...");

echo ($nuevaCantidad);