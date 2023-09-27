<?php include("../../templates/header.php");?>
<br />
<h2> Ventas</h2>
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
                        <th scope="col">CLIENTE</th>
                        <th scope="col">FECHA</th>
                        <th scope="col">TOTAL</th>
                        <th scope="col"> ACCIONES</th>

                    </tr>
                </thead>
                <tbody>
                <?php foreach ($lista_venta as $registro) {  ?>
                    <tr class="">
                        <td scope="row">1</td>
                        <td>ROUT</td>
                        <td>BENI/LIBERT</td>
                        <td>R1C2</td>
                        <td><a name="" id="" class="btn btn-info" href="#" role="button">EDITAR</a>
                        <a name="" id="" class="btn btn-danger" href="crear.php" role="button">ELIMINAR</a></td>
                        
                        
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
       
    </div>
    <div class="card-footer text-muted">
        Footer
    </div>
</div>
<br/>
<?php include("../../templates/footer.php");?>