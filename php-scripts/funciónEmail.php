<?php
function enviarEmail($destinatario, $remitente, $asunto, $mensaje)
{
    include('Mail.php');
    $origenDestino = "From: $remitente" . " /r/n" . "CC: " . $destinatario;
    mail($destinatario, $asunto, $mensaje, $origenDestino);
}

enviarEmail('dantecc10@gmail.com', 'notificaciones@kalicel.castelancarpinteyro.club', 'Esto deberia llegar de inmediato', 'Saludos desde un correo del servidor, licenciado Juan Carlos.');
#$para = 'jeremy.hdez9@gmail.com';
#$asunto = 'Prueba 1';
#$mensaje = '¿Ves esto?';
#mail($para, $asunto, $mensaje, $remitente);
#echo $para . $asunto . $mensaje . $remitente;
