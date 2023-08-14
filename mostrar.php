<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mostrar imagenes</title>
</head>
<body>
    <center>
        <table border="2">
            <thead>
                <tr>
                    <th colspan="5"><a href="index.php">nuevo</a></th>
                </tr>
                <tr>
                    <th>id</th>
                    <th>texto</th>
                    <th>imagenes</th>
                    <th colspan"2">operaciones</th>
                </tr>
            </thead>
            <tbody>
            <?php
                include("conexion.php");

                $query = "SELECT * FROM administrador";
                $resultado= $conexion->query($query);
                while($row = $resultado->fetch_assoc()){
            ?>  
                <tr>
                    <td><?php echo $row  ['id'];?></td>
                    <td><?php echo $row  ['texto'];?></td>
                    <td><img height="50px" src=data:image/jpg;base64,<?php echo base64_encode($row['imagen']);?> /></td>
                    <th><a href="modificar.php?id=<?php echo $row ['id'];?>">modificar</a></th>
                    <th><a href="eliminar.php?id=<?php echo $row ['id'];?>">eliminar</a></th>
                </tr>
            <?php
                }
            ?>
            </tbody>
            </table>
</body>
</html>