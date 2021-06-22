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
            <a class="Navegacion__enlace Navegacion__enlace--activo" href="index.html">Tienda</a>
            <a class="Navegacion__enlace " href="nosotros.html">Nosotros</a>
            <a class="navegacionenlace" href="ver_carrito.php"><img class="bloqueimagen--carrito" src="img/Carrito.png" alt="carrito"></a>
        </nav>


        <main class="contenedor">
     
        <?php foreach ($productos as $producto) ?>

        <h1><?php echo $producto->nombre?></h1>

            <div class="camisa">
                <img class="Jersey__Imagen" src="img/JerseyAmerica.png" alt="Jersey America">
                <div class="camisa__contenido">
                    <h1 class="TextoNosotros">
                    <?php echo $producto->descripcion ?>
                    </h1>

                    <h1 class="TextoNosotros">
                    $<?php echo number_format($producto->precio, 2) ?>
                    </h1>

                    <form class="formulario__Jersey">
                        <select class="formulario__campo">
                            <option disabled selected>--Seleccionar Talla--</option>
                            <option>Chica</option>
                            <option>Mediana</option>
                            <option>Grande</option>
                        </select>

                        <input class="formulario__campo" type="number" placeholder="Cantidad" min="1">

                    </form >

                    <?php if (productoYaEstaEnCarrito($producto->id)) { ?>
                        <form action="eliminar_del_carrito.php" method="post">
                            <input type="hidden" name="id_producto" value="<?php echo $producto->id ?>">
                            <span class="button is-success">
                                <i class="fa fa-check"></i>&nbsp;En el carrito
                            </span>
                            <button class="button is-danger">
                                <i class="fa fa-trash-o"></i>&nbsp;Quitar
                            </button>
                        </form>

                    <?php } else { ?>
                    <form action="agregar_al_carrito.php" method="post">
                    <input type="hidden" name="id_producto" value="<?php echo $producto->id ?>">
                    <button class="formulario__submit">
                    <i class="fa fa-cart-plus"></i>&nbsp;Agregar al carrito
                    </button>
                    </form>
                    <?php } ?>

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