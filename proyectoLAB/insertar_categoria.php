<?php

$categoria= $_POST ['categoria'];

include ("conexion.php");

$insertar = "INSERT INTO t_categorias VALUES (NULL, '$categoria' )";
echo $insertar;
mysqli_query($conexion, $insertar)or exit ("no guarda");
echo "consulta enviada";
header ("index.php");

?>