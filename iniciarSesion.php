<?php 
    include_once 'layout.php';
    
?>
<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Ópticas Vitra</title>
   <?php IncluirCSS();?>
</head>
    <body>
       <?php MostrarMenu();?>
    
    <section class="registrer-section">
        <div class="container full-height">
       <div class="row justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="100">
                   <div class="col-auto form-container data-aos="fade-up" data-aos-delay="100"">  
                   <h4 class="mb-4 text-center my-2">Iniciar Sesión</h4>
                   <form method="POST" id="contactForm" name="contactForm" class="contactForm aling-items-center">
                     <div class="text-center mb-3">           
                            <label for="Email" class="form-label">Correo Electrónico</label>
                                                <input type="email" class="form-control" name="Email" id="Email"
                                                    placeholder="" required>
                                            </div>

                                            <div class="text-center mb-3"> 
                                                <label for="Password" class="form-label">Contraseña</label>
                                                <input type="password" class="form-control" name="Password"
                                                    id="Password" placeholder="" required>
                                            </div>

                                           <div class="text-center mb-3"> 
                                                <div class="form-group">
                                                    <a class="text" href="recuperarCuenta.php">Recuperar acceso</a>
                                                </div>
                                            </div>

                                            <div class="text-center mb-3"> 
                                                <div class="form-group">
                                                    <p>¿No tienes cuenta? <a href="RegistrarUsuario.php">Registrarse</a></p>
                                                </div>
                                            </div>

                                            <div class="text-center my-2">
                                                <button type="submit" class="btn btn-outline-light bg-primary" id="btnRegistrarUsuario" name="btnRegistrarUsuario">Iniciar Sesión</button>
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
