<?php
include "php scripts/Conexión.php";

$id = $_GET['id'];
$cantidad = $_GET['cantidad'];
$operación = strval($_GET['operación']);
//  $ModoFiltro = ($_GET['ModoFiltro']);
$sql;

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

mysqli_query($conexión, $consulta);

echo ($nuevaCantidad);
