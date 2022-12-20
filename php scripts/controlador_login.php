<?php
if (!empty($_POST['InicioSesión'])) {
    if (!empty($_POST['email']) and !empty($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        include "Conexión.php";
        $sql = $conexión->query("SELECT * FROM `usuarios` WHERE `email_usuario`='$email' AND `contraseña_usuario`='$password'");
        if ($datos = $sql->fetch_object()) {
            session_start();
            $_SESSION['ID'] = $datos->id_usuario;
            $_SESSION['Nombre'] = $datos->nombre_usuario;
            $_SESSION['Apellidos'] = $datos->apellidos_usuario;
            #$_SESSION['Privilegios'] = $datos->Privilegios;
            $_SESSION['Email'] = $datos->email_usuario;
            header("location: ../Displays.php");
        } else {
            #echo "<div>Acceso denegado<div>";
            header("location: https://castelancarpinteyro.club");
        }
    } else {
        echo "Campos vacíos";
    }
}#
