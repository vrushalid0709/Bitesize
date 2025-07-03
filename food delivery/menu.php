<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BiteNow</title>
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body>
    <header>
        <nav>
         <div class="nav-left">
     
             <img class="logo"src="../images\imagekalogo.jpg" alt="logo">
             <span class="website-name">
                 <img src="../images/text.jpg" height="100px">
             </span>
             <ul class="nav-content">
                 <li>
                     <a href="index.html" target="_blank">Home
                     </a>
                     </li>
                 <li>
                     <a href="aboutus.html" target="_blank">About us
                     </a>
                     </li>
                 <li>
                     <a href="dinein.html" target="_blank">Dine in
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
                     <li><a href="profile.html">Signup/SignIn</a></li>
                     <li><a href="userdashborad.html">User dashboard</a></li>
                 </ul>
                 <script src="js/home.js"></script>
             </div>
             <div>
                 <i class="fa-solid fa-bag-shopping"></i>
                 <a href="cart.html">
                 <p>Cart</p>
             </a>
             </div>
         </div>
     
         </div>
     
        </nav>
        </header>

   
   <div class="container">
    <div class="text-content">
      <h1>Get sizzling deals on your favorite dishes!</h1>
      <p>Enjoy up to 50% off on a wide variety of your favorite meals. 
        Whether you're in the mood for something cheesy, sweet, or spicy, 
        you can indulge without breaking the bank. Only with BiteSize!
      </p>
      <button class="btn"> Explore Now </button>
    </div>
    
    <div class="image-content">
      <img src="../images/bitenow.jpg" alt="bowl of something">
    </div>
  </div>
  
  <div class="slides">
    <h1>What's on Your Mind?</h1>
    <div class="slider-container">
        <div class="slider">
            <div class="slide">
                <div class="item">
                    <div class="icon-container">
                        <i class="fas fa-cheese"></i>
                    </div>
                    <span>
                    <a href="cheese.php">Cheesy Cravings
                    </a>
                    </span>
                    
                </div>
            </div>
            <div class="slide">
                <div class="item">
                    <div class="icon-container">
                        <i class="fas fa-cake"></i>
                    </div>
                    <span>
                    <a href="sweet.php">Sweet Tooth Fix
                    </a>
                    </span>
                </div>
            </div>
            <div class="slide">
                <div class="item">
                    <div class="icon-container">
                        <i class="fa-solid fa-house-user"></i>
                    </div>
                    <span>
                    <a href="ghar.php">Ghar ka Pyaar
                    </a>
                    </span>
                </div>
            </div>
            <div class="slide">
                <div class="item">
                    <div class="icon-container">
                        <i class="fas fa-carrot"></i>
                    </div>
                    <span>
                    <a href="fresh.php">Fresh & Feelin' Good
                    </a>
                    </span>
                </div>
            </div>
            <div class="slide">
                <div class="item">
                    <div class="icon-container">
                        <i class="fas fa-burger"></i>
                    </div>
                    <span>
                    <a href="indulge.php">Indulge Away
                    </a>
                    </span>
                </div>
            </div>
            <div class="slide">
                <div class="item">
                    <div class="icon-container">
                        <i class="fas fa-fire"></i>
                    </div>
                    <span>
                    <a href="cheese.php">Masaledar Moments
                    </a>
                    </span>
                </div>
            </div>
            <div class="slide">
                <div class="item">
                    <div class="icon-container">
                        <i class="fa-solid fa-bowl-food"></i>
                    </div>
                    <span>
                    <a href="cheese.php">
                        Asian Mood
                         </a>
                        </span>
                </div>
            </div>
        </div>
        <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
        <button class="next" onclick="moveSlide(1)">&#10095;</button>
    </div>
</div>


</div>
<script src="../js/menu.js"></script>
<!-- Hero Section -->
<section class="hero-section">
    <div class="hero-content">
        <h1>Can't decide what you wanna eat?</h1>
        <p>Say goodbye to food indecision! Our AI-driven food selection tool takes the guesswork out of mealtime, providing you with personalized recommendations that fit your lifestyle, preferences, and nutritional goals. Whether you're a foodie, a busy professional, or a health enthusiast, our AI is here to guide you towards the perfect bite.</p>
        <div class="input-group">
            <input type="text" placeholder="Bite into the Best">
            <i class="location-icon"></i>
        </div>
        <div class="AI">
            <button class="AI-btn">Ask FlavorBot</button>
        </div>
    </div>
    <div class="hero-img">
        <img src="../images/aikaimage.jpg" alt="Main Dish">       
    </div>
</section>

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


</body>
</html>
