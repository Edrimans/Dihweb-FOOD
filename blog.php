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
    <link rel="short icon" href="image/short_icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script>
        function subscribe(event) {
            event.preventDefault(); // Prevent the default form submission
            const name = document.querySelector('input[type="text"]').value;
            const email = document.querySelector('input[type="email"]').value;

            if (name && email) {
                alert(`Thank you for subscribing, ${name}! We will send updates to ${email}.`);
            } else {
                alert('Please enter both your name and email.');
            }
        }
    </script>
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
        <h1>Our<span>Reviews</span></h1>
    </div>




    <!--Blog-->

    <div class="main_blog anim">

        <div class="slide_1">

            <div class="blog_box">

                <div class="blog_card">
                    <div class="blog_image">
                        <img src="image/blog_1.jpeg" alt="Classic Diner Dish">
                    </div>
                    <div class="blog_tag">
                        <div class="blog_date">
                            <p>19 September 2024<i class="fa-solid fa-calendar-days"></i></p>
                        </div>
                        <h3 class="blog_heading">
                            The Must-Try Classic: Our Famous Reuben Sandwich
                        </h3>
                        <p class="blog_text">
                            Our Reuben Sandwich is a timeless classic, loaded with juicy corned beef, tangy sauerkraut, and melted Swiss cheese, all nestled between two slices of perfectly toasted rye bread. Discover why this dish has been a customer favorite for years.
                        </p>
                        <hr>
                        <div class="view_and_like">
                            <div class="view">
                                <p>23.5K views</p>
                                <p class="b_com">1.1K comments</p>
                            </div>
                            <div class="like">
                                <p>4.2K</p>
                                <i class="fa-regular fa-heart"></i>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="blog_card">
                    <div class="blog_image">
                        <img src="image/blog_2.jpg" alt="Delicious Pancakes">
                    </div>
                    <div class="blog_tag">
                        <div class="blog_date">
                            <p>10 September 2024<i class="fa-solid fa-calendar-days"></i></p>
                        </div>
                        <h3 class="blog_heading">
                            Start Your Day Right: The Best Pancakes in Town
                        </h3>
                        <p class="blog_text">
                            Our fluffy pancakes are made from scratch and served with a variety of toppings. Whether you like them with fresh fruit, syrup, or a dollop of whipped cream, these pancakes are sure to brighten your morning.
                        </p>
                        <hr>
                        <div class="view_and_like">
                            <div class="view">
                                <p>18.7K views</p>
                                <p class="b_com">920 comments</p>
                            </div>
                            <div class="like">
                                <p>2.9K</p>
                                <i class="fa-regular fa-heart"></i>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="blog_card">
                    <div class="blog_image">
                        <img src="image/blog_3.jpg" alt="Scrumptious Burgers">
                    </div>
                    <div class="blog_tag">
                        <div class="blog_date">
                            <p>03 September 2024<i class="fa-solid fa-calendar-days"></i></p>
                        </div>
                        <h3 class="blog_heading">
                            Why Our Burgers are Simply the Best
                        </h3>
                        <p class="blog_text">
                            Juicy, flavorful, and made to order—our burgers are crafted with the finest ingredients and cooked to perfection. Come taste why our burgers are the talk of the town.
                        </p>
                        <hr>
                        <div class="view_and_like">
                            <div class="view">
                                <p>30.2K views</p>
                                <p class="b_com">1.5K comments</p>
                            </div>
                            <div class="like">
                                <p>5.1K</p>
                                <i class="fa-regular fa-heart"></i>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="blog_card">
                    <div class="blog_image">
                        <img src="image/blog_4.jpg" alt="Tasty Milkshakes">
                    </div>
                    <div class="blog_tag">
                        <div class="blog_date">
                            <p>27 August 2024<i class="fa-solid fa-calendar-days"></i></p>
                        </div>
                        <h3 class="blog_heading">
                            Indulge in Our Irresistible Milkshakes
                        </h3>
                        <p class="blog_text">
                            Creamy, thick, and utterly delicious—our milkshakes come in a variety of flavors and are made with real ice cream. They’re the perfect treat to satisfy your sweet tooth.
                        </p>
                        <hr>
                        <div class="view_and_like">
                            <div class="view">
                                <p>20.4K views</p>
                                <p class="b_com">1.2K comments</p>
                            </div>
                            <div class="like">
                                <p>3.5K</p>
                                <i class="fa-regular fa-heart"></i>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="blog_card">
                    <div class="blog_image">
                        <img src="image/blog_5.jpeg" alt="Scrumptious Breakfast">
                    </div>
                    <div class="blog_tag">
                        <div class="blog_date">
                            <p>23 August 2024<i class="fa-solid fa-calendar-days"></i></p>
                        </div>
                        <h3 class="blog_heading">
                            Why Our Breakfast Plates are Unforgettable
                        </h3>
                        <p class="blog_text">
                            Start your day with our hearty breakfast plates, featuring eggs any style, crispy bacon, fluffy pancakes, and more. Our breakfast is the perfect way to fuel your day.
                        </p>
                        <hr>
                        <div class="view_and_like">
                            <div class="view">
                                <p>25.6K views</p>
                                <p class="b_com">1.4K comments</p>
                            </div>
                            <div class="like">
                                <p>4.8K</p>
                                <i class="fa-regular fa-heart"></i>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="blog_card">
                    <div class="blog_image">
                        <img src="image/blog_6.jpg" alt="Hearty Soups">
                    </div>
                    <div class="blog_tag">
                        <div class="blog_date">
                            <p>15 August 2024<i class="fa-solid fa-calendar-days"></i></p>
                        </div>
                        <h3 class="blog_heading">
                            Comfort in a Bowl: Our Classic Soups
                        </h3>
                        <p class="blog_text">
                            Warm up with our delicious homemade soups, crafted with fresh ingredients and a lot of love. Perfect for a cozy meal or as a starter to your main course.
                        </p>
                        <hr>
                        <div class="view_and_like">
                            <div class="view">
                                <p>17.3K views</p>
                                <p class="b_com">980 comments</p>
                            </div>
                            <div class="like">
                                <p>2.7K</p>
                                <i class="fa-regular fa-heart"></i>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="blog_card">
                    <div class="blog_image">
                        <img src="image/blog_7.jpg" alt="Delicious Sandwiches">
                    </div>
                    <div class="blog_tag">
                        <div class="blog_date">
                            <p>07 August 2024<i class="fa-solid fa-calendar-days"></i></p>
                        </div>
                        <h3 class="blog_heading">
                            Savor the Flavor of Our Handcrafted Sandwiches
                        </h3>
                        <p class="blog_text">
                            Our sandwiches are made with fresh ingredients and served on your choice of bread. From classic BLTs to unique creations, there’s a sandwich for everyone.
                        </p>
                        <hr>
                        <div class="view_and_like">
                            <div class="view">
                                <p>28.9K views</p>
                                <p class="b_com">1.3K comments</p>
                            </div>
                            <div class="like">
                                <p>4.1K</p>
                                <i class="fa-regular fa-heart"></i>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="blog_card">
                    <div class="blog_image">
                        <img src="image/blog_8.jpg" alt="Delectable Desserts">
                    </div>
                    <div class="blog_tag">
                        <div class="blog_date">
                            <p>01 August 2024<i class="fa-solid fa-calendar-days"></i></p>
                        </div>
                        <h3 class="blog_heading">
                            Treat Yourself to Our Delectable Desserts
                        </h3>
                        <p class="blog_text">
                            End your meal on a sweet note with our delectable desserts. From homemade pies to creamy cheesecakes, our dessert menu has something to satisfy every craving.
                        </p>
                        <hr>
                        <div class="view_and_like">
                            <div class="view">
                                <p>19.8K views</p>
                                <p class="b_com">1.0K comments</p>
                            </div>
                            <div class="like">
                                <p>3.0K</p>
                                <i class="fa-regular fa-heart"></i>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="blog_card">
                    <div class="blog_image">
                        <img src="image/blog_9.jpeg" alt="Classic Diner Burgers">
                    </div>
                    <div class="blog_tag">
                        <div class="blog_date">
                            <p>30 July 2024<i class="fa-solid fa-calendar-days"></i></p>
                        </div>
                        <h3 class="blog_heading">
                            Classic Diner Burgers: A Taste of Nostalgia
                        </h3>
                        <p class="blog_text">
                            Experience a taste of nostalgia with our classic diner burgers. Each burger is made with premium beef and served with traditional toppings that will remind you of simpler times.
                        </p>
                        <hr>
                        <div class="view_and_like">
                            <div class="view">
                                <p>21.5K views</p>
                                <p class="b_com">1.2K comments</p>
                            </div>
                            <div class="like">
                                <p>3.9K</p>
                                <i class="fa-regular fa-heart"></i>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="blog_card">
                    <div class="blog_image">
                        <img src="image/blog_10.jpeg" alt="Classic Diner Milkshakes">
                    </div>
                    <div class="blog_tag">
                        <div class="blog_date">
                            <p>28 July 2024<i class="fa-solid fa-calendar-days"></i></p>
                        </div>
                        <h3 class="blog_heading">
                            Sip on Something Sweet: Our Classic Milkshakes
                        </h3>
                        <p class="blog_text">
                            Indulge in our rich and creamy milkshakes made with the finest ingredients. Perfectly blended and served with a cherry on top, these milkshakes are a classic treat you can't miss.
                        </p>
                        <hr>
                        <div class="view_and_like">
                            <div class="view">
                                <p>22.4K views</p>
                                <p class="b_com">1.4K comments</p>
                            </div>
                            <div class="like">
                                <p>4.4K</p>
                                <i class="fa-regular fa-heart"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="slide_2">

            <div class="follow_card">

                <div class="follow_head">
                    <h2 class="most_follow">Followers</h2>
                </div>

                <div class="follow_profiles">

                    <img src="image/follow_1.png">
                    <div class="follow_profile_tag">
                        <strong>David Nguyen</strong>
                        <p>Hanoi, Vietnam</p>
                    </div>
                
                </div>
                
                <div class="follow_profiles">
                
                    <img src="image/follow_2.png">
                    <div class="follow_profile_tag">
                        <strong>Sophia Rossi</strong>
                        <p>Rome, Italy</p>
                    </div>
                
                </div>
                
                <div class="follow_profiles">
                
                    <img src="image/follow_3.png">
                    <div class="follow_profile_tag">
                        <strong>Amira Ali</strong>
                        <p>Cairo, Egypt</p>
                    </div>
                
                </div>
                
                <div class="follow_profiles">
                
                    <img src="image/follow_4.png">
                    <div class="follow_profile_tag">
                        <strong>Yuki Tanaka</strong>
                        <p>Osaka, Japan</p>
                    </div>
                
                </div>
                
                <div class="follow_profiles">
                
                    <img src="image/follow_5.png">
                    <div class="follow_profile_tag">
                        <strong>Lucas Williams</strong>
                        <p>Sydney, Australia</p>
                    </div>
                
                </div>
                
                <div class="follow_profiles">
                
                    <img src="image/follow_6.png">
                    <div class="follow_profile_tag">
                        <strong>Aleksandr Petrov</strong>
                        <p>Moscow, Russia</p>
                    </div>
                
                </div>
                
                <div class="follow_profiles">
                
                    <img src="image/follow_7.png">
                    <div class="follow_profile_tag">
                        <strong>Lily Chen</strong>
                        <p>Beijing, China</p>
                    </div>
                
                </div>
                
                <div class="follow_profiles">
                
                    <img src="image/follow_8.png">
                    <div class="follow_profile_tag">
                        <strong>Maria Garcia</strong>
                        <p>Madrid, Spain</p>
                    </div>
                
                </div>
                
                <div class="follow_profiles">
                
                    <img src="image/follow_9.png">
                    <div class="follow_profile_tag">
                        <strong>Kofi Mensah</strong>
                        <p>Accra, Ghana</p>
                    </div>
                
                </div>
                
                <div class="follow_profiles">
                
                    <img src="image/follow_10.png">
                    <div class="follow_profile_tag">
                        <strong>Emma Brown</strong>
                        <p>Toronto, Canada</p>
                    </div>
                
                </div>                

            </div>

        </div>

    </div>




    <!--Banner-->

            <div class="blog_banner">
                <div class="blog_banner_tag">
                    <h2>Subscribe<br><span>& Stay Updated</span></h2>
                </div>
                <form onsubmit="subscribe(event)"> <!-- Added onsubmit event -->
                    <input type="text" placeholder="Your name" required>
                    <div class="blog_sub">
                        <input type="email" class="email" placeholder="Your email" required>
                        <button type="submit">SUBSCRIBE</button>
                    </div>
                </form>
            </div>


            <?php include 'includes/footer.php'; ?>
    
</body>
</html>
