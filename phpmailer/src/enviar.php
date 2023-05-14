<?php

include "configuracion-de-correo.php";

$mail->ClearAllRecipients();

$mail->AddAddress("dante@castelancarpinteyro.com");
$mail->AddCC("concopia1@email.com");
$mail->AddCC("concopia2@email.com");

$mail->IsHTML(true);  //podemos activar o desactivar HTML en mensaje
$mail->Subject = 'Ping Test';

$msg = "<h2>Heil Hitler!</h2>
<p>Ping</p>
<p>Y más ping...</p>
";

$mail->Body = $msg;
$mail->Send();