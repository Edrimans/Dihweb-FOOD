<?php
session_start(); // (I) Start session
include 'includes/header.php';
require_once 'functions/helpers.php'; // (C) Functions
require_once 'classes/Order.php'; // (D) Order class
?>

<!DOCTYPE html>
<html lang="en">
<body>
    
    <main>
    <?php
    // (H) Date & Time
    $currentDate = date("l, F j, Y");
    $welcome = "Welcome";

    ?>

    <section id="Home">

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

        <div class="main anim">

            <div class="main_text">

                <h1>Classic<span> Food</span><br>Delivered Right to You</h1>

                <p>
                    Welcome to Food, your go-to for classic diner favorites delivered straight to your door. 
                    We bring the nostalgia of vintage dining to your home with our fresh and hearty meals. 
                    From juicy burgers and crispy fries to creamy milkshakes and classic pies, enjoy a taste of the past without leaving the comfort of your home. 
                    Experience the charm of retro dining with modern convenience. Order from Food and let us deliver a delicious slice of nostalgia right to you!
                </p>

                <a href="menu.php" class="btn"><i class="fa-solid fa-burger"></i><b>Order Now</b></a>

            </div>

            <div class="main_image">
                <img src="image/main_img.png">
            </div>

        </div>

    </section>

    <!--About-->

    <div class="about">

        <div class="about_main">

            <div class="about_image">
                <img src="image/about.png">
            </div>

            <div class="about_text">

                <h1><span>About</span>Us</h1>
                <h3>Why choose us?</h3>
                <p>
                    At Food, we bring the nostalgic charm of classic diners straight to your door with our vintage-themed food delivery service. 
                    Our menu features beloved diner classics like juicy burgers, crispy fries, and creamy milkshakes, all crafted from fresh, high-quality ingredients. 
                    Enjoy the convenience of modern food delivery while savoring the timeless comfort of retro dining. 
                    With Food, you get a delicious taste of the past delivered hot and ready to enjoy, right in the comfort of your home.
                </p>

                <div class="about_services">

                    <div class="s_1">
                        <i class="fa-solid fa-truck-fast"></i>
                        <a href="menu.php"><b>Fast Delivery</b></a>
                    </div>

                    <div class="s_1">
                        <i class="fa-brands fa-amazon-pay"></i>
                        <a href="menu.php"><b>Easy Payment</b></a>
                    </div>

                    <div class="s_1">
                        <i class="fa-solid fa-headset"></i>
                        <a href="menu.php"><b>24 x 7 Services</b></a>
                    </div>

                </div>

                <a href="menu.php" class="about_btn">
                    <i class="fa-solid fa-burger"></i><b>Order Now</b></a>

            </div>

        </div>

    </div>


    

    <!--Menu-->

    <div class="menu">

        <h1>Our<span>Menu</span></h1>
    
        <div class="menu_box">
    
            <div class="menu_card">
    
                <div class="menu_img">
                    <img src="image/menu_1.jpg" alt="Burger">
                </div>
    
                <div class="menu_text">
    
                    <h2>Burger</h2>
                    <p>
                        A delicious, juicy beef patty topped with fresh lettuce, tomatoes, onions, and your choice of sauce, served on a toasted bun.
                    </p>
    
                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
    
                    <p class="price">$12.00<sub><del>$15.00</del></sub></p>
    
                    <a href="menu.php" class="menu_btn"><i class="fa-solid fa-burger"></i>Order Now</a>
    
                </div>
    
            </div>
    
            <div class="menu_card">
    
                <div class="menu_img">
                    <img src="image/menu_2.jpg" alt="Drink">
                </div>
    
                <div class="menu_text">
    
                    <h2>Drink</h2>
                    <p>
                        Refresh yourself with a choice of chilled beverages, including sodas, iced teas, and fruit juices, perfect for any meal.
                    </p>
    
                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
    
                    <p class="price">$3.00<sub><del>$5.00</del></sub></p>
    
                    <a href="menu.php" class="menu_btn"><i class="fa-solid fa-burger"></i>Order Now</a>
    
                </div>
    
            </div>
    
            <div class="menu_card">
    
                <div class="menu_img">
                    <img src="image/menu_3.jpg" alt="Pizza">
                </div>
    
                <div class="menu_text">
    
                    <h2>Pizza</h2>
                    <p>
                        Enjoy our classic pizza with a crispy crust, topped with a blend of mozzarella, cheddar, and your choice of fresh toppings.
                    </p>
    
                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
    
                    <p class="price">$15.00<sub><del>$20.00</del></sub></p>
    
                    <a href="menu.php" class="menu_btn"><i class="fa-solid fa-burger"></i>Order Now</a>
    
                </div>
    
            </div>
    
        </div>
    
    </div>



    <!--Banner-->

    <div class="banner">

        <h1>Special Offer</h1>

        <div class="banner_center">
            <h2>30% Off</span></h2>
          
        </div>

        <a href="menu.php" class="banner_btn"><i class="fa-solid fa-burger"></i>Order Now</a>

    </div>




    <!--Gallery-->

    <div class="gallery">

        <h1>Popular<span>Gallery</span></h1>

        <div class="gallery_box">

            <div class="gallery_image">
                <img src="image/gallary_1.jpg">
            </div>

            <div class="gallery_image">
                <img src="image/gallary_2.jpg">
            </div>

            <div class="gallery_image">
                <img src="image/gallary_3.webp">
            </div>

        </div>

    </div>



    <!--Offer-->

    <div class="offer">

        <div class="offer_box">
    
            <div class="offer_card_1">
    
                <div class="offer_img">
                    <img src="image/offer_1.png" alt="Special Offer">
                </div>
    
                <div class="offer_tag">
    
                    <h2>Triple Feast Combo</h2>
                    <h1>40% Off</h1>
                    <p>
                        Indulge in our Triple Feast Combo! Get a mouth-watering burger, crispy fries, 
                        and a refreshing drink all at 40% off. Perfect for when you're hungry and want 
                        to save big!
                    </p>
                    <a href="menu.php" class="offer_btn"><i class="fa-solid fa-burger"></i>Order Now</a>
    
                </div>
    
            </div>
    
            <div class="offer_card_2">
    
                <div class="offer_img">
                    <img src="image/offer_2.png" alt="Pizza Offer">
                </div>
    
                <div class="offer_tag">
    
                    <h2>Buy 2 Pizzas and Get a Free Drink</h2>
                    <p>
                        Grab any two of your favorite pizzas and enjoy a free drink on the house! 
                        This offer is perfect for sharing with friends or treating yourself to a 
                        delicious meal.
                    </p>
                    <a href="menu.php" class="offer_btn"><i class="fa-solid fa-burger"></i>Order Now</a>
    
                </div>
    
            </div>
    
        </div>
    
    </div>
    
    <!--Team-->

    <div class="team">

        <h1>Meet Our<span>Team</span></h1>
    
        <div class="team_line_1"></div>
        <div class="team_line_2"></div>
    
        <div class="team_box">
    
            <div class="team_card">
    
                <div class="team_img">
                    <img src="image/team_1.jpg">
                </div>
    
                <div class="team_tag">
    
                    <h2>John Doe</h2>
                    <p class="job">Head Chef</p>
                    <p class="info">
                        John is the mastermind behind our delicious menu, bringing over 
                        15 years of culinary experience. He’s passionate about 
                        blending classic diner favorites with modern twists, ensuring 
                        every dish is unforgettable.
                    </p>
    
                </div>
    
            </div>
    
            <div class="team_card">
    
                <div class="team_img">
                    <img src="image/team_2.jpg">
                </div>
    
                <div class="team_tag">
    
                    <h2>Mary Smith</h2>
                    <p class="job">Sous Chef</p>
                    <p class="info">
                        Mary assists in the kitchen with a focus on creating the perfect 
                        balance of flavors. Her attention to detail ensures each plate 
                        looks as good as it tastes.
                    </p>
    
                </div>
    
            </div>
    
            <div class="team_card">
    
                <div class="team_img">
                    <img src="image/team_3.jpg">
                </div>
    
                <div class="team_tag">
    
                    <h2>Jake Johnson</h2>
                    <p class="job">Pastry Chef</p>
                    <p class="info">
                        Jake’s sweet creations are the talk of the town. From classic 
                        diner pies to decadent cakes, his desserts provide the perfect 
                        ending to any meal.
                    </p>
    
                </div>
    
            </div>
    
            <div class="team_card">
    
                <div class="team_img">
                    <img src="image/team_4.jpg">
                </div>
    
                <div class="team_tag">
    
                    <h2>Emily Davis</h2>
                    <p class="job">Front of House</p>
                    <p class="info">
                        Emily makes sure every guest feels welcome from the moment they 
                        step in. Her warm personality and attention to detail ensure 
                        you always have a pleasant experience.
                    </p>
    
                </div>
    
            </div>
    
        </div>
    
    </div>
    
    
    <!--Blog-->
    
    <div class="blog">
    
        <h1>Our<span>Reviews</span></h1>
    
        <div class="blog_box">
    
            <div class="blog_card">
    
                <div class="blog_img">
                    <img src="image/blog_1.jpeg">
                </div>
    
                <div class="blog_tag">
    
                    <div class="blog_date">
                        <p>18 June 2024<i class="fa-solid fa-calendar-days"></i></p>
                    </div>
    
                    <h3 class="blog_heading">
                        The Must-Try Milkshake at Food Diner
                    </h3>
    
                    <p class="blog_text">
                        Discover the story behind our signature milkshake and why it’s 
                        a fan favorite. We’ll dive into the flavors that make it 
                        unforgettable!
                    </p>
    
                    <hr>
    
                    <div class="view_and_like">
    
                        <div class="view">
                            <p>15.3K Views</p>
                            <p class="b_comm">786 comments</p>
                        </div>
    
                        <div class="like">
                            <p>3K</p>
                            <i class="fa-regular fa-heart"></i>
                        </div>
    
                    </div>
    
                </div>
    
            </div>
    
            <div class="blog_card">
    
                <div class="blog_img">
                    <img src="image/blog_2.jpg">
                </div>
    
                <div class="blog_tag">
    
                    <div class="blog_date">
                        <p>05 September 2024<i class="fa-solid fa-calendar-days"></i></p>
                    </div>
    
                    <h3 class="blog_heading">
                        A Day in the Life at Food: Behind the Scenes
                    </h3>
    
                    <p class="blog_text">
                        Take a sneak peek into our kitchen as we prepare for the busy 
                        lunch rush. Meet the team and see how our meals come to life!
                    </p>
    
                    <hr>
    
                    <div class="view_and_like">
    
                        <div class="view">
                            <p>12.4K Views</p>
                            <p class="b_comm">582 comments</p>
                        </div>
    
                        <div class="like">
                            <p>2.8K</p>
                            <i class="fa-regular fa-heart"></i>
                        </div>
    
                    </div>
    
                </div>
    
            </div>
    
            <div class="blog_card">
    
                <div class="blog_img">
                    <img src="image/blog_3.jpg">
                </div>
    
                <div class="blog_tag">
    
                    <div class="blog_date">
                        <p>14 September 2024<i class="fa-solid fa-calendar-days"></i></p>
                    </div>
    
                    <h3 class="blog_heading">
                        5 Classic Diner Dishes You Can’t Miss
                    </h3>
    
                    <p class="blog_text">
                        From juicy burgers to crispy fries, these diner staples have 
                        stood the test of time. Here are the top five must-try dishes 
                        at Food.
                    </p>
    
                    <hr>
    
                    <div class="view_and_like">
    
                        <div class="view">
                            <p>14.6K Views</p>
                            <p class="b_comm">623 comments</p>
                        </div>
    
                        <div class="like">
                            <p>3.2K</p>
                            <i class="fa-regular fa-heart"></i>
                        </div>
    
                    </div>
    
                </div>
    
            </div>
    
        </div>
    
    </div>
    
    
    <!--Footer-->


    <!--San Pedro, Adrian Elijah A.!-->
    <!--Ochoco, Calvin!-->
    <!--Dizon, John Andrew S.-->
    <?php include 'includes/footer.php'; ?>
</body>
</html>
