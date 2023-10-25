<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilosactualizar.css">
    <title>Panel de Administrador - Tienda de Mascotas</title>
</head>
<body>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conecta a la base de datos y obtén los datos del formulario
    $conexion = mysqli_connect("localhost", "root", "", "Emprendimiento") or die("No se puede conectar");
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $precio = floatval($_POST["precio"]);

    // Actualiza la información del producto en la base de datos
    $sql = "UPDATE productos SET nombre = '$nombre', precio = $precio WHERE id = $id";
    if ($conexion->query($sql) === TRUE) {
        echo "Producto actualizado con éxito. <a href='pagadmin.php'>Volver al panel de administrador</a>";
    } else {
        echo "Error al actualizar el producto: " . $conexion->error;
    }

    // Cierra la conexión a la base de datos
    $conexion->close();
}
?>