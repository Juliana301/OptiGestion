<?php 
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
    
    <section class=" d-flex align-items-center justify-content-center min-vh-100">
        <div class="container ">
            <?php
                if(isset($_SESSION["txtMensaje"])){
                 echo '<div class="alert alert-' . (isset($_SESSION["registroExitoso"]) ? 'success' : 'danger') . '">' . $_SESSION["txtMensaje"] . '</div>';
                 unset($_SESSION["txtMensaje"]);   
                 unset($_SESSION["registroExitoso"]);        
          }
          ?>  
        <div class="section-title text-center my-2" data-aos="fade-up">
                  <h4 class="mb-1 text-center">Ingrese sus Datos</h4>
                </div>
                   <div class="row justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="100">
                   <div class="col-lg-7 " data-aos="fade-up" data-aos-delay="100">  
                   <form method="POST" id="contactForm" name="contactForm" class="contactForm align-items-center">
                   <div class="row">    
                    <div class="col-md-6 mb-3 my-3">           
                            
                                           <label for="Cedula" class="form-label">Cédula</label>
                                                <input type="text" class="form-control" name="Cedula" id="Cedula"
                                                placeholder="" required>
                                            </div>

                                          <div class="col-md-6 mb-3 my-3">           
                                           <label for="Nombre" class="form-label">Nombre</label>
                                                <input type="text" class="form-control" name="Nombre" id="Nombre"
                                                placeholder="" required>
                                            </div>

                                            <div class="col-md-6 mb-3 my-3">
                                                <label for="Apellido" class="form-label">Primer Apellido</label>
                                                <input type="text" class="form-control" name="Apellido" id="Apellido"
                                                    placeholder="" required>
                                            </div>
                                            <div class="col-md-6 mb-3 my-3">
                                                <label for="ApellidoDos" class="form-label">Segundo Apellido</label>
                                                <input type="text" class="form-control" name="ApellidoDos" id="ApellidoDos"
                                                    placeholder="" required>
                                            </div>

                                            <div class="col-md-6 mb-3 my-3">
                                                <label for="CorreoElectronico" class="form-label">Correo Electrónico</label>
                                                <input type="email" class="form-control" name="CorreoElectronico" id="CorreoElectronico"
                                                    placeholder="" required>
                                            </div>

                                            <div class="col-md-6 mb-3 my-3">
                                                <label for="Contrasenna" class="form-label">Contraseña</label>
                                                <input type="password" class="form-control" name="Contrasenna"
                                                    id="Contrasenna" placeholder="" required>
                                            </div>

                                           <div class="col-md-6 mb-3">
                                                <label for="ConfirmarContrasenna" class="form-label">Confirmar Contraseña</label>
                                                <input type="password" class="form-control" name="ConfirmarContrasenna"
                                                    id="ConfirmarContrasenna" placeholder="" required>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="Telefono" class="form-label">Teléfono</label>
                                                <input type="text" class="form-control" name="Telefono" id="Telefono"
                                                    placeholder="" required>
                                            </div>

                                            <div class="col-md-12 mb-3">
                                                <label for="Direccion" class="form-label">Dirección</label>
                                                <input type="text" class="form-control" name="Direccion" id="Direccion"
                                                    placeholder="">
                                            </div>
                                             <div class="col-md-12 mb-3">
                                                <label for="FechaNacimiento" class="form-label">Fecha Nacimiento</label>
                                                <input type="date" class="form-control" name="FechaNacimiento" id="FechaNacimiento"
                                                required max="<?= date('Y-m-d') ?>" placeholder="">
                                            </div>

                                            <div class="col-md-12 mb-1 text-center">
                                                <div class="form-group">
                                                    <p>¿Ya tienes cuenta? <a class="link-azul" href="iniciarSesion.php">Iniciar sesión</a></p>
                                                </div>
                                            </div>

                                            <div class="col-md-12 text-center ">
                                                <button type="submit" class="btn btn-custom" name="btnRegistrarPaciente">Registrarse</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                             </div>
                        </div>
                   </section>
    <?php MostrarFooter(); ?>
    <?php IncluirScripts(); ?>
</body>
</html>
