<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dine in</title>
    <link rel="stylesheet" href="../css/dinein.css">
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
                    <a href="index.php">Home
                    </a>
                    </li>
                 <li>
                     <a href="aboutus.php" target="_blank">About us
                     </a>
                     </li>
                 <li>
                     <a href="dinein.php" target="_blank" style="color: #ff4500;">Dine in
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
                <a href="cart.html">
                 <i class="fa-solid fa-bag-shopping"></i>
                 <p>Cart</p>
             </a>
             </div>
         </div>
     
         </div>
     
        </nav>
        </header>
     
   <div class="container">
    <div class="text-content">
        <h1>Order Ahead, Skip the Wait!</h1>
        <p>Discover and reserve table in your favorite restaurants, ready when you arrive.</p>
        <button class="btn"> Look Around</button>
       
        <div class="stats">
            <div class="stat">
                <h3>786+</h3>
                <p>Restaurants</p>
            </div>
            <div class="stat">
                <h3>281K+</h3>
                <p>Slots Booked</p>
            </div>
            <div class="stat">
                <h3>1.12M+</h3>
                <p>Served Clients</p>
            </div>
        </div>
    </div>
    <div class="image-content">
        <img src= "../images/resto.avif" alt="Restaurant Image">
    </div>
</div>
<section class="how-it-works">
    <h1 >How It Works</h1>
    <p style="text-align: center; color: black;">Order your favorite meals for dine-in in just a few clicks! 
    Browse our restaurant selection, choose your dishes, and reserve a table for an unforgettable
    <br> dining experience. Enjoy your meals hot and fresh right at the restaurant, 
        where you can savor every bite in a welcoming atmosphere.</p>
    <div class="steps-container">
        <div class="step-box">
            <img src="../images/restauranttype.avif" alt="Select Restaurant">
            <h3>01 Select Restaurant Type</h3>
            <p> start by choosing the type of restaurant they are interested in, such as casual dining, fine dining, or fast-casual.</p>
        </div> 
        <div class="step-box">
            <img src="../images/browse.jpg" alt="Select Menu">
            <h3>02 Browse and Select</h3>
            <p>After selecting a type, users can browse through available restaurants, view detailed menus, ratings, and reviews. 
                They can compare different options before making a choice.</p>
        </div>
        <div class="step-box">
            <img src="../images/table.jpg" alt="Wait for Delivery">
            <h3>03 Reserve the Table</h3>
            <p>Once a restaurant is selected, users can book a table directly
                 through the BiteSize platform, viewing real-time 
                availability and receiving instant confirmation.</p>
        </div>
    </div>
</section>

<div class="restaurant-types">
    <h2>Choose Your Restaurant Type</h2>
    <div class="types-grid">
        <div class="type-option">
            <button class="btn">
                <i class="fa-solid fa-burger"></i>
                <a href="restaurants.php">
                Fast Food
                </a></button>
        </div>
        <div class="type-option">
            <button class="btn">
                <i class="fa-solid fa-martini-glass-citrus"></i>
                <a href="fine.php">
                Fine Dining
                </a></button>
        </div>
        <div class="type-option">
            <button class="btn">
                <i class="fa-solid fa-mug-saucer"></i>
                <a href="cafe.php">
                Cafes
                </a>
            </button>
        </div>
        <div class="type-option">
            <button class="btn">
                <i class="fa-solid fa-bowl-food"></i>
                Buffet</button>
        </div>
        <div class="type-option">
            <button class="btn">
                <i class="fa-solid fa-utensils"></i> 
                <a href="casual.php">
                Casual Dining
                </a></button>
        </div>
        <div class="type-option">
            <button class="btn">
                <i class="fa-solid fa-pizza-slice"></i>
                Street Food</button>
        </div>
        
    </div>
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


