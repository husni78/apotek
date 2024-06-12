<?php
include 'db.php';
include 'navbar.php';

$product_id = $_GET['id'];
$sql = "SELECT * FROM products WHERE id = $product_id";
$result = $conn->query($sql);
$product = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
    <link rel="stylesheet" type="text/css" href="../css/add_product.css">
</head>
<body>
    <main>
        <h1>Edit Product</h1>
        <form action="edit_product_process.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
            
            <label for="name">Product Name:</label>
            <input type="text" id="name" name="name" value="<?php echo $product['name']; ?>" required>
            
            <label for="description">Description:</label>
            <textarea id="description" name="description" required><?php echo $product['description']; ?></textarea>
            
            <label for="price">Price:</label>
            <input type="number" id="price" name="price" value="<?php echo $product['price']; ?>" required>
            
            <label for="stock">Stock:</label>
            <input type="number" id="stock" name="stock" value="<?php echo $product['stock']; ?>" required>
            
            <label for="image">Image:</label>
            <input type="file" id="image" name="image">
            
            <button type="submit">Update Product</button>
        </form>
    </main>
</body>
</html>
