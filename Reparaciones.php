<?php
session_start();
if (empty($_SESSION['ID'])) {
    header("Location: login.php");
}

include "php scripts/Conexión.php";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Reparaciones - Kalicel</title>
    <meta name="description" content="Sistema de administración web de reparaciones, estados de pedidos, e interacción con el cliente.">
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
    <script src="assets/js/extra.js"></script>
</head>

<body id="page-top">
    <script lang="javascript">
        if (navigator.online) {
            //Conexión a internet
        } else {
            document.getElementById("mainCSS").href = "assets/css/main.css";
            document.getElementById("funcionesJS").src = "assets/js/Funciones.js";
            document.getElementById("altasBajasJS").src = "assets/js/AltasBajas.js";
        }
    </script>
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background: #fe0000;">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>Kalicel</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link" href="index.html"><i class="fas fa-tachometer-alt"></i><span>Panel</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="profile.html"><i class="fas fa-user"></i><span>Perfil</span></a></li>
                    <li class="nav-item"><a class="nav-link active" href="Reparaciones.php"><i class="fas fa-table"></i><span>Reparaciones</span></a></li>
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
                            <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ..."><button class="btn btn-primary py-0" type="button" style="background-color: var(--bs-kalicel-rojo);"><i class="fas fa-search"></i></button></div>
                        </form>
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                    <form class="me-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter">3+</span><i class="fas fa-bell fa-fw"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                        <h6 class="dropdown-header">alerts center</h6><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="me-3">
                                                <div class="bg-primary icon-circle"><i class="fas fa-file-alt text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 12, 2019</span>
                                                <p>A new monthly report is ready to download!</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="me-3">
                                                <div class="bg-success icon-circle"><i class="fas fa-donate text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 7, 2019</span>
                                                <p>$290.29 has been deposited into your account!</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="me-3">
                                                <div class="bg-warning icon-circle"><i class="fas fa-exclamation-triangle text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 2, 2019</span>
                                                <p>Spending Alert: We've noticed unusually high spending for your account.</p>
                                            </div>
                                        </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter">7</span><i class="fas fa-envelope fa-fw"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                        <h6 class="dropdown-header">Operaciones</h6>

                                        <?php
                                        $conexión = mysqli_connect("localhost", "kalicel", "kalicelrepair", "kalicel");

                                        $consulta = "SELECT * FROM `operaciones` WHERE `autor_operación` != '' ORDER BY `fecha_operación` DESC";
                                        $resultado = mysqli_query($conexión, $consulta) or die("Error en la consulta a la base de datos");

                                        $contador = 0;

                                        while ($columna = mysqli_fetch_array($resultado)) {
                                            switch ($columna['autor_operación']) {
                                                case 'Luis Enrique':
                                                    $autor = 1;
                                                    break;
                                                case 'Rosalba Nazareth':
                                                    $autor = 2;
                                                    break;
                                                case 'Dante':
                                                    $autor = 3;
                                                    break;
                                                default:
                                                    break;
                                            }
                                            echo ("
                                            <a class='dropdown-item d-flex align-items-center' href='#'>
                                            <div class='dropdown-list-image me-3'><img class='rounded-circle' src='assets/img/avatars/" . $autor . ".png'>
                                            <div class='bg-success status-indicator'></div>
                                            </div>
                                            <div class='fw-bold'>
                                                <div class='text-truncate'>
                                                <span>" . $columna['acción_operación'] . ": " . $columna['descripción_operación'] . "</span>
                                                </div>
                                                <p class='small text-gray-500 mb-0'>" . $columna['autor_operación'] . " - " . $columna['fecha_operación'] . "</p>
                                                </div>
                                                </a>
                                            ");
                                            $contador++;
                                            if ($contador > 5) {
                                                break;
                                            }
                                        }
                                        ?>

                                        <a class="dropdown-item text-center small text-gray-500" href="#">Mostrar todas las operaciones</a>
                                    </div>
                                </div>
                                <div class="shadow dropdown-list dropdown-menu dropdown-menu-end" aria-labelledby="alertsDropdown"></div>
                            </li>
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="d-none d-lg-inline me-2 text-gray-600 small"><?php echo ($_SESSION['Nombre']); ?></span><img class="rounded-circle img-fluid border img-profile" src="<?php echo ("assets/img/avatars/" . $_SESSION['ID'] . ".png"); ?>"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Perfil</a><a class="dropdown-item" href="Perfil.php"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Configuraciones</a><a class="dropdown-item" href="Actividad.php"><i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Actividad</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="php scripts/logout.php"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Reparaciones</h3>
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">Información de reparaciones</p>
                            <div>
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item" role="presentation"><a class="nav-link active" role="tab" data-bs-toggle="tab" href="#tab-1">Todas</a></li>
                                    <!--<li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="tab" href="#tab-2">Pendiente</a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="tab" href="#tab-3">Listo</a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="tab" href="#tab-4">Entregado</a></li>-->
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" role="tabpanel" id="tab-1">
                                        <div class="row">
                                            <div class="col-md-6 text-nowrap">
                                                <div id="dataTable_length-1" class="dataTables_length" aria-controls="dataTable"><label class="form-label">Mostrar<select class="d-inline-block form-select form-select-sm">
                                                            <option value="10" selected="">10</option>
                                                            <option value="25">25</option>
                                                            <option value="50">50</option>
                                                            <option value="100">100</option>
                                                        </select>&nbsp;</label></div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="text-md-end dataTables_filter" id="dataTable_filter-1"><label class="form-label"><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
                                            </div>
                                        </div>
                                        <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info">
                                            <!--<table class="table my-0" id="dataTable">
                                                <thead>
                                                    <tr>
                                                        <th>Folio</th>
                                                        <th>Nombre</th>
                                                        <th>Teléfono</th>
                                                        <th>Marca</th>
                                                        <th>Modelo</th>
                                                        <th>Falla</th>
                                                        <th>Trabajo</th>
                                                        <th>Status</th>
                                                        <th>Cotización</th>
                                                        <th>Abono</th>
                                                        <th>Estado previo</th>
                                                        <th>Email</th>
                                                        <th>Fecha</th>
                                                        <th>Recibió</th>
                                                        <th>Comentarios</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Cedric Kelly</td>
                                                        <td><a href="https://wa.me/522411352236" target="_blank">241 135 22 36</a></td>
                                                        <td>Motorola<br></td>
                                                        <td>G7 Play</td>
                                                        <td>No carga</td>
                                                        <td>Centro de carga</td>
                                                        <td class="pending-cell">
                                                            <div class="btn-group" role="group"><button class="btn btn-primary btn-status" type="button" onmouseover="javascript:changeText(1, 'pendiente');" onmouseout="javascript:resetText(1, 'pendiente');"><span id="status1" class="status-pendiente">Pendiente</span></button></div>
                                                        </td>
                                                        <td>$480</td>
                                                        <td>$200</td>
                                                        <td>Apagado</td>
                                                        <td>cliente.orden@kalicel.com</td>
                                                        <td>2022-12-18</td>
                                                        <td>Luis Enrique</td>
                                                        <td>Se colocó centro de carga adaptado.</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Cedric Kelly</td>
                                                        <td><a href="https://wa.me/522411352236" target="_blank">241 135 22 36</a></td>
                                                        <td>Motorola<br></td>
                                                        <td>G7 Play</td>
                                                        <td>No carga</td>
                                                        <td>Centro de carga</td>
                                                        <td class="pending-cell">
                                                            <div class="btn-group" role="group"><button class="btn btn-primary btn-status" type="button" onmouseover="javascript:changeText(2, 'listo');" onmouseout="javascript:resetText(2, 'listo');"><span id="status2" class="status-listo">Listo</span></button></div>
                                                        </td>
                                                        <td>$480</td>
                                                        <td>$200</td>
                                                        <td>Apagado</td>
                                                        <td>cliente.orden@kalicel.com</td>
                                                        <td>2022-12-18</td>
                                                        <td>Luis Enrique</td>
                                                        <td>Se colocó centro de carga adaptado.</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Cedric Kelly</td>
                                                        <td><a href="https://wa.me/522411352236" target="_blank">241 135 22 36</a></td>
                                                        <td>Motorola<br></td>
                                                        <td>G7 Play</td>
                                                        <td>No carga</td>
                                                        <td>Centro de carga</td>
                                                        <td class="pending-cell">
                                                            <div class="btn-group" role="group"><button class="btn btn-primary btn-status" type="button" onmouseover="javascript:changeText(3, 'entregado');" onmouseout="javascript:resetText(3, 'entregado');"><span id="status3" class="status-entregado">Entregado</span></button></div>
                                                        </td>
                                                        <td>$480</td>
                                                        <td>$200</td>
                                                        <td>Apagado</td>
                                                        <td>cliente.orden@kalicel.com</td>
                                                        <td>2022-12-18</td>
                                                        <td>Luis Enrique</td>
                                                        <td>Se colocó centro de carga adaptado.</td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td><strong>Folio</strong></td>
                                                        <td><strong>Nombre</strong></td>
                                                        <td><strong>Teléfono</strong></td>
                                                        <td><strong>Email</strong></td>
                                                        <td><strong>Marca</strong></td>
                                                        <td>Falla</td>
                                                        <td><strong>Trabajo</strong></td>
                                                        <td><strong>Modelo</strong></td>
                                                        <td><strong>Status</strong></td>
                                                        <td><strong>Estado previo</strong></td>
                                                        <td><strong>Cotización</strong></td>
                                                        <td><strong>Abono</strong></td>
                                                        <td><strong>Fecha</strong></td>
                                                        <td><strong>Recibió</strong></td>
                                                        <td><strong>Comentarios</strong></td>
                                                    </tr>
                                                </tfoot>
                                            </table>-->
                                            <?php
                                            include "php scripts/ConstruirTablaReparaciones.php";
                                            ConstruirTablaCarga(1);
                                            ?>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 align-self-center">
                                                <p id="dataTable_info-1" class="dataTables_info" role="status" aria-live="polite">Mostrando de x a y</p>
                                            </div>
                                            <div class="col-md-6">
                                                <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                                    <ul class="pagination">
                                                        <li class="page-item disabled"><a class="page-link" aria-label="Previous" href="#"><span aria-hidden="true">«</span></a></li>
                                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                        <li class="page-item"><a class="page-link" aria-label="Next" href="#"><span aria-hidden="true">»</span></a></li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                    <!--
                                    <div class="tab-pane" role="tabpanel" id="tab-2">
                                        <div class="row">
                                            <div class="col-md-6 text-nowrap">
                                                <div id="dataTable_length-2" class="dataTables_length" aria-controls="dataTable"><label class="form-label">Mostrar<select class="d-inline-block form-select form-select-sm">
                                                            <option value="10" selected="">10</option>
                                                            <option value="25">25</option>
                                                            <option value="50">50</option>
                                                            <option value="100">100</option>
                                                        </select>&nbsp;</label></div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="text-md-end dataTables_filter" id="dataTable_filter-2"><label class="form-label"><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
                                            </div>
                                        </div>
                                        <div class="table-responsive table mt-2" id="dataTable-2" role="grid" aria-describedby="dataTable_info">
                                            <?php
                                            /*
                                            include "php scripts/ConstruirTablaReparaciones.php";
                                            ConstruirTablaCarga(2);
                                            */
                                            ?>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 align-self-center">
                                                <p id="dataTable_info-2" class="dataTables_info" role="status" aria-live="polite">Mostrando de x a y</p>
                                            </div>
                                            <div class="col-md-6">
                                                <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                                    <ul class="pagination">
                                                        <li class="page-item disabled"><a class="page-link" aria-label="Previous" href="#"><span aria-hidden="true">«</span></a></li>
                                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                        <li class="page-item"><a class="page-link" aria-label="Next" href="#"><span aria-hidden="true">»</span></a></li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" role="tabpanel" id="tab-3">
                                        <div class="row">
                                            <div class="col-md-6 text-nowrap">
                                                <div id="dataTable_length-3" class="dataTables_length" aria-controls="dataTable"><label class="form-label">Mostrar<select class="d-inline-block form-select form-select-sm">
                                                            <option value="10" selected="">10</option>
                                                            <option value="25">25</option>
                                                            <option value="50">50</option>
                                                            <option value="100">100</option>
                                                        </select>&nbsp;</label></div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="text-md-end dataTables_filter" id="dataTable_filter-3"><label class="form-label"><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
                                            </div>
                                        </div>
                                        <div class="table-responsive table mt-2" id="dataTable-3" role="grid" aria-describedby="dataTable_info">
                                            <?php
                                            /*
                                            include "php scripts/ConstruirTablaReparaciones.php";
                                            ConstruirTablaCarga(3);
                                            */
                                            ?>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 align-self-center">
                                                <p id="dataTable_info-3" class="dataTables_info" role="status" aria-live="polite">Mostrando de x a y</p>
                                            </div>
                                            <div class="col-md-6">
                                                <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                                    <ul class="pagination">
                                                        <li class="page-item disabled"><a class="page-link" aria-label="Previous" href="#"><span aria-hidden="true">«</span></a></li>
                                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                        <li class="page-item"><a class="page-link" aria-label="Next" href="#"><span aria-hidden="true">»</span></a></li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" role="tabpanel" id="tab-4">
                                        <div class="row">
                                            <div class="col-md-6 text-nowrap">
                                                <div id="dataTable_length-4" class="dataTables_length" aria-controls="dataTable"><label class="form-label">Mostrar<select class="d-inline-block form-select form-select-sm">
                                                            <option value="10" selected="">10</option>
                                                            <option value="25">25</option>
                                                            <option value="50">50</option>
                                                            <option value="100">100</option>
                                                        </select>&nbsp;</label></div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="text-md-end dataTables_filter" id="dataTable_filter-4"><label class="form-label"><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
                                            </div>
                                        </div>
                                        <div class="table-responsive table mt-2" id="dataTable-4" role="grid" aria-describedby="dataTable_info">
                                            <?php
                                            /*
                                            include "php scripts/ConstruirTablaReparaciones.php";
                                            ConstruirTablaCarga(4);
                                            */
                                            ?>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 align-self-center">
                                                <p id="dataTable_info-4" class="dataTables_info" role="status" aria-live="polite">Mostrando de x a y</p>
                                            </div>
                                            <div class="col-md-6">
                                                <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                                    <ul class="pagination">
                                                        <li class="page-item disabled"><a class="page-link" aria-label="Previous" href="#"><span aria-hidden="true">«</span></a></li>
                                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                        <li class="page-item"><a class="page-link" aria-label="Next" href="#"><span aria-hidden="true">»</span></a></li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                    -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © Kalicel 2023</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    
    <script src="https://geodata.solutions/includes/countrystate.js"></script>
    <script src="assets/js/theme.js"></script>
    <link rel="stylesheet" href="assets/css/extra.css">
</body>

</html>