<!DOCTYPE html>
<html>
<head>
    <title>Carrito de Compras</title>
    <link rel="stylesheet" type="text/css" href="ver_carrito.css">

</head>
<body>
    <h1>Carrito de Compras</h1>
    <table>
        <tr>
            <th>Producto</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Subtotal</th>
            <th>Eliminar</th>
        </tr>
        <?php
        session_start();
        
        
        if (!empty($_SESSION['carrito'])) {
            foreach ($_SESSION['carrito'] as $product_id => $quantity) {
            // Consulta la base de datos para obtener detalles del producto (usando $product_id)
               
            
                $product_name = "Nombre del Producto";
                $product_price = 10.00; // Precio del producto
                $subtotal = $product_price * $quantity;
                echo "<tr>";
                echo "<td>$product_name</td>";
                echo "<td>$product_price</td>";
                echo "<td>$quantity</td>";
                echo "<td>$subtotal</td>";
                echo "<td><a href='eliminar_del_carrito.php?id=$product_id'>Eliminar</a></td>";
                echo "</tr>";
            }
        }
        ?>
    </table>
    <a href="index.php">Volver a la Lista de Productos</a>

    <h2>Datos del Cliente</h2>
    <form action="procesar_pedido.php?id=$product_id" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <br>
        <label for="direccion">Dirección:</label>
        <input type="text" name="direccion" required>
        <br>
        <input type="submit" value="Finalizar Compra">
    </form>
</body>
</html>