<?php
session_start();
include 'db.php';
include 'navbar.php';

// Menangani penghapusan produk dari keranjang
if (isset($_GET['remove'])) {
    $product_id = $_GET['remove'];
    unset($_SESSION['cart'][$product_id]);
    header("Location: checkout.php");
    exit;
}

// Mendapatkan detail produk dari database
$cart_products = [];
$total_price = 0;
if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    $product_ids = array_keys($_SESSION['cart']);
    $sql = "SELECT * FROM products WHERE id IN (" . implode(',', $product_ids) . ")";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $row['quantity'] = $_SESSION['cart'][$row['id']]['quantity'];
            $cart_products[] = $row;
            $total_price += $row['price'] * $row['quantity'];
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Checkout - Online Store</title>
    <link rel="stylesheet" type="text/css" href="../css/checkout.css">
    <style>
        body {
            background: linear-gradient(to right, #CDE8E5, #EEF7FF, #7AB2B2);
        }
    </style>
</head>
<body>
    <main>
        <h1>Checkout</h1>
        <?php if (!empty($cart_products)): ?>
            <table>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
                <?php foreach ($cart_products as $product): ?>
                    <tr>
                        <td><?php echo $product['name']; ?></td>
                        <td><?php echo $product['price']; ?></td>
                        <td><?php echo $product['quantity']; ?></td>
                        <td><?php echo $product['price'] * $product['quantity']; ?></td>
                        <td><a href="checkout.php?remove=<?php echo $product['id']; ?>">Remove</a></td>
                    </tr>
                <?php endforeach; ?>
                <tr>
                    <td colspan="3"><strong>Total Price</strong></td>
                    <td><?php echo $total_price; ?></td>
                    <td></td>
                </tr>
            </table>
            <form method="POST" action="process_order.php">
                <h2>Shipping Information</h2>
                <label for="name">Nama</label>
                <input type="text" name="name"required>
                <label for="address">Address:</label>
                <input type="text" name="address" required>
                <label for="phone">Phone:</label>
                <input type="text" name="phone" required>
                <label for="payment_method">Payment Method:</label>
                <select name="payment_method" required>
                    <option value="credit_card">Credit Card</option>
                    <option value="paypal">PayPal</option>
                </select>
                <button type="submit">Place Order</button>
            </form>
        <?php else: ?>
            <p>Your cart is empty. <a href="products.php">Go back to shop</a></p>
        <?php endif; ?>
    </main>
</body>
</html>
