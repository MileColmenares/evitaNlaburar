<?php
    include("conexion.php");
    $id = $_REQUEST['id'];
    $texto = $_POST['texto'];
    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    

    $query = "UPDATE administrador SET texto='$texto', imagen='$imagen' WHERE id='$id'";
    $resultado= $conexion->query($query);

    if($resultado){
        
        header ("location:mostrar.php");
    }
    else{
        echo "no se inserto";
    }

?>