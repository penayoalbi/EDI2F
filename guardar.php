<?php
include('conexion.php');

if(isset($_POST['guardar'])
 && !empty($_POST['titulo']) && !empty($_POST['descripcion'])){
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];

    $query = "INSERT INTO tareas(titulo, descripcion) VALUES ('$titulo','$descripcion')";
    $resultado = mysqli_query($conn, $query);
    
    if(!$resultado){
        die('error al guardar');
    }

    $_SESSION['alert']= "Tarea guardada con éxito!.";
    $_SESSION[ 'alert-color']= "success";
    header("Location: index.php");
}else{
    /*die('campos vacios'); no lo utilizo*/
    $_SESSION['alert']= "Los campos son obligatorio.";
    $_SESSION[ 'alert-color']= "danger";
    header("Location: index.php");
}

?>