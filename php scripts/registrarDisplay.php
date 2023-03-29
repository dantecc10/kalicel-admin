<?php
session_start();
if (empty($_SESSION['ID'])) {
    header("Location: login.php");
}

$modelo = $_POST['modelo'];
$marca = $_POST['marca'];
$color = $_POST['color'];
$caja = intval($_POST['caja']);
$cantidad = $_POST['cantidad'];
$calidad = $_POST['calidad'];
$versión = $_POST['versión'];

$conexión = new mysqli("localhost", "kalicel", "kalicelrepair", "kalicel");
$sql = $conexión->query("INSERT INTO `displays` VALUES('', '$modelo', '$marca', '$color', $cantidad, '$calidad', '$versión', $caja)");
