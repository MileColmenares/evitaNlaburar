<?php
session_start();

if (isset($_GET['id'])) {
    $product_id = $_GET['id'];
    if (isset($_SESSION['carrito'][$product_id])) {
        unset($_SESSION['carrito'][$product_id]);
    }
}

header("Location: ver_carrito.php");
?>