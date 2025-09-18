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

               
               <h4 class="text-center mb-3">Modificar Cita</h4>
               <p class="text-center mb-4">Actualice los datos de la cita según sea necesario</p>

               
               <form action="forms/editarCita.php" method="post" role="form" class="php-email-form">
                  <!-- hay que llamarlo desde la BD -->
                  <input type="hidden" name="citaId" value="123">  

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

                     <div class="mb-3 col-md-6">
                        <label for="date" class="form-label">Fecha y Hora</label>
                        <input type="datetime-local" name="date" class="form-control datepicker" id="date" placeholder="Fecha de Cita" required value="2025-07-28T14:00">
                     </div>

                     <div class="mb-3 col-md-12">
                        <label for="message" class="form-label">Mensaje (Opcional)</label>
                        <textarea class="form-control" name="message" id="message" rows="5" placeholder="Mensaje (Opcional)"></textarea>
                     </div>

                    
                     <div class="col-md-12 text-center mt-4">
                        <button class="btn btn-custom px-4" type="submit">
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
   