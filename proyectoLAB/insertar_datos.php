<?php

$titulo= $_POST ['titulo'];
$autor= $_POST ['autor'];
$categoria= $_POST ['categoria'];
$anio_publicacion= $_POST ['anio_publicacion'];

include ("conexion.php");

$insertar = "INSERT INTO t_libros VALUES (NULL, '$titulo', '$autor', $categoria, $anio_publicacion)";
echo $insertar;
mysqli_query($conexion, $insertar)or exit ("no guarda");
echo "consulta enviada";
header ("index.php");

?>


