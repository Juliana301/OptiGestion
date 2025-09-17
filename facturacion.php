
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
    <title>Ópticas Vitra</title>
   <?php IncluirCSS();?>
</head>
    <body>
       <?php MostrarMenu();?>

<main class="container py-5">
    <h2 class="text-center mb-4">Facturación</h2>
<div class="mb-4 text-end">
    <a href="nuevaFactura.php" class="btn btn-success">
        <i class="bi bi-plus-circle"></i>Nueva Factura</a>
</div>

<div class="d-flex justify-content-center">
<form class="row g-3 align-items-end mb-4">
    
<div class="col-md-12">
  <label for="cedulaInput" class="form-label">Filtrar por número de factura</label>
   <input type="text" id="codigoInput" class="form-control" placeholder="F-1525">   
</div>
  <div class="col-md-4">
        <label for="fechaInicio" class="form-label">Desde</label>
        <input type="date" id="fechaInicio" class="form-control">
    </div>
    <div class="col-md-4">
         <label for="fechaFin" class="form-label">Hasta</label>
        <input type="date" id="fechaFin" class="form-control">
    </div>
</form>
</div>
<div class="table-responsive">
  <table class="table align-middle">
    <thead>
      <tr>
       <th>Número Factura</th>
       <th>Fecha</th>
       <th>Cédula de Cliente</th>
       <th>Cliente</th>
       <th>Total</th>
       <th>Estado</th>
       <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      
       <tr>
        <td>F-00111</td>
        <td>2025-07-28</td>
        <td>2522585</td>
        <td>Chase Gonzalez</td>
        <td>₡20.000</td>
        <td><span class="badge bg-success">Pagada</span></td>
        <td>
            <a href="VerFactura.php?id=111" class="btn btn-sm btn-outline-secondary">
                <i class="bi bi-eye"></i>
            </a>
            <a href="editarFactura.php?id=111" class="btn btn-sm btn-outline-primary">
                <i class="bi bi-pencil-square"></i>
            </a>
        </td>
    </tr>
    <tr>
        <td>F-00112</td>
        <td>2025-07-29</td>
        <td>2523600</td>
        <td>Maria López</td>
        <td>₡35.000</td>
        <td><span class="badge bg-warning text-dark">Pendiente</span></td>
        <td>
            <a href="VerFactura.php?id=112" class="btn btn-sm btn-outline-secondary">
                <i class="bi bi-eye"></i>
            </a>
            <a href="editarFactura.php?id=112" class="btn btn-sm btn-outline-primary">
                <i class="bi bi-pencil-square"></i>
            </a>
        </td>
    </tr>
    <tr>
        <td>F-00113</td>
        <td>2025-07-30</td>
        <td>2524789</td>
        <td>Juan Pérez</td>
        <td>₡50.000</td>
        <td><span class="badge bg-success">Pagada</span></td>
        <td>
            <a href="VerFactura.php?id=113" class="btn btn-sm btn-outline-secondary">
                <i class="bi bi-eye"></i>
            </a>
            <a href="editarFactura.php?id=113" class="btn btn-sm btn-outline-primary">
                <i class="bi bi-pencil-square"></i>
            </a>
        </td>
    </tr>
    <tr>
        <td>F-00114</td>
        <td>2025-08-01</td>
        <td>2525890</td>
        <td>Ana Morales</td>
        <td>₡40.000</td>
        <td><span class="badge bg-warning text-dark">Pendiente</span></td>
        <td>
            <a href="VerFactura.php?id=114" class="btn btn-sm btn-outline-secondary">
                <i class="bi bi-eye"></i>
            </a>
            <a href="editarFactura.php?id=114" class="btn btn-sm btn-outline-primary">
                <i class="bi bi-pencil-square"></i>
            </a>
        </td>
    </tr>
        <tr>
          <td>F-00222</td>
          <td>2025-07-28</td>
          <td>2522585</td>
          <td>Chase Gonzalez</td>
          <td>₡50.000</td>
           <td><spam class="badge bg-danger">Anulada</span></td>
           <td>
            <a href="VerFactura.php?id=114" class="btn btn-sm btn-outline-secondary">
                <i class="bi bi-eye"></i>
            </a>
             <a href="editarFactura.php?id=114" class="btn btn-sm btn-outline-primary">
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
