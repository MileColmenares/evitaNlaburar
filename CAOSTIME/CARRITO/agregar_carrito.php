<?php

session_start();

if (isset($_GET['id'])) {
    $product_id = $_GET['id'];
    $quantity = isset($_POST['quantity']) ? $_POST['quantity'] : 1;

    if (isset($_SESSION['carrito'][$product_id])) {
        $_SESSION['carrito'][$product_id] += $quantity;
    } else {
        $_SESSION['carrito'][$product_id] = $quantity;
    }

    header("Location: index.php");
}
?>