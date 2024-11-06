<?php
//conectar a la bbdd
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Login - Gestor de Tecnologias
    </title>    
    <!--Link Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!--Link CSS-->
    <link rel="stylesheet" href="../css/styles.css">

    <!--Link Font family-->
    <link href="https://fonts.googleapis.com/css2?family=Inria+Sans&display=swap" rel="stylesheet">
    
    <!-- Estilos adicionales -->
    <style>
        .redDiv {
            background-color: red; /* Color rojo para la demostración */
            min-height: 100vh; /* Hace que el div ocupe toda la altura de la ventana */
        }

        .textoIzquierda {
            padding: 20px;
            font-size: 18px;
        }
    </style>
</head>
<body class="fondoPrincipal">
    <header class="headerPrincipal">
        <h1 class="tituloHeader">Gestor De Tecnologias</h1>
        <button class="botonVolver">Volver</button>
    </header>
    
    <main class="container-fluid">
        <h1 class="tituloMain">Titulo Tecnologias En CSS</h1>
        
        <!-- Fila de Bootstrap para dividir en dos columnas -->
        <div class="row">
            <!-- Columna izquierda para el texto -->
            <div class="col-md-6 textoIzquierda">
                <p>Este es un párrafo de texto en la mitad izquierda. Aquí puedes poner texto largo para probar que no se superpone al div rojo de la derecha. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                <p>Este es otro párrafo que continúa y ocupa más espacio. Puedes seguir añadiendo texto aquí. Donec aliquet, nunc sit amet aliquet fermentum, justo libero eleifend lorem, ac dictum eros libero sit amet felis. Vivamus dictum lorem eget velit dictum volutpat. Morbi bibendum fermentum risus, nec egestas libero. Suspendisse potenti. Integer posuere leo dui, et condimentum enim volutpat ac. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce iaculis dolor non felis euismod, sed tempus felis fermentum.</p>
            </div>
            
            <!-- Columna derecha para el div rojo -->
            <div class="col-md-6">
                <div class="redDiv">
                    <!-- Este es el div rojo -->
                </div>
            </div>
        </div>
    </main>
    
    <footer class="fondoFooter">
        <p class="textoFooter">¡Contactanos!</p>
        <div class="logoBootstrapFooter">
            <i class="bi bi-instagram icono"></i>
        </div>   
        <hr/>
        <p class="textoFooter">rodrigoterrarea31@gmail.com</p>
    </footer>
</body>
</html>
