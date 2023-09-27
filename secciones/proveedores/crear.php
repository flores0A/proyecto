<?php include("../../templates/header.php");?>
<br/>
<div class="card">
    <div class="card-header">
        datos de proveedores
    </div>
    <div class="card-body">
        
<form action="" method="post" enctype="multipart/form-data">
<div class="mb-3">
  <label for="nombre" class="form-label">Nombre</label>
  <input type="text"
    class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="nombre">
</div>
<div class="mb-3">
  <label for="apellido" class="form-label">Apellido</label>
  <input type="text"
    class="form-control" name="apellido" id="apellido" aria-describedby="helpId" placeholder="apellido">
</div>
<div class="mb-3">
  <label for="Direccion" class="form-label">Direccion</label>
  <input type="text"
    class="form-control" name="Direccion" id="Direccion" aria-describedby="helpId" placeholder="Direccion">
</div>
<div class="mb-3">
  <label for="Correo Electronico" class="form-label">Correo Electronico</label>
  <input type="date"
    class="form-control" name="Correo Electronico" id="Correo Electronico" aria-describedby="helpId" placeholder="Correo Electronico">
</div>
<div class="mb-3">
  <label for="Telefono" class="form-label">Telefono</label>
  <input type="number"
    class="form-control" name="Telefono" id="Telefono" aria-describedby="helpId" placeholder="Telefono">
</div>
<button type="submit" class="btn btn-success">Agregar</button>
<a name="" id="" class="btn btn-danger" href="index.php" role="button">Cancelar</a>

</form>

    </div>
    <div class="card-footer text-muted">
    </div>
</div>
<br/>
<?php include("../../templates/footer.php");?>