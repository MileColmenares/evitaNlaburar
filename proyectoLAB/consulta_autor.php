<?php

include ("conexion.php");

$sql = "SELECT * FROM `t_autores`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id_autor"]. " - Name: ". $row["nombre"]. " " . $row["nacionalidad"] . "<br>";
    }
} else {
    echo "0 results";
}

echo $consulta;
mysqli_query($conexion, $consulta)or exit ("no guarda");
echo "consulta enviada";
header ("index.php");

?>