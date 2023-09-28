<?php 
include("../../bd.php");

if (isset($_GET['txtID'])) {
    $txtID=(isset($_GET['txtID']))? $_GET['txtID']:"";
    $sentencia=$conexion->prepare("DELETE FROM product WHERE ID_Producto=:ID_Producto");
    $sentencia->bindParam(":ID_Producto",$txtID);
$sentencia->execute();
header("Location:index.php");
}

$sentencia=$conexion->prepare("SELECT * FROM `product`");
$sentencia->execute();
$lista_product=$sentencia->fetchAll(PDO::FETCH_ASSOC);

$sentencia = $conexion->prepare("SELECT *, (SELECT cargo FROM cargo WHERE cargo.id = empleados.idPuesto LIMIT 1) AS cargo FROM empleados");
$sentencia->execute();
$lista_empleados=$sentencia->fetchAll(PDO::FETCH_ASSOC);


?>
<?php include("../../templates/header.php");?>
<br />
<h2 class="text-center"> Producto</h2>
<div class="card">
    <div class="card-header">

        <a name="" id="" class="btn btn-primary" href="crear.php" role="button">Agregar Producto</a>
    </div>
    <div class="card-body">
        <div class="table-responsive-sm">
            <table class="table" id="tabla_id">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">DESCRIPCION</th>
                        <th scope="col">STOCK</th>
                        <th scope="col"> PRECIO_POR_UNIDAD</th>
                        <th scope="col"> FECHA_DE_CADUCIDAD</th>

                        <th scope="col"> ACCIONES</th>


                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($lista_product as $registro) {  ?>
                    <tr class="">
                        <td scope="row"><?php echo $registro['ID_Producto'];?></td>
                        <td><?php echo $registro['nombre'];?></td>
                        <td><?php echo $registro['descripcion'];?></td>
                        <td><?php echo $registro['cantidad_stock'];?></td>
                        <td><?php echo $registro['precio_unidad'];?></td>
                        <td><?php echo $registro['fecha_caducidad'];?></td>
                        <td><?php echo $registro['Proveedor_ID'];?></td>

                        <td>
                            <a class="btn btn-info" href="editar.php?txtID=<?php echo $registro['ID_Producto'];?>"
                                role="button">Editar</a>

                            <a class="btn btn-danger" href="index.php?txtID=<?php echo $registro['ID_Producto'];?>"
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
<br />
<?php include("../../templates/footer.php");?>