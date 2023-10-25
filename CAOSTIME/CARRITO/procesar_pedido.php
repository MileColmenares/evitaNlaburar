<?php
session_start();

// Verificar si el carrito está vacío
if (empty($_SESSION['carrito'])) {
    echo "Tu carrito de compras está vacío.";
} else {
    // Conexión a la base de datos (reemplaza con tus propios datos)
    
    include("conexion.php");
    //$conexion = mysqli_connect("localhost", "root", "", "caostime") or die("No se puede conectar");
    $product_id = $_GET['id'];
    
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $direccion = $_POST['direccion'];
    
    $monto_total = 0;
    
    // Recorre los productos en el carrito y calcula el monto total
    foreach ($_SESSION['carrito'] as $product_id => $quantity) {
        // Consulta la base de datos para obtener el precio del producto (usando $product_id)
        $query = "SELECT precio FROM productoc WHERE id = $product_id";
        $result = mysqli_query($conexion, $query);
        
        if ($result && $row = mysqli_fetch_assoc($result)) {
            $precio_producto = $row['precio'];
            $subtotal = $precio_producto * $quantity;
            $monto_total += $subtotal;
        }
    }
    
    // Insertar el pedido en la base de datos
    $insert_query = "INSERT INTO pedidos (cliente_nombre, email, direccion, monto_total) VALUES ('$nombre', '$email', '$direccion', '$monto_total')";
    
    if (mysqli_query($conexion, $insert_query)) {
        echo "¡Gracias por tu compra, $nombre! Tu pedido ha sido procesado correctamente. El monto total es: $monto_total";
        // Limpia el carrito después de procesar el pedido
        $_SESSION['carrito'] = array();
    } else {
        echo "Hubo un error al procesar tu pedido. Por favor, inténtalo de nuevo.";
    }
    
    // Cierra la conexión a la base de datos
    mysqli_close($conexion);
}
?>