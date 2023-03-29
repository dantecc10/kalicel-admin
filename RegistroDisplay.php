<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Registrar Display - Kalicel</title>
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
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background: var(--bs-kalicel-rojo);">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="visible sidebar-brand-icon" data-bs-toggle="tooltip" data-bss-tooltip=""></div>
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
                    <div class="container-fluid">
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"></a>
                                <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                    <form class="me-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="https://kalicel.castelancarpinteyro.club/admin/login.php" target="_blank"><span class="d-none d-lg-inline me-2 text-gray-600 small">Iniciar sesión&nbsp;</span><i class="far fa-user rounded-circle" /></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Settings</a><a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Activity log</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <h3 class="text-dark mb-1">Registro</h3>
                </div>
                <section>
                    <h1 class="text-center text-capitalize">Displays</h1>
                    <div class="container">
                        <form id="application-form" action="php scripts/registrarDisplay.php" method="post">
                            <div class="form-group mb-3">
                                <div class="row">
                                    <div class="col">
                                        <p><strong>Modelo</strong>&nbsp;<span class="text-danger">*</span></p><input class="form-control" type="text" required="" name="modelo" placeholder="Axon 11 2021 / iPhone 11 Plus / S23 Ultra">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="row">
                                    <div class="col">
                                        <p><strong>Marca</strong>&nbsp;<span class="text-danger">*</span></p><select class="form-select" name="marca" required="">
                                            <optgroup label="This is a group">
                                                <option value="12" selected="">This is item 1</option>
                                                <option value="13">This is item 2</option>
                                                <option value="14">This is item 3</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <p><strong>Color</strong>&nbsp;<span class="text-danger">*</span></p><input class="form-control" type="text" name="color" required="" placeholder="Negro" value="Negro">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="row">
                                    <div class="col">
                                        <p><strong>Caja&nbsp;</strong><span class="text-danger">*</span></p><input class="form-control" type="number" required="" name="caja">
                                    </div>
                                    <div class="col">
                                        <p><strong>Cantidad&nbsp;</strong><span class="text-danger">*</span></p><input class="form-control" type="number" required="" name="cantidad">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="row">
                                    <div class="col">
                                        <p><strong>Calidad</strong></p><input class="form-control" type="text" name="calidad" placeholder="AAA">
                                    </div>
                                    <div class="col">
                                        <p><strong>Versión</strong></p><input class="form-control" type="text" name="versión" placeholder="2 / Pro / 3.4">
                                    </div>
                                </div>
                            </div>
                            <div class="justify-content-center d-flex form-group mb-3">
                                <div id="submit-btn">
                                    <div class="row"><input type="submit" class="btn btn-primary btn-light m-0 rounded-pill px-4 submit-formulario" type="button" style="min-width: 500px;" value="Registrar display" /></div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col">
                        <h3 id="fail" class="text-center text-danger d-none"><br>Form not Submitted&nbsp;<a href="contact.html">Try Again</a><br><br></h3>
                        <h3 id="success-1" class="text-center text-success d-none"><br>Form Submitted Successfully&nbsp;<a href="contact.html">Send Another Response</a><br><br></h3>
                    </div>
                </section>
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
</body>

</html>