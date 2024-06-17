<!DOCTYPE html>
<html lang:"es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Style&Beauty</title>
    <link rel="stylesheet" href="../src/css/estilo_estilista.css">
    <link rel="stylesheet" href="../src/css/estilo_comprarproductos.css">
    <link rel="stylesheet" href="src/css/estilos_index.css">
    <link rel="stylesheet" href="../src/css/estilo_servicios.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Marcellus&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8d1f4097ba.js" crossorigin="anonymous"></script>
</head>

<body>
    <!--Encabezado de la pagina-->
    <header class="encabezado">
        <div class="top">
            <img src="../src/imagenes/logo.png" alt="">
        <h1>Style&Beauty</h1>
        <div class="clearflix"></div>
        </div>
        <nav>
            <a href="index.php"><i class="fa-solid fa-house"></i> Inicio</a>
            <a href="pages/servicios.php"><i class="fa-solid fa-cart-shopping"></i> Servicios</a>
            <a href="pages/estilistas.php"><i class="fa-solid fa-person-dress"></i> Estilistas</a>
            <a href="pages/contacto.php"><i class="fa-solid fa-calendar-days"></i> Contacto </a>
            <a href="pages/iniciar_sesión.php"><i class="fa-solid fa-user"></i> Iniciar sesión</a>
        </nav>
    </header>

<!--banner principal--> 
<div class="banner">
            <img src="imagenes/Banner tienda de indumentaria femenina gris.png" alt="">
        </div>
        <!--galeria-->
        <!--Primera fila--> 
        <div class="fila"> 
             <!--Primer columna--> 
            <div class="columna">
                <div class="galeria">
                    <a href="#">
                    <img src="imagenes/servicio1.png" alt="">
                    </a>
                    <div class="desc">
                        <p> <b>APLICACIÓN DE PESTAÑAS</b></p>
                    </div>
                </div>
            </div>
            <!--Segunda columna-->  
            <div class="columna">
                <div class="galeria">
                    <a href="#">
                    <img src="imagenes/servicio2.png" alt="">
                    </a>
                    <div class="desc">
                        <p> <b>APLICACIÓN DE EXTENCIONES</b></p>
                    </div>
                </div>
            </div>
           <!--Tercer columna--> 
            <div class="columna">
                <div class="galeria">
                    <a href="#">
                    <img src="imagenes/servicio3.png" alt="">
                    </a>
                    <div class="desc">
                        <p> <b>COLORIMETRIA</b> </p>
                    </div>
                </div>
            </div>
            <!--Cuarta columna--> 
            <div class="columna">
                <div class="galeria">
                    <a href="#">
                    <img src="imagenes/servicio4.png" alt="">
                    </a>
                    <div class="desc">
                        <p> <b>DISEÑO DE COLOR</b> </p>
                    </div>
                </div>
            </div>
        </div>
       <!--Segunda fila--> 
        <div class="fila"> 
            <!--Quinta columna--> 
            <div class="columna">
                <div class="galeria">
                    <a href="#">
                    <img src="imagenes/servicio5.png" alt="">
                    </a>
                    <div class="desc">
                        <p> <b>PEINADOS</b></p>
                    </div>
                </div>
            </div>
           <!--Sexta columna--> 
            <div class="columna">
                <div class="galeria">
                    <a href="#">
                    <img src="imagenes/servicio6.png" alt="">
                    </a>
                    <div class="desc">
                        <p> <b>MAQUILLAJES</b>  </p>
                    </div>
                </div>
            </div>
            <!--Septima columna--> 
            <div class="columna">
                <div class="galeria">
                    <a href="#">
                    <img src="imagenes/servicio7.png" alt="">
                    </a>
                    <div class="desc">
                        <p> <b>APLICACIÓN DE UÑAS</b> </p>
                    </div>
                </div>
            </div>
            <!--Octava columna--> 
            <div  class="columna">
                <div class="galeria">
                    <a href="#">
                    <img src="imagenes/servicio8.png" alt="">
                    </a>
                    <div class="desc">
                        <p> <b>PEDICURE</b> </p>
                    </div>
                </div>
            </div>
        </div>


<?php include('templates/pie.php');?>