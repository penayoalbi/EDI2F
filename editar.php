<?php 
include("conexion.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * FROM tareas WHERE id=$id"; 
        $rs = mysqli_query($conn, $query);

        if(mysqli_num_rows($rs) == 1){
            // echo 'editando...';
            $columna = mysqli_fetch_array($rs);
            $titulo = $columna['titulo'];
            $descripcion = $columna['descripcion'];
        }
    }

    if(isset($_POST['editar'])){
        $id = $_GET['id'];
        $titulo = $_POST['titulo'];
        $descripcion = $_POST['descripcion'];

        $query = "UPDATE tareas SET titulo = '$titulo', descripcion='$descripcion' WHERE id=$id";
        mysqli_query($conn, $query);

        $_SESSION['alert']="Tarea editada con éxito! ";
        $_SESSION['alert-color']= "warning";

        header("Location: index.php");
    }
?>

<?php include("include/header.php")?>
<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="editar.php?id='<?php echo $columna['id']?>'" method="POST" onsubmit="return validar()">
                    <div class="form-group">
                        <input type="text" class ="form-control" name="titulo"  id="titulo" pattern="^[A-Za-z]+$" value ="<?php echo $titulo; ?>" placeholder="editar titulo">
                    </div>
                    <div class="from-group">
                        <textarea name="descripcion" rows="2" pattern="^[A-Za-z]+$" id="descripcion" class="form-control" 
                        placeholder="Editar descripcion"><?php echo $descripcion;?></textarea>
                    </div>
                    <div id ="rs" > </div>
                    <Button class ="btn btn-success btn-block" name="editar">Editar</Button>
                </form>
          </div>
        </div> 
    </div>
</div>
<?php include("include/footer.php");?>
