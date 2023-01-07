<?php

require '../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../phpmailer/src/PHPMailer.php';
require '../phpmailer/src/SMTP.php';
require '../phpmailer/src/Exception.php';


try {
	//Create an instance; passing `true` enables exceptions
	$mail = new PHPMailer(true);
	//Server settings
	$mail->SMTPDebug = SMTP::DEBUG_SERVER;
	SMTP::DEBUG_OFF;                   //Enable verbose debug output
	$mail->isSMTP();                                                             //Send using SMTP
	$mail->Host = "smtp.ionos.mx"; // GMail
	$mail->SMTPAuth = true;                                                    //Enable SMTP authentication
	$mail->Username = 'notificaciones@kalicel.castelancarpinteyro.club';                     //SMTP username
	$mail->Password = 'kalicelNotificaciones';                               //SMTP password
	$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
	$mail->Port = 587;  //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

	//Recipients
	$mail->setFrom('notificaciones@kalicel.castelancarpinteyro.club', 'Kalicel Admin');
	$mail->addAddress('lerf435@gmail.com', 'Luis Enrique');     //Add a recipient
	$mail->addAddress('rosalba.171098@gmail.com', 'Rosalba Nazareth');     //Add a recipient
	$mail->addAddress('dantecc10@gmail.com', 'Dante');     //Add a recipient
	$mail->addReplyTo('notificaciones@kalicel.castelancarpinteyro.club', 'Kalicel');

	/*
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->setFrom('no-reply@prueba-pagos.castelancarpinteyro.club', 'Tienda online');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com'); 
    */

	/*    //Envio de archivos
    $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg'); */    //Optional name

	//Content
	$mail->isHTML(true);                                  //Set email format to HTML
	$mail->Subject = 'Alerta de operación';
	$cuerpo = ("
    <!DOCTYPE html>
<html>

<head>
	<meta charset='utf-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1.0, shrink-to-fit=no'>
	<title>Profile - Kalicel</title>
	<meta name='description'
		content='Sistema de administración web de reparaciones, estados de pedidos, e interacción con el cliente.'>
	<link rel='icon' type='image/png' sizes='3264x3264' href='assets/img/ícono-Kalicel.png'>
	<link rel='icon' type='image/png' sizes='3264x3264' href='assets/img/ícono-Kalicel.png'>
	<link rel='icon' type='image/png' sizes='3264x3264' href='assets/img/ícono-Kalicel.png'>
	<link rel='icon' type='image/png' sizes='3264x3264' href='assets/img/ícono-Kalicel.png'>
	<link rel='icon' type='image/png' sizes='3264x3264' href='assets/img/ícono-Kalicel.png'>
	<link rel='stylesheet' href='assets/bootstrap/css/bootstrap.min.css'>
	<link rel='stylesheet'
		href='https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap'>
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.12.0/css/all.css'>
	<link rel='stylesheet' href='assets/css/styles.min.css'>
</head>

<body id='page-top'>
	<div id='wrapper'>
		<nav class='navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0'
			style='background: var(--bs-kalicel-rojo);'>
			<div class='container-fluid d-flex flex-column p-0'><a
					class='navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0' href='#'>
					<div class='visible sidebar-brand-icon' data-bs-toggle='tooltip' data-bss-tooltip=''></div>
					<div class='sidebar-brand-text mx-3'><span>Kalicel</span></div>
				</a>
				<hr class='sidebar-divider my-0'>
				<ul class='navbar-nav text-light' id='accordionSidebar'>
					<li class='nav-item'><a class='nav-link' href='index.php'><i
								class='fas fa-tachometer-alt'></i><span>Panel</span></a></li>
					<li class='nav-item'><a class='nav-link' href='profile.php'><i
								class='fas fa-user'></i><span>Perfil</span></a></li>
					<li class='nav-item'><a class='nav-link' href='Reparaciones.php'><i
								class='fas fa-table'></i><span>Reparaciones</span></a></li>
					<li class='nav-item'><a class='nav-link' href='Inventario.php'><i
								class='fas fa-mobile-alt'></i><span>Inventario</span></a></li>
					<li class='nav-item'><a class='nav-link' href='login.php'><i
								class='far fa-user-circle'></i><span>Inicio de sesión</span></a></li>
					<li class='nav-item'><a class='nav-link' href='register.html'><i
								class='fas fa-user-circle'></i><span>Registrarse</span></a></li>
				</ul>
				<div class='text-center d-none d-md-inline'><button class='btn rounded-circle border-0'
						id='sidebarToggle' type='button'></button></div>
			</div>
		</nav>
		<div class='d-flex flex-column' id='content-wrapper'>
			<div id='content'>
				<div class='container-fluid'>
					<hr>
					<h3 class='text-dark mb-4'>Notificación</h3>
					<div class='row mb-3'>
						<div class='col-lg-12 col-xl-12 col-xxl-12'>
							<div class='card mb-3'></div>
							<div class='card shadow'>
								<div class='card-header py-3'>
									<p class='text-primary m-0 fw-bold'>Detalles</p>
								</div>
								<div class='card-body'>
									<div class='table-responsive table mt-2' id='dataTable-1' role='grid'
										aria-describedby='dataTable_info'>
										<table class='table my-0' id='dataTable'>
											<thead>
												<tr>
													<th>Autor</th>
													<th>Acción</th>
													<th>Descripción</th>
													<th>Fecha</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><img class='rounded-circle me-2' width='30' height='30'
															src='assets/img/avatars/avatar" . $claveAutor . ".png'>" . $autor . "</td>
													<td>" . $acción . "</td>
													<td>" . ucfirst($acción) . " de " . $modelo . " - " . $marca . " (display); color " . lcfirst($color) . ".</td>
													<td>" . time() . "<br></td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<td><strong>Autor</strong></td>
													<td><strong>Acción</strong></td>
													<td><strong>Descripción</strong></td>
													<td><strong>Fecha</strong></td>
												</tr>
											</tfoot>
										</table>
									</div>
								</div>
							</div>
							<!--
							<div class='card shadow mb-4'>
								<div class='card-header py-3'>
									<h6 class='text-primary fw-bold m-0'>Notificaciones</h6>
								</div>
								<div class='card-body'>
									<h4 class='small fw-bold'>Altas de displays<span class='float-end'>5 - 20%</span>
									</h4>
									<div class='progress progress-sm mb-3'>
										<div class='progress-bar bg-danger' aria-valuenow='20' aria-valuemin='0'
											aria-valuemax='100' style='width: 20%;'><span
												class='visually-hidden'>20%</span></div>
									</div>
									<h4 class='small fw-bold'>Baja de displays<span class='float-end'>6 - 40%</span>
									</h4>
									<div class='progress progress-sm mb-3'>
										<div class='progress-bar bg-warning' aria-valuenow='40' aria-valuemin='0'
											aria-valuemax='100' style='width: 40%;'><span
												class='visually-hidden'>40%</span></div>
									</div>
									<h4 class='small fw-bold'>Recepción de equipo<span class='float-end'>7 - 60%</span>
									</h4>
									<div class='progress progress-sm mb-3'>
										<div class='progress-bar bg-primary' aria-valuenow='60' aria-valuemin='0'
											aria-valuemax='100' style='width: 60%;'><span
												class='visually-hidden'>60%</span></div>
									</div>
									<h4 class='small fw-bold'>Cobro de servicios<span class='float-end'>9 - 80%</span>
									</h4>
									<div class='progress progress-sm mb-3'>
										<div class='progress-bar bg-info' aria-valuenow='80' aria-valuemin='0'
											aria-valuemax='100' style='width: 80%;'><span
												class='visually-hidden'>80%</span></div>
									</div>
									<h4 class='small fw-bold'>Total<span class='float-end'>34 - 100%</span></h4>
									<div class='progress progress-sm mb-3'>
										<div class='progress-bar bg-success' aria-valuenow='100' aria-valuemin='0'
											aria-valuemax='100' style='width: 100%;'><span
												class='visually-hidden'>100%</span></div>
									</div>
								</div>
							</div>
							-->
						</div>
					</div>
				</div>
			</div>
			<footer class='bg-white sticky-footer'>
				<div class='container my-auto'>
					<div class='text-center my-auto copyright'><span>Copyright © Kalicel 2022</span></div>
				</div>
			</footer>
		</div><a class='border rounded d-inline scroll-to-top' href='#page-top'><i class='fas fa-angle-up'></i></a>
	</div>
	<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js'></script>
	<script src='https://geodata.solutions/includes/countrystate.js'></script>
	<script src='assets/js/script.min.js'></script>
</body>

</html>
    ");
	$mail->Body    = imap_utf8($cuerpo);
	$mail->AltBody = 'Servicio de notificaciones del panel de administrador de Kalicel.';

	$mail->setLanguage('es', '../phpmailer/language/phpmailer.lang-es.php');

	$mail->send();
} catch (Exception $e) {
	echo "Error al enviar el correo electrónico de la compra: {$mail->ErrorInfo}";
	exit;
}
