<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $precio = $_POST["precio"];
    
    // Validación básica de los datos (puedes mejorar esto)
    if (empty($nombre) || empty($precio)) {
        echo "Por favor, ingresa un nombre y un precio válidos.";
    } else {
        // Procesamiento de la imagen (guarda la imagen en una carpeta)
        if ($_FILES["imagen"]["error"] == 0) {
            $nombre_imagen = $_FILES["imagen"]["name"];
            $ruta_imagen = "img/" . $nombre_imagen;
            move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta_imagen);
        } else {
            $ruta_imagen = ""; // Si no se proporciona una imagen
        }

    ;

        include("conexion.php");
        
        $nombre = $conexion->real_escape_string($nombre);
        $precio = floatval($precio);

        // Inserta el nuevo producto en la base de datos
        $sql = "INSERT INTO productos (nombre, precio, imagen) VALUES ('$nombre', $precio, '$ruta_imagen')";
        if ($conexion->query($sql) === TRUE) {
            echo "Producto agregado con éxito.";
        } else {
            echo "Error al agregar el producto: " . $conexion->error;
        }

        // Cierra la conexión a la base de datos
        $conexion->close();
    }
}
?>