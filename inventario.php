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

 <section class="container my-5 ">
        <div class="d-flex justify-content-between align-items-center mb-4">
       <h2>Inventario de Productos</h2>
       <a href="registrarProducto.php" class="btn btn-primary">Agregar Producto</a>
</div>

<!--filtro-->
<div class="d-flex justify-content-center">
<form class="row g-3 align-items-end mb-4">
    
<div class="col-md-6">
  <label for="cedulaInput" class="form-label">Filtrar por código</label>
   <input type="text" id="codigoInput" class="form-control" placeholder="5555">   
</div>

    <div class="col-md-6">
        <label for="sucursalSelect" class="form-label">Sucursales</label>
        <select id="sucursalSelect" class="form-select">
        <option value="">Todas las Sucursales</option>
        <option value="Sucursal 1">Sucursal 1</option>
        <option value="Sucursal 2">Sucursal 2</option>
        <option value="Sucursal 3">Sucursal 3</option>
        </select>
</div>
</form>
</div>

<div class="row" id="listaProductos">

    <div class="col-md-6 mb-4 producto">
        <div class="card shadow-sm">
        <div class="card-body">
        <div class="d-flex justify-content-between">
            <h5 class="card-title">Lentes de Sol</h5>
            <span class="fw-bold"></span>
</div>
<p class="mb-2">Stock: <strong>0</strong></p>
<div class="progress">
    <div class="progress-bar stock-bajo stock-0" role="progressbar">
        
</div>
</div>
<div class="d-flex justify-content-end my-2">
                        <a href="editarProducto.php?id=2" class="btn btn-editar btn-sm me-2">Editar</a>
                        <button class="btn btn-eliminar btn-sm" data-bs-toggle="modal" data-bs-target="#confirmarEliminarModal">Eliminar</button>
                     </div>
                </div>
            </div>
        </div>
    

    <div class="col-md-6 mb-4 producto">
        <div class="card shadow-sm">
        <div class="card-body">
        <div class="d-flex justify-content-between">
            <h5 class="card-title">Lentes de Sol</h5>
            <span class="fw-bold"></span>
</div>
<p class="mb-2">Stock: <strong>25</strong></p>
<div class="progress">
    <div class="progress-bar stock-bajo stock-20" role="progressbar">
        
</div>
</div>
<div class="d-flex justify-content-end my-2">
                      <a href="editarProducto.php?id=2" class="btn btn-editar btn-sm me-2">Editar</a>
                      <button class="btn btn-eliminar btn-sm" data-bs-toggle="modal" data-bs-target="#confirmarEliminarModal">Eliminar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    <div class="col-md-6 mb-4 producto">
        <div class="card shadow-sm">
        <div class="card-body">
        <div class="d-flex justify-content-between">
            <h5 class="card-title">Lentes de Sol</h5>
            <span class="fw-bold"></span>
</div>
<p class="mb-2">Stock: <strong>18</strong></p>
<div class="progress">
    <div class="progress-bar stock-bajo stock-18" role="progressbar">
        
</div>
</div>
<div class="d-flex justify-content-end my-2">
                      <a href="editarProducto.php?id=2" class="btn btn-editar btn-sm me-2">Editar</a>
                      <button class="btn btn-eliminar btn-sm" data-bs-toggle="modal" data-bs-target="#confirmarEliminarModal">Eliminar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    <div class="col-md-6 mb-4 producto">
        <div class="card shadow-sm">
        <div class="card-body">
        <div class="d-flex justify-content-between">
            <h5 class="card-title">Lentes de Sol</h5>
            <span class="fw-bold"></span>
</div>
<p class="mb-2">Stock: <strong>12</strong></p>
<div class="progress">
    <div class="progress-bar stock-bajo stock-18" role="progressbar">
        
</div>
</div>
<div class="d-flex justify-content-end my-2">
                      <a href="editarProducto.php?id=2" class="btn btn-editar btn-sm me-2">Editar</a>
                      <button class="btn btn-eliminar btn-sm" data-bs-toggle="modal" data-bs-target="#confirmarEliminarModal">Eliminar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    <div class="col-md-6 mb-4 producto">
        <div class="card shadow-sm">
        <div class="card-body">
        <div class="d-flex justify-content-between">
            <h5 class="card-title">Lentes de Sol</h5>
            <span class="fw-bold"></span>
</div>
<p class="mb-2">Stock: <strong>80</strong></p>
<div class="progress">
    <div class="progress-bar stock-alto stock-80" role="progressbar">
        
</div>
</div>
<div class="d-flex justify-content-end my-2">
                      <a href="editarProducto.php?id=2" class="btn btn-editar btn-sm me-2">Editar</a>
                      <button class="btn btn-eliminar btn-sm" data-bs-toggle="modal" data-bs-target="#confirmarEliminarModal">Eliminar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    <div class="col-md-6 mb-4 producto">
        <div class="card shadow-sm">
        <div class="card-body">
        <div class="d-flex justify-content-between">
            <h5 class="card-title">Lentes de Sol</h5>
            <span class="fw-bold"></span>
</div>
<p class="mb-2">Stock: <strong>50</strong></p>
<div class="progress">
    <div class="progress-bar stock-medio stock-50" role="progressbar">
        
</div>
</div>
<div class="d-flex justify-content-end my-2">
                      <a href="editarProducto.php?id=2" class="btn btn-editar btn-sm me-2">Editar</a>
                      <button class="btn btn-eliminar btn-sm" data-bs-toggle="modal" data-bs-target="#confirmarEliminarModal">Eliminar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4 producto">
        <div class="card shadow-sm">
        <div class="card-body">
        <div class="d-flex justify-content-between">
            <h5 class="card-title">Lentes de Sol</h5>
            <span class="fw-bold"></span>
</div>
<p class="mb-2">Stock: <strong>50</strong></p>
<div class="progress">
    <div class="progress-bar stock-medio stock-50" role="progressbar">
        
</div>
</div>
<div class="d-flex justify-content-end my-2">
                      <a href="editarProducto.php?id=2" class="btn btn-editar btn-sm me-2">Editar</a>
                      <button class="btn btn-eliminar btn-sm" data-bs-toggle="modal" data-bs-target="#confirmarEliminarModal">Eliminar</button>
                </div>
            </div>
        </div>
    </section>

    <?php MostrarFooter(); ?>
    <?php IncluirScripts(); ?>

    <!-- Modal confirmación eliminar -->
<div class="modal fade" id="confirmarEliminarModal" tabindex="-1" aria-labelledby="confirmarEliminarLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="confirmarEliminarLabel">Confirmar eliminación</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">
        ¿Estás seguro que quieres eliminar este producto?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-danger">Sí, eliminar</button>
      </div>
    </div>
  </div>
</div>
</body>

</html>