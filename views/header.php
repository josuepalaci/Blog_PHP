<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- para que sea responsive  -->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0,minimun-sacale=1.0">
    <!-- para las fuentes  -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Oswald&display=swap" rel="stylesheet">
    <!-- los estilos css  -->
    <link rel="stylesheet" href="<?php echo RUTA; ?>/css/style.css">
    <!-- los iconos  -->
    <script src="https://kit.fontawesome.com/1d8a52458d.js" crossorigin="anonymous"></script>
    <title>Algo </title>
</head>
<body>
    <header>
        <div class="contenedor">
            
            <div class="logo izquierda">
                <p><a href="<?php echo RUTA; ?>">Probando cosas talvez sirve </a></p>
            </div>
            <div class="derecha">
                <form name="busqueda" class="buscar" action="<?php echo RUTA; ?>/buscar.php" method="get">
                    <input type="text" name="busqueda" id="" placeholder="Buscar">
                    <button type="submit" class="icono fa fa-search"></button>
                </form>
                
                <nav class="menu">
                    <ul>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i> </a></li>
                        <li><a href="#">Contacto <i class="fa fa-envelope"></i> </a></li>
                    </ul>
                </nav>
            
            </div>
        </div>
    </header>