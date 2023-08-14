<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>imagenes</title>
</head>
<body>
            <?php
                include("conexion.php");
                $id = $_REQUEST['id'];


                $query = "SELECT * FROM administrador WHERE id='$id'";
                $resultado= $conexion->query($query);
                $row = $resultado->fetch_assoc();
            ?>  
    <center><br/><br/><br/>
        <form action ="proceso_modificar.php?id=<?php echo $row ['id'];?>" method="POST" enctype="multipart/form-data">
            <input type="text" REQUIRED name="nombre"placeholder="nombre"value="<?php echo $row['texto'];?>"/><br/><br/>
            <img height="50px" src=data:image/jpg;base64,<?php echo base64_encode($row['imagen']);?> />
            <input type="file" REQUIRED name="imagen"/><br/><br/>
            <input type="submit"value="aceptar"/>
        </form>
    </center>
</body>
</html>