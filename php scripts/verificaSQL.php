<?php
//************* script conexion mysql ********** //
function Conectarse()
{
    $host = 'localhost';
    $usuariodb = 'kalicel';
    $passwdb = 'kalicelrepair';
    $nombredb = 'kalicel';

    if (!($link = mysqli_connect($host, $usuariodb, $passwdb))) {
        echo "Error conectando a la base de datos.";
        exit();
    }
    #if (!mysqli_select_db($nombredb, $link)) {
    #    echo "Error seleccionando la base de datos, verifique que el nombre de usuario utilizado este asociado a la base de datos.";
    #    exit();
    #}
    return $link;
}

$link = Conectarse();
echo "Conexión con la base de datos conseguida.
";
mysqli_close($link); //cierra la conexion
//************* script conexión mysql **********//
