<?php
include 'db.php';
include 'navbar.php';

$product_id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$stock = $_POST['stock'];

if (isset($_FILES['image']) && $_FILES['image']['size'] > 0) {
    $image = 'uploads/' . basename($_FILES['image']['name']);
    move_uploaded_file($_FILES['image']['tmp_name'], $image);
    $sql = "UPDATE products SET name='$name', description='$description', price='$price', stock='$stock', image='$image' WHERE id='$product_id'";
} else {
    $sql = "UPDATE products SET name='$name', description='$description', price='$price', stock='$stock' WHERE id='$product_id'";
}

if ($conn->query($sql) === TRUE) {
    header("Location: add_product.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
