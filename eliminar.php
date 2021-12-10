<?php include("conexion.php");
 if(isset($_GET['id'])){
     $id = $_GET['id'];

     //$query  = "DELETE  FROM tareas WHERE id = '$id'";
     $query = "UPDATE tareas set estado = 1 WHERE id= '$id'"; 
     
     $rs = mysqli_query($conn, $query);
     if(!$rs){
         die(" Error al eliminar");
     }
     $_SESSION['alert']=" La tarea se eliminó correctamente";
     $_SESSION['alert-color']= "danger";

     header("Location: index.php");
 }

?>