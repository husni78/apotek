<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background: linear-gradient(to right, #CDE8E5, #EEF7FF, #7AB2B2); /* Gradien dari biru ke putih */
    height: 100vh; /* Tinggi penuh viewport */}
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

.container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
    margin: 0 0 20px;
    padding: 0 15px;
    text-align: justify; }

.content {
    max-width: 960px;
    margin: 20px auto;
    padding: 20px;
}
h1 {
    font-family: 'Georgia', serif;
    font-size: 35px;
    color: #333;
    text-align: center;
    margin-bottom: 20px;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1); }

p {
    font-size: 1.1em;
    line-height: 1.6;
    margin: 0 0 20px;
    padding: 0 15px;
    text-align: justify; }

    .btn {
        background-color: #3498db;
        color: #ffffff;
        padding: 10px 20px;
        font-size: 16px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        text-align: center;
    }
    
    .btn:hover {
        background-color: #2980b9;
    }
    </style>
</head>
<body>

    <header>
        <nav>
            <div class="logo"><img src="hj.jpg" alt=""></div>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="php/products.php">Products</a></li>
                <li><a href="php/checkout.php">Checkout</a></li>
                <li><a href="php/about.php">About Us</a></li>
                <li><a href="php/login.php">Admin</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <div class="column">
            <img src="bener.png" alt="Foto">
        </div>
        <div class="column">
            <div class="wave-container">
                <div class="content">
                </div>
            </div>
            <h1>SELAMAT DATANG </h1>
            <h2>E-APOTEK</h2>
            <p><b><I>"KEPUASAN & KENYAMANAN"</i></b></p>
            <p>"Di Apotek Kesehatan Harmoni, kami berkomitmen untuk memberikan pelayanan terbaik dalam industri farmasi. Dengan fokus pada kualitas, inovasi, dan keberlanjutan, kami menyediakan beragam produk dan layanan kesehatan yang komprehensif untuk memenuhi kebutuhan Anda dan keluarga. Dengan tim profesional yang berpengalaman dan teknologi terkini, kami berupaya untuk menjadi mitra terpercaya Anda dalam perjalanan kesehatan Anda."</p>
            <a href="php/products.php"><button class="btn" >Lihat Produk</button></a>
        </div>
    </div>
   
</body>
</html>