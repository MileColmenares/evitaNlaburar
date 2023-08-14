
<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="shortcut icon" href="./img/logoipet-favicon.jpg">

	<link rel="stylesheet" href="./css/es.css">
    <link rel="stylesheet" href="css/login.css">
</head>

<div class="login">
        <h1>Iniciar sesiòn</h1>

        <form action="validar.php" method="POST">
            <label for="usuario">
                <i class="fas fa-user"></i>
            </label>
            <input type="text" name="usuario"
            placeholder="Usuario" id="usuario" required>
            <label for="password">
                <i class="fas fa-lock"></i>
            </label>
            <input type="password" name="password"
            placeholder="Contraseña" id="password" required>
            <input type="submit" value="Acceder">
        </form>
    </div>
    

