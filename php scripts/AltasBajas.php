<?php
include "php scripts/Conexión.php";

$id = $_GET['id'];
$cantidad = $_GET['cantidad'];
$operación = strval($_GET['operación']);
# $usuario = strval($_GET['usuario']);

switch ($operación) {
    case 'alta':
        $nuevaCantidad = ($cantidad + 1);
        $registraOperación = crearOperación($id, "alta", $_SESSION['Nombre']);
        break;
    case 'baja':
        $nuevaCantidad = ($cantidad - 1);
        $registraOperación = crearOperación($id, "baja", $_SESSION['Nombre']);
        break;
    default:
        header("location: FallaSwitchActualización.php");
        break;
}
// Actualización de la cantidad de displays
$modificaCantidad = ("UPDATE displays SET cantidad_display = $nuevaCantidad WHERE id_display = $id");

function crearOperación($clave, $acción, $autor)
{
    return "INSERT INTO `operaciones` VALUES('', 'Prueba de script', 'Estoy insertando operaciones de prueba', '$autor', current_timestamp)";
}


$conexión = new mysqli("localhost", "kalicel", "kalicelrepair", "kalicel");

if ($conexión->connect_error) {
    die("Connection failed: " . $conexión->connect_error);
}


$conexión->query($modificaCantidad);
$conexión->query($registraOperación);
#echo $modificaCantidad;


//$resultado = mysqli_query($conexión, $modificaCantidad) or die("No se ejecutó la çonsulta de actualización...");

if ($conexión->query($modificaCantidad) === TRUE) {
    #echo "Actualización exitosa";
} else {
    #echo "Error en la actualización del registro: : " . $conexión->error;
}

$conexión->close();

echo ($nuevaCantidad);


// Registro de edición en la actividad de usuarios (historial de seguridad)
# $modificaCantidad = ("UPDATE `displays` SET `cantidad_display` = $nuevaCantidad WHERE `id_display`= " . $id);
# echo $modificaCantidad;
# $resultado = mysqli_query($conexión, $modificaCantidad) or die("No se ejecutó la çonsulta de actualización...");
