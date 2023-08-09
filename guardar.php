<?php
include("conexion.php");
$nombre = $_POST['nombre'];
$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

$query="INSERT INTO proyecto(texto,imagen)VALUES("$nombre","$imagen")";

?>