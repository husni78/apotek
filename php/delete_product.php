<?php

include 'db.php';

$id = $_GET['id'];
$sql = "DELETE FROM products WHERE id='$id'";
if ($conn->query($sql) === TRUE) {
    header("Location: add_product.php");
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();
?>
