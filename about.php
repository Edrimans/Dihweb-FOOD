<?php
session_start(); // (I) Start session
include 'includes/db.php'; // (K) DB connection
include 'includes/header.php';
require_once 'functions/helpers.php'; // (C) Functions
require_once 'classes/Order.php'; // (D) Order class
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Website</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" href="image/short_icon.png">
</head>
<body>

    <!--Navigation Bar-->
    <nav>

        <div class="logo">
            <a href="index.php"><img src="image/logo.png"></a>
        </div>

        <ul>
            <li><a href="index.php" ><b>Home</b></a></li>
            <li><a href="menu.php"><b>Menu</b></a></li>
            <li><a href="about.php"><b>About</b></a></li>
            <li><a href="blog.php"><b>Reviews</b></a></li>
        </ul>

    </nav>

    <!--Banner-->
    <div class="banner_bg">
        <h1><span>About</span>Us</h1>
    </div>

    <!--About-->
    <div class="about">
        <div class="about_main">
            <div class="about_image">
                <img src="image/about.png" alt="About Us">
            </div>
            <div class="about_text">
                <h1>Why choose us?</h1>
                <p>
                    At Food, we bring the nostalgic charm of classic diners straight to your door with our vintage-themed food delivery service. 
                    Our menu features beloved diner classics like juicy burgers, crispy fries, and creamy milkshakes, all crafted from fresh, high-quality ingredients. 
                    Enjoy the convenience of modern food delivery while savoring the timeless comfort of retro dining. 
                    With Food, you get a delicious taste of the past delivered hot and ready to enjoy, right in the comfort of your home.
                </p>
                <div class="about_services">
                    <div class="s_1">
                        <i class="fas fa-truck-fast"></i>
                        <a href="#"><b>Fast Delivery</b></a>
                    </div>
                    <div class="s_1">
                        <i class="fab fa-amazon-pay"></i>
                        <a href="#"><b>Easy Payment</b></a>
                    </div>
                    <div class="s_1">
                        <i class="fas fa-headset"></i>
                        <a href="#"><b>24 x 7 Services</b></a>
                    </div>
                </div>
                <a href="menu.php" class="about_btn">
                    <i class="fas fa-burger"></i><b>Order Now</b>
                </a>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>
</body>
</html>
