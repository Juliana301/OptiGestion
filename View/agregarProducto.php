<?php
include('layout.php');
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Óptica Grisol - Agregar Producto</title>
  <?php IncluirCSS(); ?>
</head>

<body>
  <?php MostrarMenu(); ?>

  <section class="appointment section">
    <div class="container section-title text-center my-5" data-aos="fade-up">
      <h2>Agregar Producto</h2>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <form action="forms/agregarProductoS.php" method="post" role="form" class="php-email-form mx-auto" style="max-width: 600px;">
        
      
        <div class="mb-4">
          <label for="nombre" class="form-label">Nombre del Producto</label>
          <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Lentes de Sol Ray-Ban" required>
        </div>

        <!-- Categoría -->
       <!--  <div class="mb-4">
          <label for="categoria" class="form-label">Categoría</label>
          <select name="categoria" id="categoria" class="form-control" required>
            <option value="">Seleccione una categoría</option>
            <option value="Lentes de Sol">Lentes de Sol</option>
            <option value="Lentes Oftálmicos">Lentes de Lectura</option>
            <option value="Lentes de Contacto">Lentes de Contacto</option>
            <option value="Accesorios">Accesorios</option>
          </select>
        </div>-->

        
        <div class="mb-4">
          <label for="precio" class="form-label">Precio (₡)</label>
          <input type="number" step="0.01" name="precio" id="precio" class="form-control" placeholder="25000" required>
        </div>

        
        <div class="mb-4">
          <label for="stock" class="form-label">Stock Disponible</label>
          <input type="number" name="stock" id="stock" class="form-control" placeholder="15" required>
        </div>

        
        <div class="mb-4">
          <label for="descripcion" class="form-label">Descripción</label>
          <textarea name="descripcion" id="descripcion" class="form-control" rows="3" placeholder="Lentes polarizados con protección UV400"></textarea>
        </div>

        
        <div class="text-center my-4">
          <button class="btn btn-custom " type="submit">Agregar Producto</button>
        </div>

      </form>
    </div>
  </section>

  <?php MostrarFooter(); ?>
  <?php IncluirScripts(); ?>
</body>
</html>