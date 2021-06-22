<?php
include_once "global/funciones.php";
$productos = obtenerProductoAmerica();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/styles2.css">
        <link rel="shortcut icon" href="img/JALL_LOGO.png" type="image/png" />

        
        <title>JALLSPORTS</title>
    </head>

    <body>
        <header class="header">
            <a href="index.html">
                <img class="header__Logo" src="img/JALL_LOGO.png" alt="LOGOTIPO">
            </a>
        </header>

        <nav class="Navegacion">
            <a class="Navegacion__enlace Navegacion__enlace--activo" href="tienda.html">Tienda</a>
            <a class="Navegacion__enlace " href="nosotros.html">Nosotros</a>
        </nav>


        <main class="contenedor">
            <h1>Jersey Warrios</h1>

            <div class="camisa">
                <img class="Jersey__Imagen" src="img/jerseyWarrios.png" alt="Jersey America">
                <div class="camisa__contenido">
                    <p class="TextoNosotros">
                        Lorem ipsum dolor sit amet. Aut omnis autem et labore
                        numquam est provident maxime et amet quis. Cum libero 
                        pariatur sed optio nostrum in quae itaque id adipisci 
                        obcaecati.
                    </p>

                    <form class="formulario__Jersey">
                        <select class="formulario__campo">
                            <option disabled selected>--Seleccionar Talla--</option>
                            <option>Chica</option>
                            <option>Mediana</option>
                            <option>Grande</option>
                        </select>

                        <input class="formulario__campo" type="number" placeholder="Cantidad" min="1">
                        <input class="formulario__submit" type="submit" value="Agregar al carrito">

                    </form>
                </div>
                
            </div>

        </main>

        <footer class="footer">
            <p class="footer__texto">
                JALLSPORTS Store - Todos los derechos reservados 2021
            </p>
        </footer>

    </body>
</html>