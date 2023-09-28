<?php 
include("../../bd.php");

if (isset($_GET['txtID'])) {
    $txtID=(isset($_GET['txtID']))? $_GET['txtID']:"";
    $sentencia=$conexion->prepare("DELETE FROM usuario WHERE id=:id");
    $sentencia->bindParam(":id",$txtID);
$sentencia->execute();
header("Location:index.php");
}


$sentencia=$conexion->prepare("SELECT * FROM `usuario`");
$sentencia->execute();
$lista_usuario=$sentencia->fetchAll(PDO::FETCH_ASSOC);


?>


<?php include("../../templates/header.php");?>
<br />
<div class="card">
    <div class="card-header">
        <a name="" id="" class="btn btn-primary" href="crear.php" role="button">Agregar Usuario</a>

    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table" id="tabla_id">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Usuario</th>
                        <th scope="col">Password</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Accion</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($lista_usuario as $registro) {
            
        ?>
                    <tr class="">
                        <td scope="row"><?php echo $registro['id'];?></td>
                        <td><?php echo $registro['usuario'];?></td>
                        <td>admin</td>
                        <td><?php echo $registro['correo'];?></td>
                        <td>
                            <a class="btn btn-info" href="editar.php?txtID=<?php echo $registro['id'];?>"
                                role="button">Editar</a>

                            <a class="btn btn-danger" href="index.php?txtID=<?php echo $registro['id'];?>"
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