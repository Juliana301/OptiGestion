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
    <title>Ópticas Vitra</title>
   <?php IncluirCSS();?>
</head>
    <body>
       <?php MostrarMenu();?>
<!-- Appointment Section -->
    <section class="appointment section">

      <!-- Section Title -->
      <div class="container section-title text-center my-5" data-aos="fade-up">
        <h2>Datos de Usuario</Em></h2>
       
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <form action="forms/appointment.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="col-md-4 form-group mt-3 mt-md-0 text-center">
            <label for="id" class="form-label">Cédula</label>
            <input type="text" class="form-control" name="id" id="id" placeholder="" required>
              </div>

              <div class="col-md-4 form-group mt-3 mt-md-0 text-center">      
              <label for="Name" class="form-label">Nombre</label>
              <input type="text" class="form-control" name="Name" id="Name" placeholder="" required>
               </div>

             <div class="col-md-4 form-group mt-3 mt-md-0 text-center mb-3">
             <label for="name" class="form-label">Apellidos</label>
              <input type="name" class="form-control" name="name" id="name"placeholder="" required>
           </div>
            <div class="col-md-4 form-group mt-3 mt-md-0 text-center">
                <label for="date" class="form-label">Correo Electrónico</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="c@gmail.com" required="">
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0 text-center">
                <label for="date" class="form-label">Número de Teléfono</label>
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="888888" required="">
            </div>
          </div>
           <div class="col-md-12 mb-3 text-center my-4">
                <label for="Address" class="form-label">Dirección</label>
                 <input type="text" class="form-control" name="Address" id="Address" placeholder="San José">
             </div>
          <div class="mt-3">
          <div class="col-md-12 text-center my-4">
          <button type="submit" class="btn btn-primary bg-primary px-4" id="EditarUsuario" name="btnREditarUsuario"> <i class="bi bi-pencil-square"></i> Guardar Cambios</button>
          </div>
        </form>
 </div>
</section>
</main>
     <?php MostrarFooter(); ?>
    <?php IncluirScripts(); ?>
</body>
</html>
   