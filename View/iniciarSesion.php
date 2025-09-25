<?php 
if(session_status() == PHP_SESSION_NONE) {
    session_start();
}

    include_once 'layout.php';
  include_once __DIR__ . '/../Controller/loginController.php';
?>
<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Óptica Grisol</title>
   <?php IncluirCSS();?>
</head>
    <body>
       <?php MostrarMenu();?>
    
    <section class="registrer-section">
        <div class="container full-height">
       <div class="row justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="100">
        <?php
                                        if(isset($_SESSION["txtMensaje"])){
                                        echo '<div class="alert alert-danger">' . $_SESSION["txtMensaje"] . '</div>';
                                        unset($_SESSION['txtMensaje']);           
                            }
                                    ?>           
       <div class="col-auto form-container data-aos fade-up" data-aos-delay="100">  
                   <h4 class="mb-4 text-center my-2">Iniciar Sesión</h4>
                       
                   <form method="POST" id="contactForm" name="contactForm" class="contactForm aling-items-center">
                     <div class="text-center mb-3">           
                            <label for="email" class="form-label">Correo Electrónico</label>
                                               <input type="email" class="form-control" name="CorreoElectronico" id="CorreoElectronico" required>

                                            <div class="text-center mb-3"> 
                                                <label for="password" class="form-label">Contraseña</label>
                                                <input type="password" class="form-control" name="Contrasenna" id="Contrasenna" required>
                                            </div>
                                            
                                           <div class="text-center mb-3"> 
                                                <div class="form-group">
                                                    <a class="text link-azul" href="recuperarCuenta.php">Recuperar acceso</a>
                                                </div>
                                            </div>

                                            <div class="text-center mb-3"> 
                                                <div class="form-group">
                                                    <p>¿No tienes cuenta? <a class="link-azul" href="RegistrarPaciente.php">Registrarse</a></p>
                                                </div>
                                            </div>

                                            <div class="text-center my-2">
                                               <button type="submit" class="btn btn-custom" name="btnIniciarSesion">Iniciar sesión</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php MostrarFooter(); ?>
    <?php IncluirScripts(); ?>
</body>

</html>
