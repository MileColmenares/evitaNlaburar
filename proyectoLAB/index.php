<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
  <!--CSS-->
  <link rel="stylesheet" href="css/index.css">
</head>
 
<body>
 
    
	<header>

	<nav>
		<?php include("cabecera.php"); ?>
        
	</nav>

	</header>
    </div>

    <div class= container1>
    <section>
    <h2>Ingrese un autor</h2>
    <h5>(del libro que vaya a ingresar)</h5>

        <form action= "insertar_autor.php" method="POST">

        <div>
            <label>Autor</label>
            <input type="int" name= "autor" placeholder="Autor" required>
        </div>
        <div>
            <label>Nacionalidad</label>
            <input type="int" name= "nacionalidad" placeholder="Nacionalidad" required>
        </div>

        <div>
            <button type="submit"  data-bs-toggle="modal" data-bs-target="#staticBackdrop" name= btn1>Enviar</button>
        </div>

        </form>
    </section>
	</div>

    <div class= container2>
    <section>
    <h2>Ingrese una categoria</h2>
    <h5>(del libro que vaya a ingresar)</h5>

        <form action= "insertar_categoria.php" method="POST">

        <div>
            <label>Categoria</label>
            <input type="int" name= "categoria" placeholder="Categoria" required>
        </div>
       
        <div>
            <button type="submit"  data-bs-toggle="modal" data-bs-target="#staticBackdrop" name= btn1>Enviar</button>
        </div>

        </form>
    </section>
	</div>

    <div class= container>

	<section>
    <h2>Datos del libro a ingresar</h2>
	<form action = "insertar_datos.php" method="POST">
        <div>
            <label>Titulo</label>
            <input type="text" maxlength="30" name= "titulo" placeholder="Titulo" required>
        </div>
          
        <div>
            
            <label>Autor</label>    
            <select name="autores">
            <option value="">Seleccione un autor</option>
            <?php 
            $conn = mysqli_connect("localhost", "root","","bd_biblioteca")or exit ("no se puede conectar");

            $query ="SELECT `id_autor`, `nombre` FROM `t_autores`";
            $result = $conn->query($query);
            if($result->num_rows> 0){
                while($optionData=$result->fetch_assoc()){
                $option =$optionData['nombre'];
            ?>
            <?php
            //selected option
            if(!empty($courseName) && $courseName== $option){
            // selected option
            ?>
            <option value="<?php echo $option; ?>" selected><?php echo $option; ?> </option>
            <?php 
            continue;
          }?>
            <option value="<?php echo $option; ?>" ><?php echo $option; ?> </option>
        <?php
         }}
            ?>
</select>        
            <!--<input type="text" maxlength="30"  name= "autor" placeholder="Autor" required>-->
        </div>

        <div>
            <label>Categorìa</label>
            <select name="categoria">
            <option value="">Seleccione una categoria</option>
            <?php 

            $query ="SELECT `id_categoria`, `nombreC` FROM `t_categorias`";
            $result = $conn->query($query);
            if($result->num_rows> 0){
                while($optionData=$result->fetch_assoc()){
                $option =$optionData['nombreC'];
            ?>
            <?php
            //selected option
            if(!empty($courseName) && $courseName== $option){
            // selected option
            ?>
            <option value="<?php echo $option; ?>" selected><?php echo $option; ?> </option>
            <?php 
            continue;
          }?>
            <option value="<?php echo $option; ?>" ><?php echo $option; ?> </option>
        <?php
         }}
            ?>
</select> 
        </div>

        <div>
            <label>Año publicaciòn</label>
            <input type="int" name= "anio_publicacion" placeholder="Año publicaciòn" required>
        </div>

        <div>
            <button type="submit"  data-bs-toggle="modal" data-bs-target="#staticBackdrop" name= btn1>Enviar</button>
        
        </div>
    </form>
   
	</section>
    </div>
    

	<aside>
    
  </aside>


</body>
</html>