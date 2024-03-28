<?php
function generatePasskey($turing)
{
    switch ($turing) {
        case 'notifier':
            $turing = "ComercialCCNotifier23!!";
            $fromSettings = "Notificaciones - Comercial";
            $emailSettings = "notificaciones@comercial.castelancarpinteyro.com";
            break;
        /*
		case 'auth':
            $turing = "Authentica23!!";
            $fromSettings = "Verificación";
            $emailSettings = "autentica@comercial.castelancarpinteyro.com";
            break;
		*/
        case 'sql':
            $db = new mysqli("localhost", "kalicel", "kalicelrepair", "kalicel");
            $sqlRequest = true;
            $user = "kalicel";
            $turing = "kalicelrepair";
            $database = "kalicel";
            break;
        default:
            echo ("Se ha producido un error en la ejecución o los parámetros recibidos son incorrectos");
            break;
    }
    if ((isset($sqlRequest)) && ($sqlRequest == true)) {
        //echo ($user . " " . $turing . " " . $database); // Debug 🐞
        return array($user, $turing, $database, $db);
    } else {
        return array($turing, $fromSettings, $emailSettings);
    }
}

if (isset($_GET['turing'])) {
    $data = generatePasskey($_GET['turing']);
    // echo ($data[0] . " " . $data[1] . " " . $data[2]); // Debug command line
}