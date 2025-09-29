<?php

 include('layout.php'); 
 include_once __DIR__ . '/../Controller/usuarioController.php';

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
<!-- Appointment Section -->
       <section class="full-height-section d-flex align-items-center">
      <div class="container" data-aos="fade-up">
          <?php
                if(isset($_SESSION["txtMensaje"])){
                 echo '<div class="alert alert-' . (isset($_SESSION["CambioExitoso"]) ? 'success' : 'danger') . '">' . $_SESSION["txtMensaje"] . '</div>';
                 unset($_SESSION["txtMensaje"]);   
                 unset($_SESSION["CambioExitoso"]);        
          }
          ?>  
         <div class="profile-card" data-aos="fade-up">
            <div class="profile-header">
                  <h4 class="mb-0">Perfil</h4>
                  </div>

                   <form method="POST" name="contactForm" class="row g-3 p-3" >
                      <input type="hidden" name="IdUsuario" id="IdUsuario" class="form-control" value= "<?php echo $usuario['IdUsuario']; ?>" required>
                     

                     <div class="col-md-6"> 
                        <h6 class="profile-section-title">Datos Personales</h6>
                        <div class="mb-3">
                        <label for="Cedula" class="form-label">Cédula</label>
                        <input type="text" name="Cedula" id="cedula" class="form-control" value= "<?php echo $usuario['Cedula']; ?>" required>
                     </div>

                     <div class="mb-3"> 
                        <label for="Nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="Nombre" id="nombre" value="<?php echo $usuario['Nombre']; ?>" placeholder="" required>
                     </div>

                     <div class="mb-3"> 
                        <label for="Apellido" class="form-label">Primer Apellido</label>
                        <input type="text" class="form-control" name="Apellido" id="Apellido" value="<?php echo $usuario['Apellido'];?>" placeholder="" required>
                     </div>

                     <div class="mb-3">
                        <label for="ApellidoDos" class="form-label">Segundo Apellido</label>
                        <input type="text" class="form-control" name="ApellidoDos" id="ApellidoDos" value="<?php echo $usuario['ApellidoDos'];?>" placeholder="" required>
                     </div>

                   <div class="mb-3">
                        <label for="FechaNacimiento" class="form-label">Fecha Nacimiento</label>
                        <input type="date" class="form-control" name="FechaNacimiento" id="FechaNacimiento" value="<?php echo $usuario['FechaNacimiento'];?>">
                     </div>
                  </div>

                     <div class="col-md-6"> 
                        <h6 class="profile-section-title">Contacto</h6>
                     <div class="mb-3">
                        <label for="Telefono" class="form-label">Número de Teléfono</label>
                        <input type="text" class="form-control" name="Telefono" id="Telefono" value="<?php echo $usuario['Telefono'];?>" placeholder="" required>
                     </div>

                        <div class="mb-3">
                        <label for="CorreoElectronico" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" name="CorreoElectronico" id="CorreoElectronico" value="<?php echo $usuario['CorreoElectronico'];?>" placeholder="" required>
                     </div>
                     
                     <div class="mb-3">
                        <label for="Direccion" class="form-label">Dirección</label>
                        <input type="text" class="form-control" name="Direccion" id="Direccion" value="<?php echo $usuario['Direccion'];?>" placeholder="" required>
                     </div>
                  </div>

                     <div class="col-12 text-center mt-3">
                        <button type="submit" class="btn btn-custom px-4" id="btnEditarPerfil" name="btnEditarPerfil">
                           <i class="bi bi-pencil-square"></i> Guardar Cambios
                        </button>
                     </div>
               </form>
            </div>
         </div>
   </section>
</main>
     <?php MostrarFooter(); ?>
    <?php IncluirScripts(); ?>
</body>
</html>
   