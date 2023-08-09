<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--CSS-->
   <link rel="stylesheet" href="css/principal.css">
</head>
<body>
    
</body>
</html>

<?php
// Conexión a la base de datos
$imagen = "imagen";
$texto = "texto";


include("conexion.php");

$consulta= mysqli_query($conexion,"SELECT `imagen`, `texto` FROM `pag_principal` ");
while ($lista_consulta= mysqli_fetch_assoc($consulta) ){
    ?>
   <div class="consultas , image-container">
           <img class="imagen" src="<?php echo $lista_consulta["imagen"]; ?>">
           <p><?php echo $lista_consulta["texto"];?></p>
       
   </div>
   <?php
    }
    ?>