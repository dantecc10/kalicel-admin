<?php
if (!empty($_POST['InicioSesión'])) {
    if (!empty($_POST['email']) and !empty($_POST['contraseña'])) {
        $email = $_POST['email'];
        $contraseña = $_POST['contraseña'];
        $sql = $conexión->query("SELECT * FROM `usuarios` WHERE `email`='$email' AND `contraseña`='$contraseña'");
        if ($datos = $sql->fetch_object()) {
            session_start();
            $_SESSION['ID'] = $datos->id_usuario;
            $_SESSION['Nombre'] = $datos->nombre_usuario;
            $_SESSION['Apellidos'] = $datos->apellidos_usuario;
            #$_SESSION['Privilegios'] = $datos->Privilegios;
            $_SESSION['Email'] = $datos->email_usuario;
            header("location: /Displays.php");
        } else {
            #echo "<div>Acceso denegado<div>";
            header("location: https://castelancarpinteyro.club");
        }
    } else {
        echo "Campos vacíos";
    }
} else {
    header("location: https://castelancarpinteyro.club");
}
