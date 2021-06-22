<?php
include_once "global/funciones.php";
if (!isset($_POST["id_producto"])) {
    exit("No hay id_producto");
}
agregarProductoAlCarrito($_POST["id_producto"]);
header("Location: ver_carrito.php");
?>