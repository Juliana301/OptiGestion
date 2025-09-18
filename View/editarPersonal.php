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

        
        <h4 class="text-center mb-3">Datos de Personal</h4>
        
       
        <form action="forms/editarPersonal.php" method="post" role="form" class="contactForm">
          <div class="row">
            
            
            <div class="mb-3 col-md-4">
              <label for="cedula" class="form-label">Cédula</label>
              <input type="text" name="cedula" id="cedula" class="form-control" placeholder="667262259" required>
            </div>

            
            <div class="mb-3 col-md-4">
              <label for="nombre" class="form-label">Nombre</label>
              <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Chase" required>
            </div>

            
            <div class="mb-3 col-md-4">
              <label for="apellidos" class="form-label">Apellidos</label>
              <input type="text" name="apellidos" id="apellidos" class="form-control" placeholder="Gonzalez Matarrita" required>
            </div>

            
            <div class="mb-3 col-md-6">
              <label for="email" class="form-label">Correo Electrónico</label>
              <input type="email" name="email" id="email" class="form-control" placeholder="c@gmail.com" required>
            </div>

          
            <div class="mb-3 col-md-6">
              <label for="telefono" class="form-label">Número de Teléfono</label>
              <input type="tel" name="telefono" id="telefono" class="form-control" placeholder="888888" required>
            </div>

            
            <div class="mb-3 col-md-6">
              <label for="rol" class="form-label">Seleccione el rol</label>
              <select name="rol" id="rol" class="form-select" required>
                <option value="">Seleccionar</option>
                <option value="cajero">Cajero/a</option>
                <option value="supervisor">Supervisor/a de inventario</option>
                <option value="admin">Administrador/a</option>
              </select>
            </div>

            
            <div class="col-md-12 text-center mb-4">
              <div class="form-check d-inline-block">
                <input class="form-check-input" type="checkbox" name="activo" id="activo" value="0">
                <label class="form-check-label" for="activo">Inactivar</label>
              </div>
            </div>

            
            <div class="text-center mb-5">
              <button type="submit" class="btn btn-custom px-4" id="EditarPersonal" name="btnEditarPersonal">
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
   