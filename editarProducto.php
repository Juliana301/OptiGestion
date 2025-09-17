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
  <?php IncluirCSS(); ?>
</head>

<body>
  <?php MostrarMenu(); ?>

  <section class="appointment section">
    <div class="container section-title text-center my-5" data-aos="fade-up">
      <h2>Editar Productos</h2>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <form action="forms/editarProductoS.php" method="post" role="form" class="php-email-form mx-auto" style="max-width: 500px;">
        
        <!-- Campo Nombre -->
        <div class="mb-4 text-center">
          <label for="nombre" class="form-label fw-bold">Nombre del Producto</label>
          <input type="text" name="nombre" id="nombre" class="form-control text-center" placeholder="Lentes de Sol" required>
        </div>

        <!-- Campo Stock -->
        <div class="mb-4 text-center">
          <label for="stock" class="form-label fw-bold">Stock</label>
          <input type="number" name="stock" id="stock" class="form-control text-center" placeholder="Cantidad disponible" required>
        </div>

        <!-- Botón Guardar -->
        <div class="text-center my-4">
          <button type="submit" class="btn btn-primary px-4">
            <i class="bi bi-pencil-square"></i> Guardar Cambios
          </button>
        </div>

      </form>
    </div>
  </section>

  <?php MostrarFooter(); ?>
  <?php IncluirScripts(); ?>
</body>
</html>