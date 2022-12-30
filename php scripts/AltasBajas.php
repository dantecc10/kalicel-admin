<?php
include "php scripts/Conexión.php";

$id = $_GET['id'];
$cantidad = $_GET['cantidad'];
$operación = strval($_GET['operación']);
# $usuario = strval($_GET['usuario']);

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
// Actualización de la cantidad de displays
$consulta = ("UPDATE displays SET cantidad_display = " . $nuevaCantidad . " WHERE id_display= " . $id);

# $sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

echo $consulta;

if ($conexión->connect_error) {
    die("Connection failed: " . $conexión->connect_error);
}

$resultado = mysqli_query($conexión, $consulta) or die("No se ejecutó la çonsulta de actualización...");



if ($conexión->query($consulta) === TRUE) {
    echo "Actualización exitosa";
} else {
    echo "Error en la actualización del registro: : " . $conexión->error;
}

$conexión->close();



// Registro de edición en la actividad de usuarios (historial de seguridad)
# $consulta = ("UPDATE `displays` SET `cantidad_display` = $nuevaCantidad WHERE `id_display`= " . $id);
# echo $consulta;
# $resultado = mysqli_query($conexión, $consulta) or die("No se ejecutó la çonsulta de actualización...");

echo ($nuevaCantidad);
