<DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Producto - Tienda de Mascotas</title>
    <style>
        body {
            background-color: beige;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
        }

        a {
            display: inline-block;
            background-color: #3498db;
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            margin-top: 20px;
        }

        a:hover {
            background-color: #258cd1;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Actualizar Producto</h1><?php
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
        // Conecta a la base de datos y obtén la información del producto con $_GET["id"]
        $conexion = mysqli_connect("localhost", "root", "", "Emprendimiento") or die("No se puede conectar");
        $id = $_GET["id"];
        $sql = "SELECT * FROM productos WHERE id = $id";
        $result = $conexion->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            // Mostrar un formulario con los datos actuales del producto
            echo "<form action='actualizar_producto.php' method='post'>";
            echo "<input type='hidden' name='id' value='" . $row["id"] . "'>";
            echo "<label for='nombre'>Nombre del Producto:</label>";
            echo "<input type='text' name='nombre' value='" . $row["nombre"] . "' required>";
            echo "<label for='precio'>Precio:</label>";
            echo "<input type='number' name='precio' step='0.01' value='" . $row["precio"] . "' required>";
            echo "<input type='submit' value='Actualizar Producto'>";
            echo "</form>";
        } else {
            echo "Producto no encontrado.";
        }

        // Cierra la conexión a la base de datos
        $conexion->close();
    }
    ?>