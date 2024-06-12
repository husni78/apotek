<?php
session_start();
include 'db.php';

$cart = $_SESSION['cart'] ?? [];
$address = $_POST['address'];
$phone = $_POST['phone'];
$payment = $_POST['payment'];
$totalPrice = 0;

if (!empty($cart)) {
    foreach ($cart as $productId => $quantity) {
        $sql = "SELECT * FROM products WHERE id = $productId";
        $result = $conn->query($sql);
        $product = $result->fetch_assoc();
        $subtotal = $product['price'] * $quantity;
        $totalPrice += $subtotal;

        // Reduce stock
        $newStock = $product['stock'] - $quantity;
        $updateStockSql = "UPDATE products SET stock = $newStock WHERE id = $productId";
        $conn->query($updateStockSql);
    }

    // Save order to database (implement order table and saving process as needed)
    // Clear the cart
    unset($_SESSION['cart']);
    echo "Order placed successfully. Total amount: $" . $totalPrice;
} else {
    echo "Your cart is empty.";
}

$conn->close();
?>
