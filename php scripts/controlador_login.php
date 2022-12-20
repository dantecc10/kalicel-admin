<?php
session_start();
if (!empty($_POST['InicioSesión'])) {
    if (!empty($_POST['email']) and !empty($_POST['contraseña'])) {
        $email = $_POST['email'];
        $contraseña = $_POST['contraseña'];
        $sql = $conexión->query("SELECT * FROM `usuarios` WHERE `email`='$email' AND `Contraseña`='$contraseña'");
        if ($datos = $sql->fetch_object()) {
            $_SESSION['ID'] = $datos->ID;
            $_SESSION['Nombre'] = $datos->Nombre;
            $_SESSION['Apellidos'] = $datos->Apellidos;
            $_SESSION['Privilegios'] = $datos->Privilegios;
            $_SESSION['Email'] = $datos->Email;
            header("location: ../Consulta.php");
        } else {
            echo "<div>Acceso denegado<div>";
        }
    } else {
        echo "Campos vacíos";
    }
}
