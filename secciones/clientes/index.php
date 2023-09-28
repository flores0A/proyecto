<?php 
include("../../bd.php");

if (isset($_GET['txtID'])) {
    $txtID=(isset($_GET['txtID']))? $_GET['txtID']:"";
    $sentencia=$conexion->prepare("DELETE FROM clientes WHERE IDCliente=:IDCliente");
    $sentencia->bindParam(":IDCliente",$txtID);
$sentencia->execute();
header("Location:index.php");
}

$sentencia=$conexion->prepare("SELECT * FROM `clientes`");
$sentencia->execute();
$lista_clientes=$sentencia->fetchAll(PDO::FETCH_ASSOC);


?>

<?php include("../../templates/header.php");?>
<br />
<h2> Clientes</h2>
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
                        <th scope="col">NOMBRE</th>
                        <th scope="col">DIRECCION</th>
                        <th scope="col">TELEFONO</th>
                        <th scope="col"> CORREO</th>
                        <th scope="col"> Historial</th>
                        <th scope="col"> ACCIONES</th>


                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($lista_clientes as $registro) {  ?>
                    <tr class="">
                        <td scope="row"><?php echo $registro['IDCliente'];?></td>
                        <td><?php echo $registro['Nombre'];?></td>
                        <td><?php echo $registro['Direccion'];?></td>
                        <td><?php echo $registro['Telefono'];?></td>
                        <td><?php echo $registro['Correo'];?></td>
                        <td><?php echo $registro['Historial'];?></td>
                        <td>
                            <a class="btn btn-info" href="editar.php?txtID=<?php echo $registro['IDCliente'];?>"
                                role="button">Editar</a>

                            <a class="btn btn-danger" href="index.php?txtID=<?php echo $registro['IDCliente'];?>"
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