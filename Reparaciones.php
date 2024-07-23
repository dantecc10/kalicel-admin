<?php
session_start();
if (empty($_SESSION['ID'])) {
    header("Location: login.php");
}
include_once "php-scripts/functions.php";

//include "php-scripts/Conexión.php";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Kalicel Admin - Reparaciones</title>
    <meta name="description" content="Consulta el status de las reparaciones, la información de clientes y diagnósticos.">
    <link rel="icon" type="image/png" sizes="3264x3264" href="assets/img/ícono-Kalicel.png">
    <link rel="icon" type="image/png" sizes="3264x3264" href="assets/img/ícono-Kalicel.png">
    <link rel="icon" type="image/png" sizes="3264x3264" href="assets/img/ícono-Kalicel.png">
    <link rel="icon" type="image/png" sizes="3264x3264" href="assets/img/ícono-Kalicel.png">
    <link rel="icon" type="image/png" sizes="3264x3264" href="assets/img/ícono-Kalicel.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="assets/css/Application-Form.css">
    <link rel="stylesheet" href="assets/css/extra.css">
</head>

<body id="page-top"> 
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background: var(--bs-kalicel-rojo);">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="visible sidebar-brand-icon" data-bs-toggle="tooltip" data-bss-tooltip=""><img src="assets/img/ícono-Kalicel.png" width="40%"></div>
                    <div class="sidebar-brand-text mx-3"><span>Kalicel</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link" href="index.php"><i class="fas fa-tachometer-alt"></i><span>Panel</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="profile.php"><i class="fas fa-user"></i><span>Perfil</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="Reparaciones.php"><i class="fas fa-table"></i><span>Reparaciones</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="Inventario.php"><i class="fas fa-mobile-alt"></i><span>Inventario</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php"><i class="far fa-user-circle"></i><span>Inicio de sesión</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="register.html"><i class="fas fa-user-circle"></i><span>Registrarse</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Buscar"><button class="btn btn-primary py-0" type="button" style="background-color: var(--bs-kalicel-rojo);"><i class="fas fa-search"></i></button></div>
                        </form>
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <li class="nav-item dropdown show d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu show dropdown-menu-end p-3 animated--grow-in" data-bs-popper="none" aria-labelledby="searchDropdown">
                                    <form class="me-auto navbar-search w-100">
                                        <div class="input-group"><input class="form-control bg-light border-0 small" type="text" placeholder="Buscar...">
                                            <div class="input-group-text input-group-append"><button class="btn btn-primary py-0" type="button" style="background-color: var(--bs-kalicel-rojo);"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" href="#" aria-expanded="false" data-bs-toggle="dropdown"><span class="badge bg-danger badge-counter">3+</span><i class="fas fa-bell"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                        <h6 class="dropdown-header">Heading</h6><a class="dropdown-item d-flex align-items-center" href="#">Link<div class="me-3">
                                                <div class="bg-primary icon-circle"><i class="far fa-star far fa-file-alt text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">Text</span>
                                                <p>Paragraph</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">Link<div class="me-3">
                                                <div class="bg-primary icon-circle"><i class="far fa-star far fa-file-alt text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">Text</span>
                                                <p>Paragraph</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">Link<div class="me-3">
                                                <div class="bg-primary icon-circle"><i class="far fa-star far fa-file-alt text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">Text</span>
                                                <p>Paragraph</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">Link<div class="me-3">
                                                <div class="bg-primary icon-circle"><i class="far fa-star far fa-file-alt text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">Text</span>
                                                <p>Paragraph</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" href="#" aria-expanded="false" data-bs-toggle="dropdown"><span class="badge bg-danger badge-counter">7</span><i class="fas fa-envelope"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                        <h6 class="dropdown-header">Heading</h6><a class="dropdown-item d-flex align-items-center" href="#">Link<div class="dropdown-list-image me-3"><img class="rounded-circle" src="">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>Text</span></div>
                                                <p class="small text-gray-500 mb-0">Paragraph</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">Link<div class="dropdown-list-image me-3"><img class="rounded-circle" src="">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>Text</span></div>
                                                <p class="small text-gray-500 mb-0">Paragraph</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">Link<div class="dropdown-list-image me-3"><img class="rounded-circle" src="">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>Text</span></div>
                                                <p class="small text-gray-500 mb-0">Paragraph</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">Link<div class="dropdown-list-image me-3"><img class="rounded-circle" src="">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>Text</span></div>
                                                <p class="small text-gray-500 mb-0">Paragraph</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">Link<div class="dropdown-list-image me-3"><img class="rounded-circle" src="">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>Text</span></div>
                                                <p class="small text-gray-500 mb-0">Paragraph</p>
                                            </div>
                                        </a><a class="dropdown-item text-center small text-gray-500" href="#">Link</a>
                                    </div>
                                </div>
                                <div class="shadow dropdown-list dropdown-menu dropdown-menu-end" aria-labelledby="alertsDropdown"></div>
                            </li>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" href="#" aria-expanded="false" data-bs-toggle="dropdown"><span class="d-none d-lg-inline me-2 text-gray-600 small">Text</span><img class="rounded-circle img-fluid border img-profile" src="assets/img/avatars/3.png"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="#">Link<i class="far fa-star"></i></a><a class="dropdown-item" href="#">Link<i class="far fa-star"></i></a><a class="dropdown-item" href="#">Link<i class="far fa-star"></i></a><a class="dropdown-item" href="#">Link<i class="far fa-star"></i></a></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <div class="row align-middle align-self-center align-items-center">
                        <div class="col col-12 text-center col-lg-8">
                            <h1 class="text-dark m-0" style="color: var(--bs-kalicel-rojo) !important;font-weight: 700;">Reparaciones</h1>
                        </div>
                        <div class="col p-1 d-flex justify-content-center col-12 col-lg-4">
                            <!-- Start: Basic Modal Button --><button class="btn btn-primary fw-bold col-10" type="button" data-bs-toggle="modal" data-bs-target="#modal-1" style="background-color: var(--bs-kalicel-rojo);"><i class="fas fa-tools"></i>&nbsp;Añadir reparación</button><!-- End: Basic Modal Button -->
                        </div>
                    </div>
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold" style="color: var(--bs-kalicel-rojo) !important;">Información de reparaciones</p>
                            <div>
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item" role="presentation"><a class="nav-link active" role="tab" data-bs-toggle="tab" href="#tab-1">Todas</a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="tab" href="#tab-2">Pendiente</a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="tab" href="#tab-3">Listo</a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="tab" href="#tab-4">Entregado</a></li>
                                </ul>
                                <div class="tab-content">
                                    <?php
                                    echo (table_builder('todos'));
                                    ?>
                                    <div class="tab-pane" role="tabpanel" id="tab-2">
                                        <div class="row py-2">
                                            <div class="col align-items-center">
                                                <div class="input-group col-8"><span class="input-group-text p-1" style="font-size: small"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" fill="currentColor">
                                                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                            <path d="M3.853 54.87C10.47 40.9 24.54 32 40 32H472C487.5 32 501.5 40.9 508.1 54.87C514.8 68.84 512.7 85.37 502.1 97.33L320 320.9V448C320 460.1 313.2 471.2 302.3 476.6C291.5 482 278.5 480.9 268.8 473.6L204.8 425.6C196.7 419.6 192 410.1 192 400V320.9L9.042 97.33C-.745 85.37-2.765 68.84 3.854 54.87L3.853 54.87z"></path>
                                                        </svg></span><input class="form-control" type="search" placeholder="Buscar reparación"></div>
                                            </div>
                                        </div>
                                        <div class="table-responsive table mt-2" id="dataTable-2" role="grid" aria-describedby="dataTable_info">
                                            <table class="table my-0 text-center" id="dataTable">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Equipo</th>
                                                        <th style="min-width: 110px !important;">Status</th>
                                                        <th class="col-1">Cliente</th>
                                                        <th>Recepción</th>
                                                        <th>Cotización</th>
                                                        <th style="min-width: 300px !important;">Detalles</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="small align-middle">
                                                        <td>2</td>
                                                        <td>LG K22+</td>
                                                        <td class="pending-cell px-1 py-1">
                                                            <div class="row m-0">
                                                                <div class="col col-12 mb-1 border-0 p-0"><button class="btn btn-primary btn-status px-1 border-0 col-12 py-0" type="button" onmouseover="javascript:changeText(2, 'pendiente');" onmouseout="javascript:restore_animation(this);" onclick="javascript:get_service_id(this);"><span id="status-10" class="status-pendiente" style="font-size: smaller;">Pendiente</span></button></div>
                                                                <div class="col col-12 p-0"><button class="btn btn-primary btn-status border-0 col-12 py-0" type="button" onmouseover="javascript:changeText(1, 'pendiente');" onmouseout="javascript:resetText(1, 'pendiente');" style="background-color: yellow !important; color: darkgray !important;"><span class="text-nowrap" style="font-size: smaller;line-height: 0 !important;"><i class="fas fa-bell" style="font-size: small;"></i>&nbsp;Notificar</span></button></div>
                                                            </div>
                                                        </td>
                                                        <td class="px-3">
                                                            <div class="col">
                                                                <div class="row">
                                                                    <div class="col px-0"><span><svg xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em" height="1em" fill="currentColor" color="#25d366">
                                                                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                                                <path d="M224 122.8c-72.7 0-131.8 59.1-131.9 131.8 0 24.9 7 49.2 20.2 70.1l3.1 5-13.3 48.6 49.9-13.1 4.8 2.9c20.2 12 43.4 18.4 67.1 18.4h.1c72.6 0 133.3-59.1 133.3-131.8 0-35.2-15.2-68.3-40.1-93.2-25-25-58-38.7-93.2-38.7zm77.5 188.4c-3.3 9.3-19.1 17.7-26.7 18.8-12.6 1.9-22.4.9-47.5-9.9-39.7-17.2-65.7-57.2-67.7-59.8-2-2.6-16.2-21.5-16.2-41s10.2-29.1 13.9-33.1c3.6-4 7.9-5 10.6-5 2.6 0 5.3 0 7.6.1 2.4.1 5.7-.9 8.9 6.8 3.3 7.9 11.2 27.4 12.2 29.4s1.7 4.3.3 6.9c-7.6 15.2-15.7 14.6-11.6 21.6 15.3 26.3 30.6 35.4 53.9 47.1 4 2 6.3 1.7 8.6-1 2.3-2.6 9.9-11.6 12.5-15.5 2.6-4 5.3-3.3 8.9-2 3.6 1.3 23.1 10.9 27.1 12.9s6.6 3 7.6 4.6c.9 1.9.9 9.9-2.4 19.1zM400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM223.9 413.2c-26.6 0-52.7-6.7-75.8-19.3L64 416l22.5-82.2c-13.9-24-21.2-51.3-21.2-79.3C65.4 167.1 136.5 96 223.9 96c42.4 0 82.2 16.5 112.2 46.5 29.9 30 47.9 69.8 47.9 112.2 0 87.4-72.7 158.5-160.1 158.5z"></path>
                                                                            </svg>&nbsp;<a href="https://wa.me/527971227810">Edith Carpinteyro López</a></span></div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col"><span class="text-nowrap"><i class="fas fa-phone-square-alt" style="color: orange"></i>&nbsp;<a href="tel:7971227810" target="_blank">7971227810</a></span></div>
                                                                </div>
                                                                <div class="row px-0 mx-0">
                                                                    <div class="col px-1"><span class="text-truncate text-nowrap text-xs"><i class="fas fa-envelope-square" style="color: #1a9ce2; font-size: small !important;"></i>&nbsp;<a href="mailto:edithcarpinteyro@yahoo.com.mx" target="_blank">edithcarpinteyro@yahoo.com.mx</a></span></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="col">
                                                                <div class="row">
                                                                    <div class="col"><span class="text-nowrap"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-64 0 512 512" width="1em" height="1em" fill="currentColor">
                                                                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                                                <path d="M336 64h-53.88C268.9 26.8 233.7 0 192 0S115.1 26.8 101.9 64H48C21.5 64 0 85.48 0 112v352C0 490.5 21.5 512 48 512h288c26.5 0 48-21.48 48-48v-352C384 85.48 362.5 64 336 64zM192 64c17.67 0 32 14.33 32 32c0 17.67-14.33 32-32 32S160 113.7 160 96C160 78.33 174.3 64 192 64zM192 192c35.35 0 64 28.65 64 64s-28.65 64-64 64S128 291.3 128 256S156.7 192 192 192zM288 448H96c-8.836 0-16-7.164-16-16C80 387.8 115.8 352 160 352h64c44.18 0 80 35.82 80 80C304 440.8 296.8 448 288 448z"></path>
                                                                            </svg>&nbsp;Luis Enrique</span></div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col"><span class="text-nowrap"><i class="far fa-calendar-alt"></i>&nbsp;2024-15-03</span></div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col"><span class="text-nowrap"><i class="far fa-clock"></i>&nbsp;13:05:45</span></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="p-1">
                                                            <div class="col">
                                                                <div class="row m-0 px-0">
                                                                    <div class="col px-0"><span>$&nbsp;<input type="number" class="col-10 col-lg-6" disabled=""></span></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="p-1">
                                                            <div class="row">
                                                                <div class="col col-6 col-lg-5 align-items-center align-self-center px-1" style="min-width: 70px;"><span>Display estrellado</span>
                                                                    <hr class="m-0"><span>Cambio de display</span>
                                                                </div>
                                                                <div class="col col-6 col-lg-7 px-1" style="max-height: 100% !important; overflow-y: auto !important;"><span>Esperando refacción (touch)</span></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td><strong>#</strong></td>
                                                        <td><strong>Equipo</strong></td>
                                                        <td style="min-width: 110px !important;"><strong>Status</strong></td>
                                                        <td class="col-1"><strong>Cliente</strong></td>
                                                        <td><strong>Recepción</strong></td>
                                                        <td><strong>Cotización</strong></td>
                                                        <td style="min-width: 300px !important;"><strong>Detalles</strong></td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane" role="tabpanel" id="tab-3">
                                        <div class="row py-2">
                                            <div class="col align-items-center">
                                                <div class="input-group col-8"><span class="input-group-text p-1" style="font-size: small"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" fill="currentColor">
                                                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                            <path d="M3.853 54.87C10.47 40.9 24.54 32 40 32H472C487.5 32 501.5 40.9 508.1 54.87C514.8 68.84 512.7 85.37 502.1 97.33L320 320.9V448C320 460.1 313.2 471.2 302.3 476.6C291.5 482 278.5 480.9 268.8 473.6L204.8 425.6C196.7 419.6 192 410.1 192 400V320.9L9.042 97.33C-.745 85.37-2.765 68.84 3.854 54.87L3.853 54.87z"></path>
                                                        </svg></span><input class="form-control" type="search" placeholder="Buscar reparación"></div>
                                            </div>
                                        </div>
                                        <div class="table-responsive table mt-2" id="dataTable-3" role="grid" aria-describedby="dataTable_info">
                                            <table class="table my-0 text-center" id="dataTable">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Equipo</th>
                                                        <th style="min-width: 110px !important;">Status</th>
                                                        <th class="col-1">Cliente</th>
                                                        <th>Recepción</th>
                                                        <th>Cotización</th>
                                                        <th style="min-width: 300px !important;">Detalles</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="small align-middle">
                                                        <td>1</td>
                                                        <td>OPPO Reno 7</td>
                                                        <td class="pending-cell px-1 py-1">
                                                            <div class="row m-0">
                                                                <div class="col col-12 mb-1 border-0 p-0"><button class="btn btn-primary btn-status px-1 border-0 col-12 py-0" type="button" onmouseover="javascript:changeText(1, 'listo');" onmouseout="javascript:restore_animation(this);"><span id="status-4" class="status-listo" style="font-size: smaller;">Listo</span></button></div>
                                                                <div class="col col-12 p-0"><button class="btn btn-primary btn-status border-0 col-12 py-0" type="button" onmouseover="javascript:changeText(1, 'pendiente');" onmouseout="javascript:resetText(1, 'pendiente');" style="background-color: yellow !important; color: darkgray !important;"><span class="text-nowrap" style="font-size: smaller;line-height: 0 !important;"><i class="fas fa-bell" style="font-size: small;"></i>&nbsp;Notificar</span></button></div>
                                                            </div>
                                                        </td>
                                                        <td class="px-3">
                                                            <div class="col">
                                                                <div class="row">
                                                                    <div class="col px-0"><span><svg xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em" height="1em" fill="currentColor" color="#25d366">
                                                                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                                                <path d="M224 122.8c-72.7 0-131.8 59.1-131.9 131.8 0 24.9 7 49.2 20.2 70.1l3.1 5-13.3 48.6 49.9-13.1 4.8 2.9c20.2 12 43.4 18.4 67.1 18.4h.1c72.6 0 133.3-59.1 133.3-131.8 0-35.2-15.2-68.3-40.1-93.2-25-25-58-38.7-93.2-38.7zm77.5 188.4c-3.3 9.3-19.1 17.7-26.7 18.8-12.6 1.9-22.4.9-47.5-9.9-39.7-17.2-65.7-57.2-67.7-59.8-2-2.6-16.2-21.5-16.2-41s10.2-29.1 13.9-33.1c3.6-4 7.9-5 10.6-5 2.6 0 5.3 0 7.6.1 2.4.1 5.7-.9 8.9 6.8 3.3 7.9 11.2 27.4 12.2 29.4s1.7 4.3.3 6.9c-7.6 15.2-15.7 14.6-11.6 21.6 15.3 26.3 30.6 35.4 53.9 47.1 4 2 6.3 1.7 8.6-1 2.3-2.6 9.9-11.6 12.5-15.5 2.6-4 5.3-3.3 8.9-2 3.6 1.3 23.1 10.9 27.1 12.9s6.6 3 7.6 4.6c.9 1.9.9 9.9-2.4 19.1zM400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM223.9 413.2c-26.6 0-52.7-6.7-75.8-19.3L64 416l22.5-82.2c-13.9-24-21.2-51.3-21.2-79.3C65.4 167.1 136.5 96 223.9 96c42.4 0 82.2 16.5 112.2 46.5 29.9 30 47.9 69.8 47.9 112.2 0 87.4-72.7 158.5-160.1 158.5z"></path>
                                                                            </svg>&nbsp;<a href="https://wa.me/527971227810">Dante Castelán Carpinteyro</a></span></div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col"><span class="text-nowrap"><i class="fas fa-phone-square-alt" style="color: orange"></i>&nbsp;<a href="tel:7971227810" target="_blank">7979773095</a></span></div>
                                                                </div>
                                                                <div class="row px-0 mx-0">
                                                                    <div class="col px-1"><span class="text-truncate text-nowrap text-xs"><i class="fas fa-envelope-square" style="color: #1a9ce2; font-size: small !important;"></i>&nbsp;<a href="mailto:edithcarpinteyro@yahoo.com.mx" target="_blank">dante@castelancarpinteyro.com</a></span></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="col">
                                                                <div class="row">
                                                                    <div class="col"><span class="text-nowrap"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-64 0 512 512" width="1em" height="1em" fill="currentColor">
                                                                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                                                <path d="M336 64h-53.88C268.9 26.8 233.7 0 192 0S115.1 26.8 101.9 64H48C21.5 64 0 85.48 0 112v352C0 490.5 21.5 512 48 512h288c26.5 0 48-21.48 48-48v-352C384 85.48 362.5 64 336 64zM192 64c17.67 0 32 14.33 32 32c0 17.67-14.33 32-32 32S160 113.7 160 96C160 78.33 174.3 64 192 64zM192 192c35.35 0 64 28.65 64 64s-28.65 64-64 64S128 291.3 128 256S156.7 192 192 192zM288 448H96c-8.836 0-16-7.164-16-16C80 387.8 115.8 352 160 352h64c44.18 0 80 35.82 80 80C304 440.8 296.8 448 288 448z"></path>
                                                                            </svg>&nbsp;Rosalba Nazareth</span></div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col"><span class="text-nowrap"><i class="far fa-calendar-alt"></i>&nbsp;2024-15-03</span></div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col"><span class="text-nowrap"><i class="far fa-clock"></i>&nbsp;13:05:45</span></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="p-1">
                                                            <div class="col">
                                                                <div class="row m-0 px-0">
                                                                    <div class="col px-0"><span>$&nbsp;<input type="number" class="col-10 col-lg-6" disabled="" value="300"></span></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="p-1">
                                                            <div class="row">
                                                                <div class="col col-6 col-lg-5 align-items-center align-self-center px-1" style="min-width: 70px;"><span>Mantenimiento</span>
                                                                    <hr class="m-0"><span>Limpieza</span>
                                                                </div>
                                                                <div class="col col-6 col-lg-7 px-1" style="max-height: 100% !important; overflow-y: auto !important;"><span>No se han añadido comentarios</span></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td><strong>#</strong></td>
                                                        <td><strong>Equipo</strong></td>
                                                        <td style="min-width: 110px !important;"><strong>Status</strong></td>
                                                        <td class="col-1"><strong>Cliente</strong></td>
                                                        <td><strong>Recepción</strong></td>
                                                        <td><strong>Cotización</strong></td>
                                                        <td style="min-width: 300px !important;"><strong>Detalles</strong></td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane" role="tabpanel" id="tab-4">
                                        <div class="row py-2">
                                            <div class="col align-items-center">
                                                <div class="input-group col-8"><span class="input-group-text p-1" style="font-size: small"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" fill="currentColor">
                                                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                            <path d="M3.853 54.87C10.47 40.9 24.54 32 40 32H472C487.5 32 501.5 40.9 508.1 54.87C514.8 68.84 512.7 85.37 502.1 97.33L320 320.9V448C320 460.1 313.2 471.2 302.3 476.6C291.5 482 278.5 480.9 268.8 473.6L204.8 425.6C196.7 419.6 192 410.1 192 400V320.9L9.042 97.33C-.745 85.37-2.765 68.84 3.854 54.87L3.853 54.87z"></path>
                                                        </svg></span><input class="form-control" type="search" placeholder="Buscar reparación"></div>
                                            </div>
                                        </div>
                                        <div class="table-responsive table mt-2" id="dataTable-4" role="grid" aria-describedby="dataTable_info">
                                            <table class="table my-0 text-center" id="dataTable">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Equipo</th>
                                                        <th style="min-width: 110px !important;">Status</th>
                                                        <th class="col-1">Cliente</th>
                                                        <th>Recepción</th>
                                                        <th>Cotización</th>
                                                        <th style="min-width: 300px !important;">Detalles</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="small align-middle">
                                                        <td>3</td>
                                                        <td>Motorola G81</td>
                                                        <td class="pending-cell px-1 py-1">
                                                            <div class="row m-0">
                                                                <div class="col col-12 mb-1 border-0 p-0"><button class="btn btn-primary btn-status px-1 border-0 col-12 py-0" type="button" onmouseover="javascript:changeText(3, 'entregado');" onmouseout="javascript:restore_animation(this);"><span id="status-5" class="status-entregado" style="font-size: smaller;">Entregado</span></button></div>
                                                                <div class="col col-12 p-0"><button class="btn btn-primary btn-status border-0 col-12 py-0" type="button" onmouseover="javascript:changeText(1, 'pendiente');" onmouseout="javascript:resetText(1, 'pendiente');" style="background-color: yellow !important; color: darkgray !important;"><span class="text-nowrap" style="font-size: smaller;line-height: 0 !important;"><i class="fas fa-bell" style="font-size: small;"></i>&nbsp;Notificar</span></button></div>
                                                            </div>
                                                        </td>
                                                        <td class="px-3">
                                                            <div class="col">
                                                                <div class="row">
                                                                    <div class="col px-0"><span><svg xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em" height="1em" fill="currentColor" color="#25d366">
                                                                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                                                <path d="M224 122.8c-72.7 0-131.8 59.1-131.9 131.8 0 24.9 7 49.2 20.2 70.1l3.1 5-13.3 48.6 49.9-13.1 4.8 2.9c20.2 12 43.4 18.4 67.1 18.4h.1c72.6 0 133.3-59.1 133.3-131.8 0-35.2-15.2-68.3-40.1-93.2-25-25-58-38.7-93.2-38.7zm77.5 188.4c-3.3 9.3-19.1 17.7-26.7 18.8-12.6 1.9-22.4.9-47.5-9.9-39.7-17.2-65.7-57.2-67.7-59.8-2-2.6-16.2-21.5-16.2-41s10.2-29.1 13.9-33.1c3.6-4 7.9-5 10.6-5 2.6 0 5.3 0 7.6.1 2.4.1 5.7-.9 8.9 6.8 3.3 7.9 11.2 27.4 12.2 29.4s1.7 4.3.3 6.9c-7.6 15.2-15.7 14.6-11.6 21.6 15.3 26.3 30.6 35.4 53.9 47.1 4 2 6.3 1.7 8.6-1 2.3-2.6 9.9-11.6 12.5-15.5 2.6-4 5.3-3.3 8.9-2 3.6 1.3 23.1 10.9 27.1 12.9s6.6 3 7.6 4.6c.9 1.9.9 9.9-2.4 19.1zM400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM223.9 413.2c-26.6 0-52.7-6.7-75.8-19.3L64 416l22.5-82.2c-13.9-24-21.2-51.3-21.2-79.3C65.4 167.1 136.5 96 223.9 96c42.4 0 82.2 16.5 112.2 46.5 29.9 30 47.9 69.8 47.9 112.2 0 87.4-72.7 158.5-160.1 158.5z"></path>
                                                                            </svg>&nbsp;<a href="https://wa.me/527971227810">Emiliano Castelán Carpinteyro</a></span></div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col"><span class="text-nowrap"><i class="fas fa-phone-square-alt" style="color: orange"></i>&nbsp;<a href="tel:7971227810" target="_blank">7971196751</a></span></div>
                                                                </div>
                                                                <div class="row px-0 mx-0">
                                                                    <div class="col px-1"><span class="text-truncate text-nowrap text-xs"><i class="fas fa-envelope-square" style="color: #1a9ce2; font-size: small !important;"></i>&nbsp;<a href="mailto:edithcarpinteyro@yahoo.com.mx" target="_blank">emicc1000@gmail.com</a></span></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="col">
                                                                <div class="row">
                                                                    <div class="col"><span class="text-nowrap"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-64 0 512 512" width="1em" height="1em" fill="currentColor">
                                                                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                                                <path d="M336 64h-53.88C268.9 26.8 233.7 0 192 0S115.1 26.8 101.9 64H48C21.5 64 0 85.48 0 112v352C0 490.5 21.5 512 48 512h288c26.5 0 48-21.48 48-48v-352C384 85.48 362.5 64 336 64zM192 64c17.67 0 32 14.33 32 32c0 17.67-14.33 32-32 32S160 113.7 160 96C160 78.33 174.3 64 192 64zM192 192c35.35 0 64 28.65 64 64s-28.65 64-64 64S128 291.3 128 256S156.7 192 192 192zM288 448H96c-8.836 0-16-7.164-16-16C80 387.8 115.8 352 160 352h64c44.18 0 80 35.82 80 80C304 440.8 296.8 448 288 448z"></path>
                                                                            </svg>&nbsp;Luis Enrique</span></div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col"><span class="text-nowrap"><i class="far fa-calendar-alt"></i>&nbsp;2024-15-03</span></div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col"><span class="text-nowrap"><i class="far fa-clock"></i>&nbsp;13:05:45</span></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="p-1">
                                                            <div class="col">
                                                                <div class="row m-0 px-0">
                                                                    <div class="col px-0"><span>$&nbsp;<input type="number" class="col-10 col-lg-6" disabled=""></span></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="p-1">
                                                            <div class="row">
                                                                <div class="col col-6 col-lg-5 align-items-center align-self-center px-1" style="min-width: 70px;"><span>Dispositivo mojado</span>
                                                                    <hr class="m-0"><span>Secado y reparación</span>
                                                                </div>
                                                                <div class="col col-6 col-lg-7 px-1" style="max-height: 100% !important; overflow-y: auto !important;"><span>Se reconstruyeron líneas en corto</span></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td><strong>#</strong></td>
                                                        <td><strong>Equipo</strong></td>
                                                        <td style="min-width: 110px !important;"><strong>Status</strong></td>
                                                        <td class="col-1"><strong>Cliente</strong></td>
                                                        <td><strong>Recepción</strong></td>
                                                        <td><strong>Cotización</strong></td>
                                                        <td style="min-width: 300px !important;"><strong>Detalles</strong></td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © Kalicel 2024</span></div>
                </div>
            </footer>
            <div class="modal fade" role="dialog" tabindex="-1" id="modal-1">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header p-2 px-md-3">
                            <h4 class="modal-title fw-bold ms-3" style="color: var(--bs-kalicel-rojo)">
                                Registrar reparación
                            </h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-2">
                            <p class="small mb-1 px-4" style="text-indent: 5%">
                                Llena el formulario para registrar la operación. Los campos
                                marcados con un (*) son obligatorios.
                            </p>
                            <form action="php-scripts/add-fix-order.php" method="post" name="add-fix-order">
                                <div class="row m-0">
                                    <div class="col col-12">
                                        <label class="form-label my-1 py-0" for="customer"><i class="fas fa-user-tag"></i>&nbsp;Cliente&nbsp;<span class="text-danger">*</span></label><input class="form-control p-1" type="text" autocomplete="off" name="customer" required="" placeholder="Nombre completo del cliente" />
                                    </div>
                                    <div class="col col-12">
                                        <label class="form-label my-1 py-0" for="brand">Marca&nbsp;<span class="text-danger">*</span></label><select name="brand" class="form-select p-1" required>
                                            <optgroup label="Selecciona una marca">
                                                <option selected>Seleccione una opción</option>
                                                <option value="Motorola">Motorola</option>
                                                <option value="Samsung">Samsung</option>
                                                <option value="LG">LG</option>
                                                <option value="Xiaomi">Xiaomi</option>
                                                <option value="Huawei">Huawei</option>
                                                <option value="OPPO">OPPO</option>
                                                <option value="Apple">Apple</option>
                                                <option value="Alcatel">Alcatel</option>
                                                <option value="Lanix">Lanix</option>
                                                <option value="POCO">POCO</option>
                                                <option value="Lenovo">Lenovo</option>
                                                <option value="M4">M4</option>
                                                <option value="Vivo">Vivo</option>
                                                <option value="Nokia">Nokia</option>
                                                <option value="Otra">
                                                    Otra (especifica en el modelo)
                                                </option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="col col-12">
                                        <label class="form-label my-1 py-0" for="model">Modelo&nbsp;<span class="text-danger">*</span></label><input class="form-control p-1" type="text" name="model" autocomplete="off" required="" placeholder="Especifica el dispositivo (modelo)" />
                                    </div>
                                    <div class="col col-12 col-md-6">
                                        <label class="form-label my-1 py-0 d-flex align-items-center" for="mobile">Número telefónico (<svg xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em" height="1em" fill="currentColor">
                                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                <path d="M224 122.8c-72.7 0-131.8 59.1-131.9 131.8 0 24.9 7 49.2 20.2 70.1l3.1 5-13.3 48.6 49.9-13.1 4.8 2.9c20.2 12 43.4 18.4 67.1 18.4h.1c72.6 0 133.3-59.1 133.3-131.8 0-35.2-15.2-68.3-40.1-93.2-25-25-58-38.7-93.2-38.7zm77.5 188.4c-3.3 9.3-19.1 17.7-26.7 18.8-12.6 1.9-22.4.9-47.5-9.9-39.7-17.2-65.7-57.2-67.7-59.8-2-2.6-16.2-21.5-16.2-41s10.2-29.1 13.9-33.1c3.6-4 7.9-5 10.6-5 2.6 0 5.3 0 7.6.1 2.4.1 5.7-.9 8.9 6.8 3.3 7.9 11.2 27.4 12.2 29.4s1.7 4.3.3 6.9c-7.6 15.2-15.7 14.6-11.6 21.6 15.3 26.3 30.6 35.4 53.9 47.1 4 2 6.3 1.7 8.6-1 2.3-2.6 9.9-11.6 12.5-15.5 2.6-4 5.3-3.3 8.9-2 3.6 1.3 23.1 10.9 27.1 12.9s6.6 3 7.6 4.6c.9 1.9.9 9.9-2.4 19.1zM400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM223.9 413.2c-26.6 0-52.7-6.7-75.8-19.3L64 416l22.5-82.2c-13.9-24-21.2-51.3-21.2-79.3C65.4 167.1 136.5 96 223.9 96c42.4 0 82.2 16.5 112.2 46.5 29.9 30 47.9 69.8 47.9 112.2 0 87.4-72.7 158.5-160.1 158.5z"></path>
                                            </svg>+<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" fill="currentColor">
                                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                <path d="M511.2 387l-23.25 100.8c-3.266 14.25-15.79 24.22-30.46 24.22C205.2 512 0 306.8 0 54.5c0-14.66 9.969-27.2 24.22-30.45l100.8-23.25C139.7-2.602 154.7 5.018 160.8 18.92l46.52 108.5c5.438 12.78 1.77 27.67-8.98 36.45L144.5 207.1c33.98 69.22 90.26 125.5 159.5 159.5l44.08-53.8c8.688-10.78 23.69-14.51 36.47-8.975l108.5 46.51C506.1 357.2 514.6 372.4 511.2 387z"></path>
                                            </svg>)&nbsp;<span class="text-danger">*</span></label><input class="form-control p-1" type="tel" name="mobile" autocomplete="off" required="" placeholder="Teléfono" />
                                    </div>
                                    <div class="col col-12 col-md-6 visually-hidden">
                                        <label class="form-label my-1 py-0 d-flex align-items-center" for="email"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" fill="currentColor">
                                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                <path d="M464 64C490.5 64 512 85.49 512 112C512 127.1 504.9 141.3 492.8 150.4L275.2 313.6C263.8 322.1 248.2 322.1 236.8 313.6L19.2 150.4C7.113 141.3 0 127.1 0 112C0 85.49 21.49 64 48 64H464zM217.6 339.2C240.4 356.3 271.6 356.3 294.4 339.2L512 176V384C512 419.3 483.3 448 448 448H64C28.65 448 0 419.3 0 384V176L217.6 339.2z"></path>
                                            </svg>&nbsp;Correo electrónico&nbsp;</label><input class="form-control p-1 disabled" type="email" name="email" autocomplete="off" placeholder="correo@kalicel.com" disabled="" />
                                    </div>
                                    <div class="col col-12 col-sm-6">
                                        <label class="form-label my-1 py-0 align-items-center text-center col-12" for="cost"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -32 576 576" width="1em" height="1em" fill="currentColor">
                                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                <path d="M512 64C547.3 64 576 92.65 576 128V384C576 419.3 547.3 448 512 448H64C28.65 448 0 419.3 0 384V128C0 92.65 28.65 64 64 64H512zM272 192C263.2 192 256 199.2 256 208C256 216.8 263.2 224 272 224H496C504.8 224 512 216.8 512 208C512 199.2 504.8 192 496 192H272zM272 320H496C504.8 320 512 312.8 512 304C512 295.2 504.8 288 496 288H272C263.2 288 256 295.2 256 304C256 312.8 263.2 320 272 320zM164.1 160C164.1 148.9 155.1 139.9 143.1 139.9C132.9 139.9 123.9 148.9 123.9 160V166C118.3 167.2 112.1 168.9 108 171.1C93.06 177.9 80.07 190.5 76.91 208.8C75.14 219 76.08 228.9 80.32 237.8C84.47 246.6 91 252.8 97.63 257.3C109.2 265.2 124.5 269.8 136.2 273.3L138.4 273.9C152.4 278.2 161.8 281.3 167.7 285.6C170.2 287.4 171.1 288.8 171.4 289.7C171.8 290.5 172.4 292.3 171.7 296.3C171.1 299.8 169.2 302.8 163.7 305.1C157.6 307.7 147.7 309 134.9 307C128.9 306 118.2 302.4 108.7 299.2C106.5 298.4 104.3 297.7 102.3 297C91.84 293.5 80.51 299.2 77.02 309.7C73.53 320.2 79.2 331.5 89.68 334.1C90.89 335.4 92.39 335.9 94.11 336.5C101.1 339.2 114.4 343.4 123.9 345.6V352C123.9 363.1 132.9 372.1 143.1 372.1C155.1 372.1 164.1 363.1 164.1 352V346.5C169.4 345.5 174.6 343.1 179.4 341.9C195.2 335.2 207.8 322.2 211.1 303.2C212.9 292.8 212.1 282.8 208.1 273.7C204.2 264.7 197.9 258.1 191.2 253.3C179.1 244.4 162.9 239.6 150.8 235.9L149.1 235.7C135.8 231.4 126.2 228.4 120.1 224.2C117.5 222.4 116.7 221.2 116.5 220.7C116.3 220.3 115.7 219.1 116.3 215.7C116.7 213.7 118.2 210.4 124.5 207.6C130.1 204.7 140.9 203.1 153.1 204.1C157.5 205.7 171 208.3 174.9 209.3C185.5 212.2 196.5 205.8 199.3 195.1C202.2 184.5 195.8 173.5 185.1 170.7C180.7 169.5 170.7 167.5 164.1 166.3L164.1 160z"></path>
                                            </svg>&nbsp;Cotización</label>
                                        <div class="row justify-content-center">
                                            <div class="col align-self-center text-center col-2 p-0">
                                                <span class="m-0 p-0">$</span>
                                            </div>
                                            <div class="col col-6 ps-0">
                                                <input class="form-control p-1 text-center" autocomplete="off" type="number" name="cost" placeholder="Precio" step=".01" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-12 col-sm-6 visually-hidden">
                                        <label class="form-label my-1 py-0 align-items-center col-12 text-center" for="paid_amount"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" fill="currentColor">
                                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                <path d="M326.7 403.7C304.7 411.6 280.8 416 256 416C231.2 416 207.3 411.6 185.3 403.7C184.1 403.6 184.7 403.5 184.5 403.4C154.4 392.4 127.6 374.6 105.9 352C70.04 314.6 48 263.9 48 208C48 93.12 141.1 0 256 0C370.9 0 464 93.12 464 208C464 263.9 441.1 314.6 406.1 352C405.1 353 404.1 354.1 403.1 355.1C381.7 376.4 355.7 393.2 326.7 403.7L326.7 403.7zM235.9 111.1V118C230.3 119.2 224.1 120.9 220 123.1C205.1 129.9 192.1 142.5 188.9 160.8C187.1 171 188.1 180.9 192.3 189.8C196.5 198.6 203 204.8 209.6 209.3C221.2 217.2 236.5 221.8 248.2 225.3L250.4 225.9C264.4 230.2 273.8 233.3 279.7 237.6C282.2 239.4 283.1 240.8 283.4 241.7C283.8 242.5 284.4 244.3 283.7 248.3C283.1 251.8 281.2 254.8 275.7 257.1C269.6 259.7 259.7 261 246.9 259C240.9 258 230.2 254.4 220.7 251.2C218.5 250.4 216.3 249.7 214.3 249C203.8 245.5 192.5 251.2 189 261.7C185.5 272.2 191.2 283.5 201.7 286.1C202.9 287.4 204.4 287.9 206.1 288.5C213.1 291.2 226.4 295.4 235.9 297.6V304C235.9 315.1 244.9 324.1 255.1 324.1C267.1 324.1 276.1 315.1 276.1 304V298.5C281.4 297.5 286.6 295.1 291.4 293.9C307.2 287.2 319.8 274.2 323.1 255.2C324.9 244.8 324.1 234.8 320.1 225.7C316.2 216.7 309.9 210.1 303.2 205.3C291.1 196.4 274.9 191.6 262.8 187.9L261.1 187.7C247.8 183.4 238.2 180.4 232.1 176.2C229.5 174.4 228.7 173.2 228.5 172.7C228.3 172.3 227.7 171.1 228.3 167.7C228.7 165.7 230.2 162.4 236.5 159.6C242.1 156.7 252.9 155.1 265.1 156.1C269.5 157.7 283 160.3 286.9 161.3C297.5 164.2 308.5 157.8 311.3 147.1C314.2 136.5 307.8 125.5 297.1 122.7C292.7 121.5 282.7 119.5 276.1 118.3V112C276.1 100.9 267.1 91.9 256 91.9C244.9 91.9 235.9 100.9 235.9 112V111.1zM48 352H63.98C83.43 377.9 108 399.7 136.2 416H64V448H448V416H375.8C403.1 399.7 428.6 377.9 448 352H464C490.5 352 512 373.5 512 400V464C512 490.5 490.5 512 464 512H48C21.49 512 0 490.5 0 464V400C0 373.5 21.49 352 48 352H48z"></path>
                                            </svg>&nbsp;Abono</label>
                                        <div class="row justify-content-center">
                                            <div class="col align-self-center text-center col-2 p-0">
                                                <span class="m-0 p-0">$</span>
                                            </div>
                                            <div class="col col-6 ps-0">
                                                <input class="form-control p-1 text-center disabled" autocomplete="off" type="number" name="paid_amount" placeholder="Abono" step=".01" disabled="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-12">
                                        <label class="form-label my-1 py-0 d-flex align-items-center" for="fail"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" fill="currentColor">
                                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                <path d="M464 96H384V48C384 21.5 362.5 0 336 0h-160C149.5 0 128 21.5 128 48V96H48C21.5 96 0 117.5 0 144v288C0 458.5 21.5 480 48 480h416c26.5 0 48-21.5 48-48v-288C512 117.5 490.5 96 464 96zM176 48h160V96h-160V48zM368 314c0 8.836-7.164 16-16 16h-54V384c0 8.836-7.164 16-15.1 16h-52c-8.835 0-16-7.164-16-16v-53.1H160c-8.836 0-16-7.164-16-16v-52c0-8.838 7.164-16 16-16h53.1V192c0-8.838 7.165-16 16-16h52c8.836 0 15.1 7.162 15.1 16v54H352c8.836 0 16 7.162 16 16V314z"></path>
                                            </svg>&nbsp;Falla (diagnóstico)</label><input class="form-control p-1" type="text" name="fail" placeholder="Diagnóstico o falla" />
                                    </div>
                                    <div class="col col-12 col-md-6 visually-hidden">
                                        <label class="form-label my-1 py-0 d-flex align-items-center" for="work"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -32 576 576" width="1em" height="1em" fill="currentColor">
                                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                <path d="M544 280.9c0-89.17-61.83-165.4-139.6-197.4L352 174.2V49.78C352 39.91 344.1 32 334.2 32H241.8C231.9 32 224 39.91 224 49.78v124.4L171.6 83.53C93.83 115.5 32 191.7 32 280.9L31.99 352h512L544 280.9zM574.7 393.7C572.2 387.8 566.4 384 560 384h-544c-6.375 0-12.16 3.812-14.69 9.656c-2.531 5.875-1.344 12.69 3.062 17.34C7.031 413.8 72.02 480 287.1 480s280.1-66.19 283.6-69C576 406.3 577.2 399.5 574.7 393.7z"></path>
                                            </svg>&nbsp;Trabajo u operación a realizar</label><input class="form-control p-1 disabled" type="text" name="work" placeholder="Sustitución o proceso a realizar" disabled="" />
                                    </div>
                                    <div class="col col-12">
                                        <label class="form-label my-1 py-0 d-flex align-items-center" for="comments"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em" height="1em" fill="currentColor">
                                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                <path d="M400 32h-352C21.49 32 0 53.49 0 80v352C0 458.5 21.49 480 48 480h245.5c16.97 0 33.25-6.744 45.26-18.75l90.51-90.51C441.3 358.7 448 342.5 448 325.5V80C448 53.49 426.5 32 400 32zM64 96h320l-.001 224H320c-17.67 0-32 14.33-32 32v64H64V96z"></path>
                                            </svg>&nbsp;Comentarios, instrucciones y notas</label><textarea class="form-control p-1" name="comments"></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-light" type="button" data-bs-dismiss="modal" style="background-color: var(--bs-gray-300)">
                                        <i class="fas fa-times-circle" style="color: var(--bs-kalicel-rojo) !important"></i>&nbsp;Cerrar</button><button class="btn btn-primary custom-bg" type="submit" style="
												background-color: var(--bs-kalicel-rojo) !important;
											">
                                        <i class="fas fa-plus-square"></i>&nbsp;Añadir
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/extra.js"></script>
    <script src="https://geodata.solutions/includes/countrystate.js"></script>
    <script src="assets/js/theme.js"></script>
    <?php
    if (isset($_SESSION['added-id'])) {
        echo ($_SESSION == 0) ? "" : ("<script>auto_notify(" . $_SESSION['added-id'] . ");</script>");
        unset($_SESSION['added-id']);
    }
    ?>
</body>

</html>