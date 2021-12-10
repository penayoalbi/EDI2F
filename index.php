<?php 
    include("conexion.php");
    include("include/header.php");  
?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <?php if(isset($_SESSION['alert'])) { ?>
            <div class="alert alert-<?=$_SESSION['alert-color'];?> alert-dismissible fade show" role="alert">
                <?=$_SESSION['alert'] ?>
                <button type="button" class="btn-close"  data-bs-dismiss="alert"  aria-label="Close"><i class= "fas fa-times"></i> </button>
            </div>
            <?php session_unset(); /*limpio sesion*/ } ?>
            <div class="card card-body">
                <form action="guardar.php" method="POST" onsubmit="return validar()">
                    <div class="form-group">
                        <input type="text" name="titulo" pattern="^[A-Za-z]+$" id="titulo" class="form-control"
                        placeholder="Titulo" autofocus>
                    </div>
                    <div class="form-group">
                        <textarea name="descripcion" id="descripcion" rows="2" pattern="^[A-Za-z]+$" class="form-control" 
                        placeholder="Descripción de tarea"></textarea>
                    </div>
                    <div id ="rs" > </div>
                    <input type="submit" class="btn btn-success btn-block" name="guardar" id="btnValidar" value="Guardar">
                </form>
            </div>      
        </div>
        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <th>Titulo</th>
                    <th>Descripción</th>
                    <th>Fecha de creación</th>
                    <th>Acción</th>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM tareas WHERE estado = 0";
                    $rs = mysqli_query($conn, $query);
                    while($columna = mysqli_fetch_array($rs)){ ?>
                        <tr>
                            <td><?php echo $columna['titulo'] ?></td>  
                            <td><?php echo $columna['descripcion'] ?></td>
                            <td><?php echo $columna['fecha'] ?></td> 
                            <td>
                                <a href="editar.php?id=<?php echo $columna['id']?>" class="btn btn-warning">
                                    <i class="fas fa-marker"></i>
                                </a>
                                <a href="eliminar.php?id= <?php echo $columna['id']?>" class="btn btn-danger">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>                         
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include("include/footer.php"); ?>