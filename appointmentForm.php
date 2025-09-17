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
        <h2>Citas</h2>
        <p>Reserve su cita llenando el formulario</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <form action="forms/appointment.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="col-md-4 form-group mt-3 mt-md-0">   
            <label for="id" class="form-label">Cédula</label>
            <input type="text" class="form-control" name="id" id="id" placeholder="" required>
              </div>

              <div class="col-md-4 form-group mt-3 mt-md-0">          
              <label for="Name" class="form-label">Nombre</label>
              <input type="text" class="form-control" name="Name" id="Name" placeholder="" required>
               </div>

             <div class="col-md-4 form-group mt-3 mt-md-0 mb-3">
             <label for="name" class="form-label">Apellidos</label>
              <input type="name" class="form-control" name="name" id="name"placeholder="" required>
           </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
                <label for="date" class="form-label">Correo Electrónico</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="" required="">
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
                <label for="date" class="form-label">Número de Teléfono</label>
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="Número de Teléfono" required="">
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 form-group mt-3">
                <label for="date" class="form-label">Fecha de Cita</label>
              <input type="datetime-local" name="date" class="form-control datepicker" id="date" placeholder="Fecha de Cita" required="">
            </div>
            <div class="col-md-4 form-group mt-3">
                <label for="date" class="form-label">Seleccione la sucursal</label>
              <select name="department" id="department" class="form-select" required="">
                <option value="">Seleccionar</option>
                <option value="Department 1">Sucursal 1</option>
                <option value="Department 2">Sucursal 2</option>
                <option value="Department 3">Sucursal 3</option>
              </select>
            </div>
            <!--<div class="col-md-4 form-group mt-3">
              <select name="doctor" id="doctor" class="form-select" required="">
                <option value="">Select Doctor</option>
                <option value="Doctor 1">Doctor 1</option>
                <option value="Doctor 2">Doctor 2</option>
                <option value="Doctor 3">Doctor 3</option>
              </select>
            </div>
          </div>-->

          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Mensaje (Opcional)"></textarea>
          </div>
          <div class="mt-3">
            <div class="loading">Cargando</div>
            <div class="error-message"></div>
            <div class="sent-message">Su cita ha sido reserva con éxito.</div>
            <div class="text-center my-2"><button class="btn btn-outline-light bg-primary" type="submit">Agendar Cita</button></div>
          </div>
        </form>
 </div>
</section>
</main>
     <?php MostrarFooter(); ?>
    <?php IncluirScripts(); ?>
</body>
</html>
   