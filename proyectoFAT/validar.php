<?php

include ("conexion.php");
if(isset($_POST['registrar'])){

    if(strlen($_POST['usuario']) >=1 && strlen($_POST['password'])  >=1 ){

    $nombre = trim($_POST['usuario']);
    $password = trim($_POST['password']);

    $consulta= "INSERT INTO usuarios (usuario, password)
    VALUES ('$nombre','$password' )";

    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);

    header('Location: admin.php');
  }
}







?>