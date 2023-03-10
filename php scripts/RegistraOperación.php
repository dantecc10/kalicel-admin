<?php
session_start();
#if (empty($_SESSION['ID'])) {
#    header("Location: ../login.php");
#}
include "Conexión.php";

$id = $_GET['id']; // No es necesario por configuración de id autoincremental

$folio = $id;
$nombre = $_GET['nombre'];
$teléfono = $_GET['teléfono'];
$marca = $_GET['marca'];
$modelo = $_GET['modelo'];
$falla = $_GET['falla'];
$trabajo = $_GET['trabajo'];
$status = $_GET['status'];
$cotización = $_GET['cotización'];
$abono = $_GET['abono'];
$estadoPrevio = $_GET['estadoPrevio'];
$email = $_GET['email'];
$fecha = $_GET['fecha'];
$recibió = $_GET['recibió'];
$comentarios = $_GET['comentarios'];

$operación = strval($_GET['operación']); // Recibir valor "Recepción"

# $usuario = strval($_GET['usuario']);

$autor = $_SESSION['Nombre'];

$conexión = mysqli_connect("localhost", "kalicel", "kalicelrepair", "kalicel");

$consulta = "SELECT * FROM `displays` WHERE `id_display` = $id";
$resultado = mysqli_query($conexión, $consulta) or die("Error en la consulta a la base de datos");

while ($columna = mysqli_fetch_array($resultado)) {
    $datosDisplay['Marca'] = $columna['modelo_display'];
    $datosDisplay['Modelo'] = $columna['marca_display'];
    $datosDisplay['Color'] = $columna['color_display'];
}

function crearOperación($clave, $acción, $autor, $marca, $modelo, $color)
{
    $sql = ("INSERT INTO `operaciones` VALUES ('', '" . ucfirst($acción) . "', '" . ucfirst($acción) . " de $modelo - $marca (display); color " . lcfirst($color) . ".', '$autor', current_timestamp)");
    return $sql; //"INSERT INTO `operaciones` VALUES('', 'Prueba de script', 'Estoy insertando operaciones de prueba', '$autor', current_timestamp)";
}

switch ($operación) {
    case 'alta':
        $nuevaCantidad = ($cantidad + 1);
        $registraOperación = crearOperación($id, "alta", $autor, $datosDisplay['Marca'], $datosDisplay['Modelo'], $datosDisplay['Color']);
        break;
    case 'baja':
        $nuevaCantidad = ($cantidad - 1);
        $registraOperación = crearOperación($id, "baja", $autor, $datosDisplay['Marca'], $datosDisplay['Modelo'], $datosDisplay['Color']);
        break;
    default:
        header("location: FallaSwitchActualización.php");
        break;
}
// Actualización de la cantidad de displays
$modificaCantidad = ("UPDATE displays SET cantidad_display = $nuevaCantidad WHERE id_display = $id");

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
