<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Listing</title>
    <link rel="stylesheet" href="../css/food.css">
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
        <div class="menu-container">
        <div class="restaurant-info">
            <h2>Tipsy Turtle</h2>
            <p>40-45 mins</p>
            <p>outlet - bavdhan</p>
        </div>

        
        <div class="menu-item">
    <div class="item-info">
        <h3>Veg Signature Special Burger</h3>
        <p>₹ 249</p>
    </div>
    <div class="item-image">
        <img src="images/home-burger.png" alt="Veg Signature Special Burger">
        
        <!-- Add form for adding item to cart -->
        <form action="add_to_cart.php" method="POST">
            <input type="hidden" name="product_name" value="Veg Signature Special Burger">
            <input type="hidden" name="product_price" value="249">
            <button type="submit" class="add-button">ADD</button>
        </form>
    </div>
</div>
    

        <div class="menu-item">
            <div class="item-info">
                <h3>Veg Crispy Double Patty Burger</h3>
                <p>₹ 199</p>
            </div>
            <div class="item-image">
                <img src="images/home-burger.png" alt="Veg Crispy Double Patty Burger">
                <button class="add-button">ADD</button>
            </div>
        </div>

        <div class="menu-item">
            <div class="item-info">
                <h3>Veg Makhani Burger</h3>
                <p>₹ 159</p>
            </div>
            <div class="item-image">
                <img src="images/home-burger.png" alt="Veg Makhani Burger">
                <button class="add-button">ADD</button>
            </div>
        </div>
        <div class="menu-item">
            <div class="item-info">
                <h3>Veg Makhani Burger</h3>
                <p>₹ 159</p>
            </div>
            <div class="item-image">
                <img src="images/home-burger.png" alt="Veg Makhani Burger">
                <button class="add-button">ADD</button>
            </div>
        </div>
        <div class="menu-item">
            <div class="item-info">
                <h3>Veg Makhani Burger</h3>
                <p>₹ 159</p>
            </div>
            <div class="item-image">
                <img src="images/home-burger.png" alt="Veg Makhani Burger">
                <button class="add-button">ADD</button>
            </div>
        </div>
        <div class="menu-item">
            <div class="item-info">
                <h3>Veg Makhani Burger</h3>
                <p>₹ 159</p>
            </div>
            <div class="item-image">
                <img src="images/home-burger.png" alt="Veg Makhani Burger">
                <button class="add-button">ADD</button>
            </div>
        </div>
        <div class="menu-item">
            <div class="item-info">
                <h3>Veg Makhani Burger</h3>
                <p>₹ 159</p>
            </div>
            <div class="item-image">
                <img src="images/home-burger.png" alt="Veg Makhani Burger">
                <button class="add-button">ADD</button>
            </div>
        </div>
        <div class="menu-item">
            <div class="item-info">
                <h3>Veg Makhani Burger</h3>
                <p>₹ 159</p>
            </div>
            <div class="item-image">
                <img src="images/home-burger.png" alt="Veg Makhani Burger">
                <button class="add-button">ADD</button>
            </div>
        </div>
        <div class="menu-item">
            <div class="item-info">
                <h3>Veg Makhani Burger</h3>
                <p>₹ 159</p>
            </div>
            <div class="item-image">
                <img src="images/home-burger.png" alt="Veg Makhani Burger">
                <button class="add-button">ADD</button>
            </div>
        </div>
        <div class="menu-item">
            <div class="item-info">
                <h3>Veg Makhani Burger</h3>
                <p>₹ 159</p>
            </div>
            <div class="item-image">
                <img src="images/home-burger.png" alt="Veg Makhani Burger">
                <button class="add-button">ADD</button>
            </div>
        </div>
        <div class="menu-item">
            <div class="item-info">
                <h3>Veg Makhani Burger</h3>
                <p>₹ 159</p>
            </div>
            <div class="item-image">
                <img src="images/home-burger.png" alt="Veg Makhani Burger">
                <button class="add-button">ADD</button>
            </div>
        </div>
    </div>