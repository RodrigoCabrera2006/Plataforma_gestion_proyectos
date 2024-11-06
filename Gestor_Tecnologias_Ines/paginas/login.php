<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Login - Gestor de Tecnologias
    </title>
    <!--Link CSS-->
    <link rel="stylesheet" href="../css/styles.css">
    
    <!--Link Font family-->
    <link href="https://fonts.googleapis.com/css2?family=Inria+Sans&display=swap" rel="stylesheet">
    
    <!--Agregar favicon -->
    
</head>
<body class="fondoLogin">
<center>
    <form class="form" action="paginaPrincipal.php">
        <div class="formInterior">
        <h1 class="tituloLogin">Iniciar Sesion</h1>

        <br>
        
        <input type="password" class="inputLogin" name="ingresarContrasenia" id="ingresarContrasenia" placeholder="Ingrese su Contraseña">
        <br>
        <input type="password" class="inputLogin" name="confirmarContrasenia" id="confirmarContrasenia" placeholder="Confirme su Contraseña">
        <br>
        <button class="botonIngresar">Ingresar</button>
        <br>
        <button class="botonOlvideContra">Olvide Mi Contraseña</button>    
        </div>
    </form>
</center>
</body>
</html>