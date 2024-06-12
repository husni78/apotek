<?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];
    $session_id = session_id();

    // Periksa apakah produk sudah ada dalam keranjang
    $check_sql = "SELECT * FROM cart WHERE session_id = '$session_id' AND product_id = '$product_id'";
    $check_result = $conn->query($check_sql);

    if ($check_result->num_rows > 0) {
        // Jika produk sudah ada, tambahkan jumlahnya
        $update_sql = "UPDATE cart SET quantity = quantity + $quantity WHERE session_id = '$session_id' AND product_id = '$product_id'";
        if ($conn->query($update_sql) === TRUE) {
            echo "Product quantity updated.";
        } else {
            echo "Error: " . $update_sql . "<br>" . $conn->error;
        }
    } else {
        // Jika produk belum ada, tambahkan produk ke keranjang dengan jumlah yang dimasukkan
        $insert_sql = "INSERT INTO cart (session_id, product_id, quantity) VALUES ('$session_id', '$product_id', '$quantity')";
        if ($conn->query($insert_sql) === TRUE) {
            echo "Product added to cart.";
        } else {
            echo "Error: " . $insert_sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
header('Location: products.php');
?>
