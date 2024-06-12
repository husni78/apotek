<?php
session_start();
include 'db.php';
include 'navbar.php';

// Menangani penambahan produk ke keranjang belanja
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id'];
    $quantity = intval($_POST['quantity']);
    $max_quantity = intval($_POST['max_quantity']);

    if ($quantity <= $max_quantity) {
        // Kurangi stok di database
        $new_stock = $max_quantity - $quantity;
        $update_stock_sql = "UPDATE products SET stock = $new_stock WHERE id = $product_id";
        $conn->query($update_stock_sql);

        if (isset($_SESSION['cart'][$product_id])) {
            if ($_SESSION['cart'][$product_id]['quantity'] + $quantity <= $max_quantity) {
                $_SESSION['cart'][$product_id]['quantity'] += $quantity;
            } else {
                $_SESSION['cart'][$product_id]['quantity'] = $max_quantity;
            }
        } else {
            $sql = "SELECT * FROM products WHERE id = $product_id";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $product = $result->fetch_assoc();
                $_SESSION['cart'][$product_id] = [
                    "name" => $product['name'],
                    "price" => $product['price'],
                    "quantity" => $quantity
                ];
            }
        }
    }
    header("Location: products.php");
    exit;
}

// Mendapatkan daftar produk dari database
$search_query = "";
if (isset($_GET['search'])) {
    $search_query = $_GET['search'];
    $sql = "SELECT * FROM products WHERE name LIKE '%$search_query%' OR description LIKE '%$search_query%'";
} else {
    $sql = "SELECT * FROM products";
}
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Products - Online Store</title>
    <link rel="stylesheet" type="text/css" href="../css/product.css">
    <style>
body{
    background: linear-gradient(to right, #CDE8E5, #EEF7FF, #7AB2B2);
}
.products {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
}

.product-card {
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 5px;
    width: 250px; /* Consistent width for all product cards */
    margin: 10px;
    padding: 10px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    text-align: center;
}

.product-card img {
    width: 100%;
    height: auto; /* Ensure image fits within the card */
    border-radius: 5px;
    margin-bottom: 10px;
}

.product-card h2 {
    font-size: 1.2em;
    margin: 10px 0;
}

.product-card p {
    font-size: 0.9em;
    margin: 5px 0;
}

.product-card form {
    margin-top: 10px;
}

.product-card input[type='number'] {
    width: 50px;
    margin-right: 10px;
}

.product-card button {
    background-color: #28a745;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 5px 10px;
    cursor: pointer;
}

.product-card button:hover {
    background-color: #218838;
}

    </style>
</head>
<body>
    <main>
        <form method="GET" action="products.php">
            <input type="text" name="search" placeholder="Search products..." value="<?php echo htmlspecialchars($search_query); ?>">
            <button type="submit">Search</button>
        </form>
        <div class="products">
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='product-card'>";
                    echo "<img src='../uploads/" . $row['image'] . "' alt='" . $row['name'] . "'>";
                    echo "<h2>" . $row['name'] . "</h2>";
                    echo "<p>" . $row['description'] . "</p>";
                    echo "<p>Harga: Rp." . $row['price'] . "</p>";
                    echo "<p>Stock: " . $row['stock'] . "</p>";
                    echo "<form method='POST' action='products.php'>";
                    echo "<input type='hidden' name='product_id' value='" . $row['id'] . "'>";
                    echo "<input type='hidden' name='max_quantity' value='" . $row['stock'] . "'>";
                    echo "<label for='quantity'>Quantity:</label>";
                    echo "<input type='number' name='quantity' value='1' min='1' max='" . $row['stock'] . "' required>";
                    echo "<button type='submit' name='add_to_cart'>Add to Cart</button>";
                    echo "</form>";
                    echo "</div>";
                }
            } else {
                echo "<p>No products available.</p>";
            }
            ?>
        </div>
    </main>
</body>
</html>
