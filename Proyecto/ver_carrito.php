<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/styles2.css">

        
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
            <a class="navegacionenlace" href="Index.html"><img class="bloqueimagen--carrito" src="img/Carrito.png" alt="carrito"></a>
        </nav>

<?php
include_once "global/funciones.php";
$productos = obtenerProductosEnCarrito();
if (count($productos) <= 0) {
?>
    <section>
        <div>
            <div>
                <h1>
                    Todavía no hay productos
                </h1>

                <h2>
                    Visita la tienda para agregar productos a tu carrito
                </h2>
                
            </div>
        </div>
    </section>
<?php } else { ?>
    <div class="columns">
        <div class="column">
            <h2>Mi carrito de compras</h2>
            <table class="tabla">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Quitar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $total = 0;
                    foreach ($productos as $producto) {
                        $total += $producto->precio;
                    ?>
                        <tr>
                            <td><?php echo $producto->nombre ?></td>
                            <td><?php echo $producto->descripcion ?></td>
                            <td>$<?php echo number_format($producto->precio, 2) ?></td>
                            <td>
                                <form action="eliminar_del_carrito.php" method="post">
                                    <input type="hidden" name="id_producto" value="<?php echo $producto->id ?>">
                                    <input type="hidden" name="redireccionar_carrito">
                                    <button class="button is-danger">
                                        <i class="fa fa-trash-o"></i>
                                    </button>
                                </form>
                            </td>
                        <?php } ?>
                        </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="2" class="is-size-4 has-text-right"><strong>Total</strong></td>
                        <td colspan="2" class="is-size-4">
                            $<?php echo number_format($total, 2) ?>
                        </td>
                    </tr>
                </tfoot>
            </table>
            <a href="terminar_compra.php" class="button is-success is-large"><i class="fa fa-check"></i>&nbsp;Terminar compra</a>
        </div>
    </div>
<?php } ?>

</html>