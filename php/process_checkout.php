<?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $payment = $_POST['payment'];
    $session_id = session_id();

    // Ambil item dalam keranjang dari database
    $sql = "SELECT p.id, p.name, p.price, c.quantity FROM cart c JOIN products p ON c.product_id = p.id WHERE c.session_id = '$session_id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Proses checkout (misalnya, simpan ke database order)
        // Hapus item dari keranjang setelah checkout
        $sql = "DELETE FROM cart WHERE session_id = '$session_id'";
        $conn->query($sql);

        echo "Checkout berhasil. Pesanan Anda sedang diproses.";
    } else {
        echo "Keranjang belanja Anda kosong.";
    }
}

$conn->close();
?>
