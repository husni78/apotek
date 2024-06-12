<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $productId = $_POST['product_id'];
    unset($_SESSION['cart'][$productId]);
    header('Location: checkout.php');
    exit;
}
?>
