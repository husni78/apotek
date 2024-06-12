<?php
include 'db.php';
include 'navbar.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Online Store - Add Product</title>
    <link rel="stylesheet" type="text/css" href="../css/add_product.css">
    <style>
        /* CSS untuk menyesuaikan ukuran gambar dalam tabel produk */
        table img {
            width: 100px;
            height: auto;
        }
    </style>
</head>
<body>
    <main>
        <h1>Add Product</h1>
        <form action="add_product_process.php" method="POST" enctype="multipart/form-data">
            <label for="name">Product Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="description">Description:</label>
            <textarea id="description" name="description" required></textarea>
            
            <label for="price">Price:</label>
            <input type="number" id="price" name="price" required>
            
            <label for="stock">Stock:</label>
            <input type="number" id="stock" name="stock" required>
            
            <label for="image">Image:</label>
            <input type="file" id="image" name="image" required>
            
            <button type="submit">Add Product</button>
        </form>

        <h2>Product List</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
            <?php
            $sql = "SELECT * FROM products";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['description'] . "</td>";
                    echo "<td>" . $row['price'] . "</td>";
                    echo "<td>" . $row['stock'] . "</td>";
                    echo "<td><img src='" . $row['image'] . "' alt='" . $row['name'] . "'></td>";
                    echo "<td>
                            <a href='edit_product.php?id=" . $row['id'] . "'>Edit</a> | 
                            <a href='delete_product.php?id=" . $row['id'] . "'>Delete</a>
                          </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='7'>No products available.</td></tr>";
            }
            $conn->close();
            ?>
        </table>
    </main>
</body>
</html>
