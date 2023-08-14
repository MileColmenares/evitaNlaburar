<?php

$usuario_session = $_POST['usuario'];
$password_session= $_POST['password'];




if($usuario_session=='admin' && $password_session=='espe363'){
  $_SESSION['administrador'] = $usuario_session;
  header("Location: admin.php#session");
} else {
  echo "incorrecto";
}  




?>