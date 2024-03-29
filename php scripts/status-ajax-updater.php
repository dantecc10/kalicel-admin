<?php
session_start();
if (empty($_SESSION['ID'])) {
    header("Location: ../login.php");
} else {
    include_once "functions.php";
    include_once "connection.php";

    $stmt = $connection->prepare("SELECT `status_fix_order` FROM `fix_orders` WHERE `id_fix_order` = ?;");
    $stmt->bind_param("i", $_POST['target_id']);

    // Ejecutar la consulta preparada
    if ($stmt->execute()) {
        $result = $stmt->get_result();
        if ($result->num_rows == 1) {
            // El registro existe, obtener el valor del status
            $row = $result->fetch_assoc();
            $status = $row['status_fix_order'];

            $stmt_update = $connection->prepare("UPDATE `fix_orders` SET (`status_fix_order` = ?) WHERE (`id_fix_order` = ?);");
            $status = ($status == 3) ? 1 : ++$status;
            $stmt_update->bind_param("ii", $_POST['target_id'], $status);
            echo ($stmt_update->execute()) ? "success" : "error";
        } else {
            echo "error";
        }
    } else {
        echo "error";
    }


    // Cerrar la conexión
    $stmt->close();
    $connection->close();
}
