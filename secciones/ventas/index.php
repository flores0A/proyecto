
<?php 
include("../../bd.php");

if (isset($_GET['txtID'])) {
    $txtID=(isset($_GET['txtID']))? $_GET['txtID']:"";
    $sentencia=$conexion->prepare("DELETE FROM ventas WHERE ID_Venta=:ID_Venta");
    $sentencia->bindParam(":ID_Venta",$txtID);
$sentencia->execute();
header("Location:index.php");
}

$sentencia=$conexion->prepare("SELECT * FROM `ventas`");
$sentencia->execute();
$lista_ventas=$sentencia->fetchAll(PDO::FETCH_ASSOC);


?>

<?php include("../../templates/header.php");?>
<br />
<h2> Ventas</h2>
<div class="card">
    <div class="card-header">
   
    <a name="" id="" class="btn btn-primary" href="crear.php" role="button">agregar registro</a>
    </div>
    <div class="card-body">
        <div class="table-responsive-sm">
            <table class="table" id="tabla_id">
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
                <?php foreach ($lista_ventas as $registro) {  ?>
                    <tr class="">
                        <td scope="row"><?php echo $registro['ID_Venta'];?></td>
                        <td><?php echo $registro['Fecha_Hora_Venta'];?></td>
                        <td><?php echo $registro['Cliente_ID'];?></td>
                        <td><?php echo $registro['Total_Venta'];?></td>
                        <td>
                            <a class="btn btn-info" href="editar.php?txtID=<?php echo $registro['ID_Venta'];?>"
                                role="button">Editar</a>

                            <a class="btn btn-danger" href="index.php?txtID=<?php echo $registro['ID_Venta'];?>"
                                role="button">Eliminar</a>
                        </td>
                        
                        
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