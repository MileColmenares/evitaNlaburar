<?php

$autor= $_POST ['autor'];
$nacionalidad= $_POST ['nacionalidad'];

include ("conexion.php");

$insertar = "INSERT INTO t_autores VALUES (NULL, '$autor', '$nacionalidad' )";
echo $insertar;
mysqli_query($conexion, $insertar)or exit ("no guarda");
echo "consulta enviada";
header ("index.php");

?>