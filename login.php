<!DOCTYPE html>
<html style="background-color: var(--bs-kalicel-rojo);">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - Kalicel</title>
    <link rel="icon" type="image/png" sizes="3264x3264" href="assets/img/ícono-Kalicel.png">
    <link rel="icon" type="image/png" sizes="3264x3264" href="assets/img/ícono-Kalicel.png">
    <link rel="icon" type="image/png" sizes="3264x3264" href="assets/img/ícono-Kalicel.png">
    <link rel="icon" type="image/png" sizes="3264x3264" href="assets/img/ícono-Kalicel.png">
    <link rel="icon" type="image/png" sizes="3264x3264" href="assets/img/ícono-Kalicel.png">
    <meta name="description" content="Sistema de administración web de reparaciones, estados de pedidos, e interacción con el cliente.">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>

<body style="background-color: var(--bs-kalicel-rojo);">
    <div class="container" style="background-color: var(--bs-kalicel-rojo);">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-12 col-xl-10" style="background-color: var(--bs-kalicel-rojo);">
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-flex">
                                <div class="flex-grow-1 bg-login-image" style="background-image: url(&quot;assets/img/PORTADA-KALICEL.jpg&quot;);"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h4 class="text-dark mb-4">Bienvenido</h4>
                                    </div>
                                    <!-- 
                                    action="php scripts/controlador_login.php"
                                    -->
                                    <form class="user" method="POST" action="controlador_login.php">
                                        <div class="mb-3"><input class="form-control form-control-user" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Ingrese su email" name="email"></div>
                                        <div class="mb-3"><input class="form-control form-control-user" type="password" id="exampleInputPassword" placeholder="Contraseña" name="password" value="current-password"></div>
                                        <div class="mb-3">
                                            <div class="custom-control custom-checkbox small">
                                                <div class="form-check"><input class="form-check-input custom-control-input" type="checkbox" id="formCheck-1"><label class="form-check-label custom-control-label" for="formCheck-1">Recuérdame</label></div>
                                            </div>
                                        </div><input name="InicioSesión" class="btn btn-primary d-block btn-user w-100" type="submit" value="Iniciar sesión">
                                        <hr><a class="btn btn-primary d-block btn-google btn-user w-100 mb-2" role="button"><i class="fab fa-google"></i>&nbsp; Login with Google</a><a class="btn btn-primary d-block btn-facebook btn-user w-100" role="button"><i class="fab fa-facebook-f"></i>&nbsp; Login with Facebook</a>
                                        <hr>
                                        <?php
                                        //include "php scripts/controlador_login.php";
                                        ?>
                                    </form>
                                    <div class="text-center"><a class="small" href="forgot.php">¿Olvidaste la contraseña?</a></div>
                                    <div class="text-center"><a class="small" href="register.html">Crea un perfil de administrador</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>