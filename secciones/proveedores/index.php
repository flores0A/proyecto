<?php include("../../templates/header.php");?>
<br />
<h2> Proveedores</h2>
<div class="card">
    <div class="card-header">
   
    <a name="" id="" class="btn btn-primary" href="crear.php" role="button">agregar registro</a>
    </div>
    <div class="card-body">
        <div class="table-responsive-sm">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">DIRECCION</th>
                        <th scope="col">TELEFONO</th>
                        <th scope="col"> CORREO</th>
                        <th scope="col"> ACCIONES</th>
                        

                    </tr>
                </thead>
                <tbody>
                <?php foreach ($lista_usuario as $registro) {  ?>
                    <tr class="">
                        <td scope="row">1</td>
                        <td>ROUT</td>
                        <td>BENI/LIBERT</td>
                        <td>R1C2</td>
                        <td>BENI/LIBERT</td>
                        <td><a name="editar" id="editar" class="btn btn-info" href="#" role="button">EDITAR</a>
                        <a name="eliminar" id="eliminar" class="btn btn-danger" href="crear.php" role="button">ELIMINAR</a></td>
                        
                        
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
       
    </div>
    <div class="card-footer text-muted">
       
    </div>
</div>
<br/>
<?php include("../../templates/footer.php");?>