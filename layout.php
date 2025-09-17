<?php

function MostrarMenu(){
    echo '
            <nav class="navbar navbar-expand-lg navbar-dark bg-blue-light custom-navbar">
                <div class="container px-5">
                    <a class="navbar-brand" href="index.html">Ópticas Vitra</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
                            <li class="nav-item"><a class="nav-link" href="about.php">Sobre Nosotros</a></li>
                            <li class="nav-item"><a class="nav-link" href="anteojos.php">Anteojos</a></li>
                            <li class="nav-item"><a class="nav-link" href="iniciarSesion.php">Iniciar Sesión</a></li>
                            <li class="nav-item"><a class="nav-link" href="personal.php">Personal</a></li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownBlog" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Citas</a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                                    <li><a class="dropdown-item" href="appointmentForm.php">Agendar Cita</a></li>
                                    <li><a class="dropdown-item" href="historialMedico.php">Historial Médico</a></li>
                                </ul>
                                </li>
                                 <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownBlog" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Administración</a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                                    <li><a class="dropdown-item" href="reportes.php">Reportes</a></li>
                                    <li><a class="dropdown-item" href="inventario.php">Inventario</a></li>
                                    <li><a class="dropdown-item" href="facturacion.php">Facturacion</a></li>
                                </ul>
                                </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownPortfolio" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Perfil</a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownPortfolio">
                                    <li><a class="dropdown-item" href="editarPerfil.php">Editar Perfil</a></li>
                                    <li><a class="dropdown-item" href="#">Cerrar Sesión</a></li>
                                   
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>';
}
function MostrarFooter(){
	echo '<footer class="footer bg-dark text-light pt-5 pb-3 mt-auto" style="margin-top:auto;">
    <div class="container text-center">
        <div class="row justify-content-center">
            <!-- Sucursales -->
            <div class="col-md-3 mb-4">
                <h6 class="fw-bold text-uppercase">Sucursales</h6>
                <a href="https://opticasvitra.com/ubicaciones/" class="text-light text-decoration-none small">Ver ubicaciones</a>
            </div>

            <!-- Redes Sociales -->
            <div class="col-md-3 mb-4">
                <h6 class="fw-bold text-uppercase">Redes Sociales</h6>
                <p class="mb-1 small">
                    <a href="https://www.instagram.com/opticasvitra/?hl=es-la" class="text-light text-decoration-none">
                        <i class="bi bi-instagram me-1"></i>Instagram
                    </a>
                </p>
                <p class="mb-1 small">
                    <a href="https://www.facebook.com/opticasVITRAcr/" class="text-light text-decoration-none">
                        <i class="bi bi-facebook me-1"></i>Facebook
                    </a>
                </p>
                <p class="mb-1 small">
                    <a href="https://www.tiktok.com/@opticasvitra?lang=es" class="text-light text-decoration-none">
                        <i class="fab fa-tiktok me-1"></i>TikTok
                    </a>
                </p>
            </div>

            <!-- Oficinas -->
            <div class="col-md-3 mb-4">
                <h6 class="fw-bold text-uppercase">Oficinas Centrales</h6>
                <p class="mb-1 small">San José, Costa Rica</p>
                <h6 class="fw-bold mt-2 small">Servicio al Cliente</h6>
                <p class="mb-1 small">+506 4800 - 1300</p>
                <p class="mb-0 small">servicioalcliente@opticasvitra.com</p>
            </div>
        </div>

        <hr class="border-secondary">

        <!-- Copyright -->
        <div class="row">
            <div class="col">
                <p class="mb-0 small">
                    &copy; <script>document.write(new Date().getFullYear());</script> Ópticas Vitra. Todos los derechos reservados.
                </p>
            </div>
        </div>
    </div>
</footer>';
}
function IncluirCSS() {
    echo '
    <!-- CSS Globales -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">

     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
   
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
   
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css">
    ';
}

function IncluirScripts() {
    echo '
    <!-- JS Globales -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    ';
}

?>