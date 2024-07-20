<?php
if (!empty($_POST['InicioSesión'])) {
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        #include "php scripts/Conexión.php";
        $conexión = new mysqli("localhost", "kalicel", "kalicelrepair", "kalicel");
        $sql = $conexión->query("SELECT * FROM `usuarios` WHERE `email_usuario`='$email' AND `contraseña_usuario`='$password'");
        if ($datos = $sql->fetch_object()) {
            session_start();
            $_SESSION['ID'] = $datos->id_usuario;
            $_SESSION['Nombre'] = $datos->nombre_usuario;
            $_SESSION['Apellidos'] = $datos->apellidos_usuario;
            #$_SESSION['Privilegios'] = $datos->Privilegios;
            $_SESSION['Email'] = $datos->email_usuario;
            //header("location: ../Inventario.php");
        } else {
            #echo "<div>Acceso denegado<div>";
            $mensajeDante = ("Hola Dante, he intentado iniciar con las siguientes credenciales al administrador de Kalicel y no he podido ingresar; ¿son correctas?:
            - Usuario: $email
            - Contraseña: $password");
            $mensajeDante = urlencode($mensajeDante);
            header("location: https://wa.me/527979773095?text=$mensajeDante");
            #header("location: mailto:dantecc10@gmail.com");
        }
    } else {
        //header("Location: ../login.php");
    }
}
