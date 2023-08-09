<?php

$conexion = mysqli_connect("localhost", "root","","proyecto")or exit ("no se puede conectar");
    if($conexion){
        echo "conexion exitosa";
    }
    else{
        echo"no se pudo conectar";
    }

?>