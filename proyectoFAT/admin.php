<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>imagenes</title>
</head>
<body>
    <!--CABECERA-->
    <?php
    include("cabecera.php");
    ?>

    <?php
    include("mostrar_imagen.php")
    ?>



    <center><br/><br/><br/>
        <form action ="guardar.php" method="POST" enctype="multipart/form-data">
            <input type="text" REQUIRED name="nombre"placeholder="nombre"value=""/><br/><br/>
            <input type="file" REQUIRED name="imagen"/><br/><br/>
            <input type="submit"value="aceptar"/>
        </form>
    </center>

    <!--FOOTER-->
    <?php
    include("footer.php");
    ?>
</body>
</html>