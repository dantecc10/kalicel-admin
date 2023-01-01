<?php
$to = 'valecc666@gmail.com'; # Destinatario


$from = 'notificaciones@kalicel.castelancarpinteyro.club'; # Remitente del correo
$fromName = 'Nerd Pizza'; # Remitente del correo (nombre)

$subject = 'Correo electrónico PHP con datos adjuntos de BaulPHP'; # Asunto del email

$file = "../Manifiesto del Partido Comunista (Carlos Marx y Federico Engels) (z-lib.org).pdf"; # Ruta del archivo adjunto

//Contenido del Email
$htmlContent = ("<h1>Hola Jeremías</h1>
    <p>La destitución y detención de Pedro Castillo me dejó con mucha furia comunista, así que decidí enviarte el Manifiesto del Partido Comunista.</p>
    <p>Este correo fue enviado para tí desde el server, a través de un nuevo script que puedes comprobar desde <a href='equipo1.prog5a.com/enviarArchivoEmail.php'>este link</a>. Podremos usarlo para muchas cosas, de momento <i>no le menies</i></p>");

//Encabezado para información del remitente
$headers = "De: $fromName" . " <" . $from . ">";

//Limite Email
$semi_rand = md5(time());
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

//Encabezados para archivo adjunto 
$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";

//límite multiparte
$message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
    "Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n";

//preparación de archivo
if (!empty($file) > 0) {
    if (is_file($file)) {
        $message .= "--{$mime_boundary}\n";
        $fp =    @fopen($file, "rb");
        $data =  @fread($fp, filesize($file));

        @fclose($fp);
        $data = chunk_split(base64_encode($data));
        $message .= "Content-Type: application/octet-stream; name=\"" . basename($file) . "\"\n" .
            "Content-Description: " . basename($files[$i]) . "\n" .
            "Content-Disposition: attachment;\n" . " filename=\"" . basename($file) . "\"; size=" . filesize($file) . ";\n" .
            "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
    }
}
$message .= "--{$mime_boundary}--";
$returnpath = "-f" . $from;

//Enviar EMail
$mail = @mail($to, $subject, $message, $headers, $returnpath);

//Estado de envío de correo electrónico
echo $mail ? "<h1>Correo enviado.</h1>" : "<h1>El envío de correo falló.</h1>";
