<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="pagadmin.css">
    <title>Panel de Administrador - Tienda de Mascotas</title>
</head>
<body>
    <h1>Panel de Administrador</h1>
    
    <!-- Formulario para agregar producto -->
    <h2>Agregar Producto</h2>
      <form action="agregar_producto.php" method="post" enctype="multipart/form-data">
        <label for="nombre">Nombre del Producto:</label>
        <input type="text" name="nombre" required>
        <label for="precio">Precio:</label>
        <input type="number" name="precio" step="0.01" required>
        <label for="imagen">Imagen del Producto:</label>
        <input type="file" name="imagen" accept="image/*" required>
        <input type="submit" value="Agregar Producto">
    </form>
    
    
<!-- Lista de productos en una tabla -->
<h2>Lista de Productos</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Imagen</th>
        <th>Acciones</th>
    </tr>
    <?php
    // Conecta a la base de datos (reemplaza con tus credenciales)
    include("conexion.php");

    // Consulta para obtener la lista de productos
    $sql = "SELECT * FROM productos";
    $result = $conexion->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["nombre"] . "</td>";
            echo "<td>" . $row["precio"] . "</td>";
            echo "img/" . $row["imagen"];
            

           echo "<td><img src='img/" . $row["imagen"] . "' width='100'></td>";

            echo "<td>";
            echo "<a href='editar.php?id=" . $row["id"] . "'>Editar</a> | ";
            echo "<a href='eliminar_producto.php?id=" . $row["id"] . "'>Eliminar</a>";
            echo "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='5'>No hay productos disponibles.</td></tr>";
    }

    // Cierra la conexión a la base de datos
    $conexion->close();
    ?>
</table>

</body>
</html>