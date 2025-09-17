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
        <h2>Datos de Personal</h2>
       
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <form action="forms/editarPersonal.php" method="post" role="form" class="php-email-form">
          <div class="row">
              <div class="col-md-4 form-group text-center">
                <label for="id" class="form-label">Cédula</label>
              <input type="text" name="name" class="form-control" id="name" placeholder="667262259" required="">
            </div>
            <div class="col-md-4 form-group text-center">
                <label for="name" class="form-label">Nombre</label>
              <input type="text" name="name" class="form-control" id="name" placeholder="Chase" required="">
            </div>
             <div class="col-md-4 form-group text-center">
                <label for="name" class="form-label">Apellidos</label>
              <input type="text" name="name" class="form-control" id="name" placeholder="Gonzalez Matarrita" required="">
            </div>
            <div class="col-md-4 form-group mt-3 text-center my-4">
                <label for="email" class="form-label">Correo Electrónico</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="c@gmail.com" required="">
            </div>
            <div class="col-md-4 form-group mt-3 text-center my-4">
                <label for="tel" class="form-label">Número de Teléfono</label>
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="888888" required="">
            </div>
          
           <div class="col-md-4 form-group mt-3 text-center my-4">
            <label for="date" class="form-label">Seleccione la sucursal</label>
               <select name="department" id="department" class="form-select" required="">
                <option value="">Seleccionar</option>
                 <option value="Department 1">Sucursal 1</option>
                  <option value="Department 2">Sucursal 2</option>
                   <option value="Department 3">Sucursal 3</option>
                   </select>
                </div>
                  <div class="col-md-4 form-group mt-3 text-center my-4">
                 <label for="date" class="form-label">Seleccione el rol</label>
                 <select name="department" id="department" class="form-select" required="">
                 <option value="">Seleccionar</option>
                <option value="Department 1">Cajero/a</option>
                 <option value="Department 2">Supervisor/a de inventario</option>
                 <option value="Department 3">Administrador/a</option>
                  </select>
                  </div>
                <div class="col-md-12 text-center mb-4">
                 <div class="form-check d-inline-block">
                <input class="form-check-input" type="checkbox" name="activo" id="activo" value="0">
                 <label class="form-check-label" for="activo">
                 Inactivar</label>
                 </div>
                </div>
          
          <div class="col-md-12 text-center my-4">
          <button type="submit" class="btn btn-primary bg-primary px-4" id="EditarPersonal" name="btnEditarPersonal"> <i class="bi bi-pencil-square"></i> Guardar Cambios</button>
          </div>
        </form>
 </div>
</section>
</main>
     <?php MostrarFooter(); ?>
    <?php IncluirScripts(); ?>
</body>
</html>
   