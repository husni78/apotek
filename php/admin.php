<?php
include 'navbar.php';
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="../css/admin.css">
</head>
<body>
    <h1>Admin Dashboard</h1>
    <a href="add_product.php">Add New Product</a> | <a href="logout.php">Logout</a>
</body>
</html>
