<?php
session_start();
if (empty($_SESSION['ID'])) {
    header("Location: login.php");
}

include "php-scripts/Conexión.php";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Inventario - Kalicel</title>
    <link rel="icon" type="image/png" sizes="3264x3264" href="assets/img/ícono-Kalicel.png">
    <link rel="icon" type="image/png" sizes="3264x3264" href="assets/img/ícono-Kalicel.png">
    <link rel="icon" type="image/png" sizes="3264x3264" href="assets/img/ícono-Kalicel.png">
    <link rel="icon" type="image/png" sizes="3264x3264" href="assets/img/ícono-Kalicel.png">
    <link rel="icon" type="image/png" sizes="3264x3264" href="assets/img/ícono-Kalicel.png">
    <meta name="description" content="Sistema de administración web de reparaciones, estados de pedidos, e interacción con el cliente.">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
    <script src="assets/js/Funciones.js"></script>
    <script src="assets/js/AltasBajas.js"></script>
    <script src="assets/js/AjaxFiltros.js"></script>
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background: #fe0000;">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"></div>
                    <div class="sidebar-brand-text mx-3"><span>Kalicel</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link" href="index.html"><i class="fas fa-tachometer-alt"></i><span>Panel</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="profile.html"><i class="fas fa-user"></i><span>Perfil</span></a></li>
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
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="php-scripts/logout.php"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <div class="container container-personalizado">
                        <div class="div-vecino-botón-añadir">
                            <h3 class="text-dark d-lg-flex justify-content-lg-center align-items-lg-center mb-4">Refacciones</h3>
                        </div>
                        <div class="div-botón-añadir" style="text-align: right;"><a href="RegistroDisplay.php"><button class="btn btn-primary btn-alta" type="button">Añadir</button></a></div>
                    </div>
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">Displays</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 text-nowrap">
                                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable">
                                        <label class="form-label">Mostrar<select class="d-inline-block form-select form-select-sm">
                                                <option value="10" selected="">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>&nbsp;</label>
                                    </div>
                                    <div class="text-md-end dataTables_filter" id="divInputFiltro">
                                        <label class="form-label text-left d-lg-flex justify-content-lg-start align-items-lg-center" for="capturaBúsqueda">
                                            Filtrar&nbsp;
                                            <input id="capturaBúsqueda" type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Buscar" name="capturaBúsqueda" onkeyup="javascript:buscarDisplays();">
                                        </label>
                                    </div>
                                </div>
                                <div class="text-md-end dataTables_filter" id="dataTable_filter">
                                    <label for="FiltroMarca" class="form-label">Marca</label>
                                    <select id="FiltroMarca" class="form-control form-control-sm" aria-controls="dataTable" name="FiltroMarca" onchange="javascript:opcionesModelos();">
                                        <option value=""></option>
                                        <option value="Apple">Apple</option>
                                        <option value="Samsung">Samsung</option>
                                        <option value="Motorola">Motorola</option>
                                        <option value="Huawei">Huawei</option>
                                        <option value="Xiaomi">Xiaomi</option>
                                        <option value="Alcatel">Alcatel</option>
                                        <option value="LG">LG</option>
                                        <option value="ZTE">ZTE</option>
                                        <option value="Hisense">Hisense</option>
                                        <option value="M4">M4</option>
                                        <option value="Nokia">Nokia</option>
                                        <option value="Oppo / Realme">Oppo / Realme</option>
                                    </select>

                                    <label for="FiltroModelo" class="form-label">Modelo</label>
                                    <select id="FiltroModelo" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Modelo" name="FiltroModelo" onchange="javascript:opcionesColores();">
                                        <option value=""></option>
                                    </select>

                                    <label for="FiltroColor" class="form-label">Color</label>
                                    <select id="FiltroColor" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Modelo" name="FiltroModelo" onchange="javascript:opcionesColores();">
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive table mt-2" id="tablaFiltrada" role="grid" aria-describedby="dataTable_info">
                        </div>
                        <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                            <?php
                            include "php-scripts/ConstruirTablaRefacciones.php";
                            #ConstruirTablaCarga();
                            ?>
                        </div>
                        <div class="row">
                            <div class="col-md-6 align-self-center">
                                <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p>
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
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-white sticky-footer">
        <div class="container my-auto">
            <div class="text-center my-auto copyright"><span>Copyright © Kalicel 2023</span></div>
        </div>
    </footer>
    <a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>