<?php
    include("conexion.php");
    $id = $_REQUEST['id'];
    
    

    $query = "DELETE FROM administrador WHERE id='$id'";
    $resultado= $conexion->query($query);

    if($resultado){
        
        header ("location:mostrar.php");
    }
    else{
        echo "no se inserto";
    }

?>