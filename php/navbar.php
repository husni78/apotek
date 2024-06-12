<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        header {
    background-color: #ffffff;
    color: rgb(17, 200, 220);
    padding: 10px 0;
}

nav .logo {
    width: 20px;
    height: 20px;
    justify-content: start;
}

nav .logo img {
    margin-top: 10px;
    margin-left: 5px;
    width: 50px;
    height: 50px;
}

nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: flex-end;
}

nav ul li {
    margin: 0 15px;
}

nav ul li a {
    display: block;
    color: rgb(8, 217, 249);
    text-align: center;
    padding: 14px 20px;
    text-decoration: none;
    transition: background-color 0.3s;
}

nav ul li a:hover {
    background-color: rgb(8, 217, 249);
    color: white;
}
    </style>
</head>
<body>

    <header>
        <nav>
            <div class="logo"><img src="../hj.jpg" alt=""></div>
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="checkout.php">Checkout</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="login.php">Admin</a></li>
            </ul>
        </nav>
    </header>
</body>
</html>