<!DOCTYPE html>
<html>
<head>
    <title>Tentang Kami</title>
    <title>team</title>
    <link rel="stylesheet" type="text/css" href="../css/about.css">
    <style>
  body{
    background: linear-gradient(to right, #CDE8E5, #EEF7FF, #7AB2B2);
  }
.about-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
    width: 100%;
}

.profile-card {
    background-color: #ffffff;
    border: 1px solid #e0e0e0;
    border-radius: 15px;
    padding: 30px;
    width: 350px;
    text-align: center;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    transition: transform 0.2s;
}

.profile-card:hover {
    transform: scale(1.05);
}

.profile-image {
    border-radius: 50%;
    width: 120px;
    height: 120px;
    object-fit: cover;
    margin-bottom: 20px;
    border: 3px solid #007bff;
}

.profile-card h2 {
    font-size: 1.8em;
    margin: 10px 0 5px;
    color: #333;
}

.profile-card h3 {
    font-size: 1.2em;
    margin: 5px 0 20px;
    color: #777;
}

.profile-card p {
    font-size: 1em;
    color: #555;
    margin: 0 0 20px;
    line-height: 1.5;
}

.social-links {
    margin-top: 20px;
}

.social-links a {
    display: inline-block;
    margin: 0 10px;
    text-decoration: none;
}

.social-links img {
    width: 30px;
    height: 30px;
    transition: opacity 0.2s;
}

.social-links img:hover {
    opacity: 0.7;
}



    </style>
</head>
<body>
    <?php 
    include 'navbar.php';
    ?>

  <body>
  <constant>
    <div class="about-container">
        <div class="profile-card">
            <img src="foto.jpg" alt="Creator's Name" class="profile-image">
            <h2>HUSNI</h2>
            <h3>Web Developer</h3>
            <p> Web developer juga bertanggung jawab atas keamanan dan kinerja situs web serta berkolaborasi dengan desainer dan tim teknis lainnya untuk menciptakan solusi web yang inovatif.</p>
            <div class="social-links">
            <div class="content mt-3">
                <a href="https://www.facebook.com/muhammad.husni.58958343/" target="_blank">
                    <img src="data:image/jpeg;base64,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" alt="Facebook">
                </a>
                <a href="https://www.instagram.com/husni4r/" target="_blank">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDOBZcEZM_mIWAwOKWpHo0Z7mOsyAA_ZXVGQ&s" alt="Instagram">
                </a>
                <a href="https://github.com/husni78" target="_blank">
                    <img src="data:image/png;base64,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" alt="GitHub">
                </a>
            </div>
        </div>
    </div></constant>
</body>
</html>
</html>
