<?php
 include('layout.php'); 
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
       <section class="full-height-section">
      <div class="container" data-aos="fade-up">
         <div class="row justify-content-center">
            <div class="col-md-8">

               
               <h4 class="text-center mb-3">Datos de Usuario</h4>
               <p class="text-center mb-4">Actualice los datos de usuario según sea necesario</p>

               
               <form action="forms/appointment.php" method="post" role="form" class="php-email-form">
                  <div class="row">

                     <div class="mb-3 col-md-4">
                        <label for="id" class="form-label">Cédula</label>
                        <input type="text" class="form-control" name="id" id="id" placeholder="" required>
                     </div>

                     <div class="mb-3 col-md-4">
                        <label for="Name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="Name" id="Name" placeholder="" required>
                     </div>

                     <div class="mb-3 col-md-4">
                        <label for="name" class="form-label">Apellidos</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="" required>
                     </div>

                     <div class="mb-3 col-md-6">
                        <label for="email" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="c@gmail.com" required>
                     </div>

                     <div class="mb-3 col-md-6">
                        <label for="phone" class="form-label">Número de Teléfono</label>
                        <input type="tel" class="form-control" name="phone" id="phone" placeholder="888888" required>
                     </div>

                     <div class="mb-3 col-md-12">
                        <label for="Address" class="form-label">Dirección</label>
                        <input type="text" class="form-control" name="Address" id="Address" placeholder="San José">
                     </div>

                     
                     <div class="col-md-12 text-center mt-4">
                        <button type="submit" class="btn btn-custom px-4" id="EditarUsuario" name="btnREditarUsuario">
                           <i class="bi bi-pencil-square"></i> Guardar Cambios
                        </button>
                     </div>

                  </div>
               </form>

            </div>
         </div>
      </div>
   </section>
</main>
     <?php MostrarFooter(); ?>
    <?php IncluirScripts(); ?>
</body>
</html>
   