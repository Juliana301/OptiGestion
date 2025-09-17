
<?php
 include('layout.php')
 
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

<main class="container py-5">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="text-center mb-4">Datos de Personal</h2>
     <a href="registrarPersonal.php" class="btn btn-custom ">Agregar Personal</a>
</div>

<div class="d-flex justify-content-center">
  <form class="mb-4 text-center">
    <label for="cedulaInput" class="form-label">Filtrar por cédula</label>
    <input type="text" id="cedulaInput" class="form-control" placeholder="25259592">
  </form>
</div>

      <div class="table-responsive">
  <table class="table align-middle">
    <thead>
      <tr>
       <th>Cédula</th>
       <th>Nombre</th>
       <th>Número de Teléfono</th>
       <th>Correo Electrónico</th>
       <th>Rol</th>
       <th>Sucursal</th>
       <th>Estado</th>
      </tr>
    </thead>
    <tbody>
     <tr>
        <td>62525251</td>
        <td>Chase Gonzalez Bolaños</td>
        <td>888888</td>
        <td>c@gmail.com</td>
        <td>Administrador de inventario</td>
        <td>Sucursal 1</td>
        <td>
            <a href="editarPersonal.php?id=2" class="btn btn-custom btn-outline-primary">
                <i class="bi bi-pencil-square"></i>
            </a>
        </td>
    </tr>
    <tr>
        <td>62526352</td>
        <td>Maria López</td>
        <td>887777</td>
        <td>maria@gmail.com</td>
        <td>Recepcionista</td>
        <td>Sucursal 2</td>
        <td>
            <a href="editarPersonal.php?id=3" class="btn btn-custom btn-outline-primary">
                <i class="bi bi-pencil-square"></i>
            </a>
        </td>
    </tr>
    <tr>
        <td>62527463</td>
        <td>Juan Pérez</td>
        <td>889999</td>
        <td>juan@gmail.com</td>
        <td>Optometrista</td>
        <td>Sucursal 1</td>
        <td>
            <a href="editarPersonal.php?id=4" class="btn btn-custom btn-outline-primary">
                <i class="bi bi-pencil-square"></i>
            </a>
        </td>
    </tr>
     <tr>
        <td>62528574</td>
        <td>Ana Morales</td>
        <td>880000</td>
        <td>ana@gmail.com</td>
        <td>Asistente de ventas</td>
        <td>Sucursal 3</td>
        <td>
            <a href="editarPersonal.php?id=5" class="btn btn-custom btn-outline-primary">
                <i class="bi bi-pencil-square"></i>
            </a>
        </td>
    </tr>
    <tr>
        <td>62529685</td>
        <td>Carlos Ruiz</td>
        <td>881111</td>
        <td>carlos@gmail.com</td>
        <td>Administrador</td>
        <td>Sucursal 2</td>
        <td>
            <a href="editarPersonal.php?id=6" class="btn btn-custom btn-outline-primary">
                <i class="bi bi-pencil-square"></i>
            </a>
        </td>
    </tr>
      
        </tbody>
    </table>
  </div>
</main>
          <?php MostrarFooter(); ?>
    <?php IncluirScripts(); ?>
    </body>
</html>
