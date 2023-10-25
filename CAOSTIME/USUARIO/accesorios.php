<!DOCTYPE html>
<html>
<head>
    <title>Productos a la Venta</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <header>
        <h1>-ACCESORIOS PARA PERROS</h1>
    </header>
    <main>
    <?php
    // Conecta a la base de datos (reemplaza con tus credenciales)
    include("conexion.php");

    // Consulta para obtener la lista de productos
    $sql = "SELECT * FROM productos";
    $result = $conexion->query($sql);

    

    // Cierra la conexión a la base de datos
    $conexion->close();
    ?>
        <div class="producto">
            <div class="producto-contenedor">
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<td><img src='img/" . $row["imagen"] . "' width='100'></td>";
                }
                } else {
                   echo "<tr><td colspan='5'>No hay productos disponibles.</td></tr>";
                }
               
                ?>
                
                <div class="descripcion-precio">
                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo $row["nombre"];
                            echo $row["precio"] ;
                    }
                    } else {
                       echo "<tr><td colspan='5'>No hay productos disponibles.</td></tr>";
                    }
                    ?>
                    <button>Agregar al carrito</button>
                </div>
            </div>
        </div>
        
          <!-- Producto 2 -->
          <div class="producto">
            <div class="producto-contenedor">
                <img src="img/corbata.jpg" alt="Producto 2">
                <div class="descripcion-precio">
                    <h2>CORBATA</h2>
                    <p>3 CUOTAS SIN INTERES.</p>
                    <p>Precio: $1000</p>
                    <button>Agregar al carrito</button>
                </div>
            </div>
        </div>
        
        
        
       
</html>