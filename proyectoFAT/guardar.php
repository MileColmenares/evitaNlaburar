<?php
    include("conexion.php");
    $texto = $_POST['texto'];
    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    

    $query = "INSERT INTO administrador (texto,imagen) VALUES('$texto','$imagen')";
    $resultado= $conexion->query($query);

    if($resultado){
        header ("location:mostrar.php");
    }
    else{
        echo "no se inserto";
    }

?>