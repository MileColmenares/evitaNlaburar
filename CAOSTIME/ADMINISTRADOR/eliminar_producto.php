<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    // Conecta a la base de datos y obtén el ID del producto a eliminar
    $conexion = mysqli_connect("localhost", "root", "", "Emprendimiento") or die("No se puede conectar");
    $id = $_GET["id"];

    // Elimina el producto de la base de datos
    $sql = "DELETE FROM productos WHERE id = $id";
    if ($conexion->query($sql) === TRUE) {
        echo "Producto eliminado con éxito. <a href='panel_admin.php'>Volver al panel de administrador</a>";
    } else {
        echo "Error al eliminar el producto: " . $conexion->error;
    }

    // Cierra la conexión a la base de datos
    $conexion->close();
}
?>