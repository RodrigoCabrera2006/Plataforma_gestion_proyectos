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
    <!--Agregar favicon -->

    <!--Link Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!--Link CSS-->
    <link rel="stylesheet" href="../css/styles.css">

    <!--Link Font family-->
    <link href="https://fonts.googleapis.com/css2?family=Inria+Sans&display=swap" rel="stylesheet">
</head>
<body class="fondoPrincipal">
    <header class="headerPrincipal">
    <!-- Ícono del menú (hamburguesa) -->

    <i id="menuIcon" class="bi bi-list logoHeader"></i>

    <!-- Menú lateral -->
    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <button class="botonMenu">Tecnologia X</button>
        <button class="botonMenu">Tecnologia X</button>
        <button class="botonMenu">Tecnologia X</button>
        <button class="botonMenu">Tecnologia X</button>
        <i class="bi bi-plus-square-fill logoMenuAgregar"></i>
    </div>



        <h1 class="tituloHeader">Gestor De Tecnologias</h1>
    </haeder>
    
    
    <main>
        <div class="container-fluid">    
            <h1 class="tituloMain">Tecnologias En CSS</h1>
            
            <!--Comienzo del ROW-->
            <div class="row">
                <!--Comienzo de Tarjeta-->
                <div class="col-md-3">
                    <div class="tarjetaProyecto">
                        <h2 class="tituloTarjeta">Tecnologia 1</h2>
                        <br>
                        <p>Descripcion: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse quisquam aperiam hic necessitatibus! Rem, nobis fugit ex ea eos quidem vero mollitia, vel blanditiis impedit reprehenderit, voluptatum voluptatem maiores repudiandae.</p>
                    </div>
                </div>
                <!--Fin de Tarjeta-->

                <!--Comienzo de Tarjeta-->
                <div class="col-md-3">
                    <div class="tarjetaProyecto">
                        <h2 class="tituloTarjeta">Tecnologia 1</h2>
                        <br>
                        <p>Descripcion: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse quisquam aperiam hic necessitatibus! Rem, nobis fugit ex ea eos quidem vero mollitia, vel blanditiis impedit reprehenderit, voluptatum voluptatem maiores repudiandae.</p>
                    </div>
                </div>
                <!--Fin de Tarjeta-->

                <!--Comienzo de Tarjeta-->
                <div class="col-md-3">
                    <div class="tarjetaProyecto">
                        <h2 class="tituloTarjeta">Tecnologia 1</h2>
                        <br>
                        <p>Descripcion: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse quisquam aperiam hic necessitatibus! Rem, nobis fugit ex ea eos quidem vero mollitia, vel blanditiis impedit reprehenderit, voluptatum voluptatem maiores repudiandae.</p>
                    </div>
                </div>
                <!--Fin de Tarjeta-->

                <!--Comienzo de Tarjeta-->
                <div class="col-md-3">
                    <div class="tarjetaProyecto">
                        <h2 class="tituloTarjeta">Tecnologia 1</h2>
                        <br>
                        <p>Descripcion: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse quisquam aperiam hic necessitatibus! Rem, nobis fugit ex ea eos quidem vero mollitia, vel blanditiis impedit reprehenderit, voluptatum voluptatem maiores repudiandae.</p>
                    </div>
                </div>
                <!--Fin de Tarjeta-->
            </div>
            <!--Fin del ROW-->



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
    <script src="../scriptJS/funcionMenu.js"></script>
</body>
</html>