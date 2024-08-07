<?php
session_start();
if (!isset($_SESSION['ID'])) {
    header("Location: login.php");
} else {

    include_once "connection.php";
    $stmt = $connection->prepare("INSERT INTO `fix_orders` VALUES ('', ?, ?, 1, ?, ?, ?, ?, CURDATE(), CURTIME(), ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssiddsss", $_POST["brand"], $_POST["model"], $_POST["customer"], $_POST["mobile"], $_POST["email"], $_SESSION['ID'], $_POST["cost"], $_POST["paid_amount"], $_POST["fail"], $_POST["work"], $_POST["comments"]);

    // Ejecutar la consulta preparada
    if ($stmt->execute()) {
        //echo "Inserción exitosa";
        $_SESSION['added-id'] = $connection->insert_id;
        header("Location: Reparaciones.php");
    } else {
        //echo "Error al insertar datos: " . $stmt->error;
    }

    // Cerrar la conexión
    $stmt->close();
    $connection->close();
}
