<?php
    $conexion = mysqli_connect("localhost", "root", "", "Emprendimiento") or exit("no se puede conectar");

// Consulta para obtener la lista de productos
$sql = "SELECT * FROM productos";
$result = $conexion->query($sql);

// Cierre de la conexión
$conexion->close();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos - Tienda de Mascotas</title>
</head>
<body>
    <h1>Lista de Productos</h1>
    
    <?php
    if ($result->num_rows > 0) {
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            echo "<li>";
            echo "Nombre: " . $row["nombre"] . "<br>";
            echo "Precio: " . $row["precio"] . "<br>";
            echo "Imagen: <img src='" . $row["imagen"] . "' width='100'><br>"; // Mostrar la imagen
            echo "</li>";
        }
        echo "</ul>";
    } else {
        echo "No hay productos disponibles.";
    }
    ?>
    
    <a href="admin.php">Volver al Panel de Administrador</a>
</body>
</html>
