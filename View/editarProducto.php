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
  <?php IncluirCSS(); ?>
</head>

<body>
  <?php MostrarMenu(); ?>

  <section class="full-height-section">
    <div class="container" data-aos="fade-up">
      <div class="row justify-content-center">
        <div class="col-md-8">

          
          <h4 class="text-center mb-3">Editar Producto</h4>
          <p class="text-center mb-5">Actualice los datos del producto según sea necesario</p>

          
          <form action="forms/editarProductoS.php" method="post" role="form" class="php-email-form">

            
            <div class="row justify-content-center">
            <div class="col-md-6"> 
              <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre de Producto" required>
              </div>
            </div>
          </div>

            <div class="row justify-content-center">
            <div class="col-md-6"> 
              <div class="mb-3">
              <label for="stock" class="form-label">Stock</label>
              <input type="number" name="stock" id="stock" class="form-control" placeholder="Cantidad disponible" required>
            </div>
            </div>
          </div>


            
            <div class="text-center mt-4">
              <button class="btn btn-custom px-4" type="submit">
                 Editar
              </button>
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