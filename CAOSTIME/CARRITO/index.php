<!DOCTYPE html>
<html>
<head>
    <title>Carrito de Compras</title>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
    <h1>Lista de Productos</h1>
    <table>
        <tr>
            <th>Producto</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Agregar al Carrito</th>
        </tr>

    <form action="ver_carrito.php" method="get">
        <input type="submit" value="Ver Carrito">
    </form>
        <tr>
            <td>Producto 1</td>
            <td>$10.00</td>
            <td><input type="number" name="quantity" value="1"></td>
            <td><a href="agregar_carrito.php?id=1">Agregar</a></td>
        </tr>
        <tr>
            <td>Producto 2</td>
            <td>$15.00</td>
            <td><input type="number" name="quantity" value="1"></td>
            <td><a href="agregar_carrito.php?id=2">Agregar</a></td>
        </tr>
        

        <tr>
            <td>Producto 3</td>
            <td>$20.00</td>
            <td><input type="number" name="quantity" value="1"></td>
            <td><a href="agregar_carrito.php?id=3">Agregar</a></td>
        </tr>
        <tr>
            <td>Producto 4</td>
            <td>$25.00</td>
            <td><input type="number" name="quantity" value="1"></td>
            <td><a href="agregar_carrito.php?id=4">Agregar</a></td>
        </tr>


    </table>



<!--OTRO PROGRAMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA-->


    <?php
   
    include("conexion.php");
        // Realiza una consulta para obtener las imágenes
        $sql = "SELECT id_productos, nombre, precio, descripcion, stock FROM productoc";
        $result = $conexion->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $id_productos = $row["id_productos"];
                $nombre = $row["nombre"];
                $precio = $row["precio"];
                $descripcion = $row["descripcion"];
                $stock = $row["stock"];
               // $imagen = $row["imagen"];
        ?>
        <div class="producto">
            <div class="producto-contenedor">
                <img src="<?php echo $imagen; ?>" alt="<?php echo $descripcion; ?>">
                <div class="descripcion-precio">
                    <h2><?php echo $descripcion; ?></h2>
                    <p>3 CUOTAS SIN INTERES.</p>
                    <p>Precio: $<?php echo $precio; ?></p>
                    <a href="agregar_carrito.php?id=$id_productos">Agregar</a></td>
                </div>
            </div>
        </div>
        <?php
            }
        } else {
            echo "No se encontraron imágenes en la base de datos.";
        }

        // Cierra la conexión a la base de datos
        $conexion->close();
        ?>
    </main>
    <footer class="footer-container">
        <p>
            <a href="index.php" class="volver-btn">Volver a la Página Principal</a>
        </p>
    </footer>
</body>
</html>
