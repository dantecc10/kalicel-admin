<?php
session_start();
#if (empty($_SESSION['ID'])) {
#    header("Location: ../login.php");
#}
include "Conexión.php";

$id = $_GET['id'];
$cantidad = $_GET['cantidad'];
$operación = strval($_GET['operación']);
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

    #switch ($autor) {
    #    case 'Luis Enrique':
    #        $claveAutor = 1;
    #        break;
    #    case 'Rosalba Nazareth':
    #        $claveAutor = 2;
    #        break;
    #    case 'Dante':
    #        $claveAutor = 3;
    #        break;
    #
    #    default:
    #        echo "Fatal al elegir autor de sesión...";
    #        break;
    #}

    #include "enviar_email.php";

    return $sql; //"INSERT INTO `operaciones` VALUES('', 'Prueba de script', 'Estoy insertando operaciones de prueba', '$autor', current_timestamp)";
}

switch ($operación) {
    case 'alta':
        $nuevaCantidad = ($cantidad + 1);
        $registraOperación = crearOperación($id, "alta", $autor, $datosDisplay['Marca'], $datosDisplay['Modelo'], $datosDisplay['Color']);
        modificacionesRegistros($nuevaCantidad, $id, $registraOperación);
        break;
    case 'baja':
        $nuevaCantidad = ($cantidad - 1);
        $registraOperación = crearOperación($id, "baja", $autor, $datosDisplay['Marca'], $datosDisplay['Modelo'], $datosDisplay['Color']);
        modificacionesRegistros($nuevaCantidad, $id, $registraOperación);
        break;
    default:
        header("location: FallaSwitchActualización.php");
        break;
}

//Esta función busca preparar este archivo de PHP [backend] para poder no sólo realizar las bajas y
//bajas de productos manuales con botones, sino también dar la opción de reciclar este script para
//crear nuevos registros en la base de datos de refacciones
function modificacionesRegistros($nuevaCantidad, $id, $registraOperación)
{
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
}
