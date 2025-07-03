<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
    <link rel="stylesheet" href="css/aboutus.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
   <header>
   <nav>
    <div class="nav-left">

        <img class="logo" src="images\imagekalogo.jpg" alt="logo">
        <span class="website-name">
            <img src="images/text.jpg" height="100px">
        </span>
        <ul class="nav-content">
            <li>
                <a href="../bitesize/index.php" target="_blank">Home
                </a>
                </li>
            <li>
                <a href="../bitesize/aboutus.php" target="_self" style="color: #ff4500;">About us
                </a>
                </li>
            <li>
                <a href="../bitesize/dine in/dinein.php">Dine in
                </a>
                </li>

        </ul>
    </div>
    
    <div class="nav-right">
        <div class="search-bar">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" placeholder="Search for restaurant and food">
        </div>

        <!-- Profile with Dropdown -->
        <div class="profile-dropdown">
            <a href="#" class="profile-link">
                <i class="fa-solid fa-user"></i>
                <p>Profile</p>
            </a>
            <ul class="dropdown-options">
                <li><a href="profile.php">Signup/SignIn</a></li>
                <li><a href="userdashborad.html">User dashboard</a></li>
            </ul>
            <script src="js/home.js"></script>
        </div>
        <div>
            <a href="cart.php">
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
            <h1>"When you are too lazy to cook we are here for you!"</h1>
            <p>
                Looking for a change? Dive into a flavor-packed journey with BiteSize—where every meal is an exciting adventure!
            <br>
            Whether you’re craving a quick snack or a full meal, we’ve got you covered with our diverse selection of delicious bites.
            </p>

            <div class="main_img--container">
                <img src="images/aboutuskaman.jpg" alt="delivery" id="main__img" >

            </div>
        </div>
    </div>
   </div>
        <div class="customer">
            <div class="item">
                <h2>Service shows good taste.</h2>
            </div>
              <div class="item">
                <h3>976</h3>
                <p>Satisfied Customer</p>
              </div>
              <div class="item">
                <h3>12</h3>
                <p>Best Restaurants</p>
              </div>
              <div class="item">
                <h3>1K+</h3>
                <p>Food Delivered</p>
              </div>
        </div>
       
        <div class="inspo">
            <h2>Why BiteSize?</h2>
            <p>BiteSize was born from a passion for food and
                 a desire to make meal delivery as easy and enjoyable as possible.
                 we believe that great food should be convenient, affordable,
                and always a delight.Behind BiteSize is a team of food lovers, tech enthusiasts, and customer service experts. We’re passionate
                about making your dining experience as seamless and enjoyable as possible.
                As we grow, our vision is to expand BiteSize to new cities and continue to innovate in the food delivery space,
                making quality meals accessible to everyone, one bite at a time.</p>
                
                <img src="images/inspo.avif" alt="whybitesize?">

            </div>

            <div class="btn_content">
            <h3> Curious to see what’s cooking? Discover our menu and find your 
                new favorite bite today!
            </h3>
            <button class="main__btn">
                <a href="../bitesize/food delivery/menu.php">Bite now</a>
            </button>
            </div>
        

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

