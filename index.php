<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bitesize</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
   <header>
   <nav>
    <div class="nav-left">

        <img class="logo"src="images\imagekalogo.jpg" alt="logo">
        <span class="website-name">
            <img src="images/text.jpg" height="100px">
        </span>
        <ul class="nav-content">
            <li>
                <a href="index.php" style="color: #ff4500;">Home
                </a>
                </li>
            <li>
                <a href="aboutus.php" target="_blank">About us
                </a>
                </li>
            <li>
                <a href="../bitesize/dine in/dinein.php" target="_blank">Dine in
                </a>
                </li>

        </ul>
    </div>
    
    <div class="nav-right">
        <div class="search-bar">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" placeholder="Search for restaurant and food">
        </div>
    
        <!-- Profile  Dropdown -->
        <div class="profile-dropdown">
            <a href="#" class="profile-link">
                <i class="fa-solid fa-user"></i>
                <p>Profile</p>
            </a>
            <ul class="dropdown-options">
                <li><a href="../bitesize/profile/profile.php">Signup/SignIn</a></li>
                <li><a href="../bitesize/profile/userdashborad.html">User dashboard</a></li>
            </ul>
            <script src="js/home.js"></script>
        </div>
        <div>
            <a href="../bitesize/cart/cart.php">
            <i class="fa-solid fa-bag-shopping"></i>
            <p>Cart</p>
            </a>
        </div>
    </div>

    </div>

   </nav>
   </header>

   <div class="main">
    <div class="main__container">
        <div class="main__content">
            <h1>Your Cravings,Delivered!</h1>
            <p>
                Craving something special? With our curated selection of top-rated restaurants, 
                your favorite dishes are just a few clicks away. Whether you're in the mood for
                 gourmet cuisine, comforting classics, or exotic flavors, 
                 we bring the best of the culinary world straight to your door.
            </p>
        <button class="main__btn">
            <a href="../bitesize/food delivery/menu.php" target="_blank">Bite now</a>
        </button>
        </div>

        <div class="main_img--container">
            <img src="images/way-concept-illustration.png" alt="delivery" id="main__img"  width="680" height="520"  >
        </div>

        </section>
    </div>
   </div>
    
   <section class="how-it-works">
    <h1 >How It Works</h1>
    <p style="text-align: center;">Order your favorite meals in just a few clicks! Browse our menu, choose your dishes, 
        and we'll deliver them hot and fresh to your door in no time.</p>
    <div class="steps-container">
        <div class="step-box">
            <img src="images/image.png" alt="Select Restaurant">
            <h3>01 Select Restaurant</h3>
            <p>Choose from our curated list of top-rated restaurants near you.</p>
        </div> 
        <div class="step-box">
            <img src="images/select.webp" alt="Select Menu">
            <h3>02 Select Menu</h3>
            <p>Simply pick your favorites, customize your order, and get ready to enjoy!</p>
        </div>
        <div class="step-box">
            <img src="images/delivery.webp" alt="Wait for Delivery">
            <h3>03 Wait for Delivery</h3>
            <p>Sit back and relax! Once you've placed your order, our delivery 
                team will bring your meal straight to your doorstep, hot and fresh.</p>
        </div>
    </div>
</section>

<section id="slider">
    <div class="slider">
        <h1>What Customer Say About Us </h1>
        <div class="review_box">
            <div id="slide">
                <div class="card">
                    <div class="profile">
                        <img src="images/profile1.webp" alt="">
                        <h3>Himanshu Pal </h3>
                    </div>
                    <p>"Absolutely love this app! The interface is super easy to use, and
                         the food always arrives hot and on time. The variety of restaurants is amazing,
                    and the discounts make it even better. Highly recommend it for 
                    anyone who loves good food delivered fast!"</p>
                </div>
                <div class="card">
                    <div class="profile">
                        <img src="images/profile2.png" alt="">
                        <h3>Sharvari Mohokar</h3>
                    </div>
                    <p>"I'm impressed by the variety of cuisines available on this app. From Italian 
                        to Indian, everything I've ordered has been delicious. The tracking 
                        feature is also super handy, and I appreciate the regular updates on my order status."</p>
                </div>
                <div class="card">
                    <div class="profile">
                        <img src="images/profile3.png" alt="">
                        <h3>Mitali Deshpande</h3>
                    </div>
                    <p>""I've tried several food delivery apps, but this one is by far the best. 
                        The delivery is always quick, and the customer service is top-notch. 
                        Plus, they always have great promotions. I've found my new go-to for ordering food!"</p>
                </div>
                <div class="card">
                    <div class="profile">
                        <img src="images/profile4.png" alt="">
                        <h3>Sarthak Pagare</h3>
                    </div>
                    <p>"Such a great experience every time I order! The app is easy to 
                        navigate, and I love the exclusive deals. The food always arrives fresh and 
                         within the estimated time. Keep up the good work!"</p>
                </div>
            </div>
        <div class="slidebar">
            <img src="images/up-arrow.png" id="upArrow">
            <img src="images/down-arrow.png" id="downArrow">
            
        </div>
        </div>
    </div>

    <script src="js/script.js"></script>
    



<footer>
    <div class="footer">
        <div class="col-1">
            <h3>Links</h3>
            <a href="#">Home</a>
            <a href="#">About us</a>
            <a href="#">Dine in</a>
            <a href="#">Bite now</a>
        </div>
        <div class="col-2">
            <h3>Newsletter</h3>
            <form>
                <input type="email" placeholder="Enter your Email id" required>
                <br>
                <button type="submit">Subscribe</button>
            </form>
        </div>
        <div class="col-3">
            <h3>Contact us</h3>
            <p>24, Paud Road, Kothrud,
                <br> Pune, Maharashtra 411038, India</p>
                <div class="social-icon">
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-whatsapp"></i>
                </div>
                
        </div>
    </div>
    <div class="copyright">
    <p>&copy; 2024 Bitesize. All rights reserved.</p>
    </div>
</footer>


