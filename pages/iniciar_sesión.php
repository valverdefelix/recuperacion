
<!DOCTYPE html>
<html lang:"en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Style&Beauty</title>
    <link rel="stylesheet" href="../src/css/estilo_iniciarsesion.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Marcellus&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8d1f4097ba.js" crossorigin="anonymous"></script>
</head>
<body>
    <!--Encabezado de la pagina-->
    <header class="encabezado">
        <img src="imagenes/logo.png" alt="">
        <a href="index.html"><h1>Style&Beauty</h1></a>
    </header>
    <!--Formulario-->
    <div class="login">
        <form action="vista_clientes.php" method="post">
            <div class="input"> 
                <h2>Iniciar Sesión </h2>
                <input type="email" name="email" placeholder="Correo electronico" required><br>
                <input type="password" name="password" placeholder="Contraseña" required>
            </div> 
            <div class="boton">
                <button type="submit" id="boton"> Enviar </button>
            </div> 
        </form>
    </div>
</body>
</html>
